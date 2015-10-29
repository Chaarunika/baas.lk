<?php


class Login
{
    
    private $db_connection = null;
    private $user_id = null;
    private $user_name = "";
    private $user_email = "";
    private $loginstatus = false;
	private $catagory;
    public  $url;

    public function __construct()
    {
      
        session_start();
		
		//login with session data
		if (isset($_GET["logout"])) {
            $this->Logout();

       
        }
		
		//if cookies set login with cookie data
		
		else if(isset($_COOKIE['rememberme'])) {
			
            $this->loginWithCookies();
			}
		 // if user has an active session on the server
		else if(!empty($_SESSION['username']) && ($_SESSION['loginstatus'] == 1)) {
			echo "session";
            $this->loginWithSessionData();}
          

        // if user just submitted a login form

        else if (isset($_POST["login"])) {
            if (!isset($_POST['user_rememberme'])) {
                $_POST['user_rememberme'] = null;
            }
            $this->loginWithPostData($_POST['user_name'], $_POST['user_password'], $_POST['user_rememberme']);
        }
		
		


    }

  
    private function databaseConnection()
    {
        // if connection already exists
        if ($this->db_connection != null) {
            return true;
        } else {
            try {
          
                $this->db_connection = new PDO('mysql:host='. DB_HOST .';dbname='. DB_NAME . ';charset=utf8', DB_USER, DB_PASS);
                return true;
            } catch (PDOException $e) {
                echo DATABASE_ERROR;
            }
        }
        
        return false;
    }

    private function loginWithSessionData()
    {
        $this->user_name  = $_SESSION['username'];
        $this->user_email = $_SESSION['email'];
		 $this->user_id	  = $_SESSION['userID']; 
		$this->url		  =$_SESSION['url'];
		$this->user_catagory=$_SESSION['Catagory'];
        $this->loginstatus = true;
		
    }

  

    private function loginWithPostData($user_name, $user_password, $user_rememberme)
    {
		
         // user can login with his username or his email address.
     
		//if user has entered an username
			
        if (!filter_var($user_name, FILTER_VALIDATE_EMAIL)) {    
             $result_row = $this->getUserData(trim($user_name));
		}
		 
        // if user has entered a valid email address
			
        else if ($this->databaseConnection()) {
                
             $query_user = $this->db_connection->prepare('SELECT * FROM users WHERE user_email = :user_email');
             $query_user->bindValue(':user_email', trim($user_name), PDO::PARAM_STR);
             $query_user->execute();
             $result_row = $query_user->fetchObject();
        }

			
         // if this user not exists
         if (! isset($result_row->user_id)) {
         
            echo LOGIN_FAILED;
				
        } else if (($result_row->user_failed_logins >= 3) && ($result_row->user_last_failed_login > (time() - 30))) {
			
			//display captcha
			
			
           
		   
        } else if (!password_verify($user_password, $result_row->user_password_hash)) {
            // increment the failed login counter for that user
            $sth = $this->db_connection->prepare('UPDATE users '
                    . 'SET user_failed_logins = user_failed_logins+1, user_last_failed_login = :user_last_failed_login '
                    . 'WHERE user_name = :user_name OR user_email = :user_name');
            $sth->execute(array(':user_name' => $user_name, ':user_last_failed_login' => time()));
       
			echo PASSWORD_WRONG;
				
            // has the user activated their account with the verification email
            } else if ($result_row->user_active != 1) {
                echo ACCOUNT_NOT_ACTIVATED;
            } else {
             
				

                // reset the failed login counter for that user
                $sth = $this->db_connection->prepare('UPDATE users '
                        . 'SET user_failed_logins = 0, user_last_failed_login = NULL '
                        . 'WHERE user_id = :user_id AND user_failed_logins != 0');
                $sth->execute(array(':user_id' => $result_row->user_id));
				
				$this->sessionsAndData($result_row);
				
                if (isset($user_rememberme)) {
				
                  
				     $this->newRememberMeCookie();
				
                } else 
				{  
                   $this->deleteRememberMeCookie();
				  
                }

            }
    }
    


    public function checkloginstatus()
    {
        return $this->loginstatus;
    }
	
	 private function getUserData($user_name)
    {
        // if database connection opened
        if ($this->databaseConnection()) {
            // database query, getting all the info of the selected user
            $query_user = $this->db_connection->prepare('SELECT * FROM users WHERE user_name = :user_name');
            $query_user->bindValue(':user_name', $user_name, PDO::PARAM_STR);
            $query_user->execute();
            // get result row (as an object)
            return $query_user->fetchObject();
        } else {
            return false;
        }
    }
	
	private function newRememberMeCookie()
    {
        // if database connection opened
        if ($this->databaseConnection()) {
            // generate 64 char random string and store it in current user data
            $random_token_string = hash('sha256', mt_rand());
            $sth = $this->db_connection->prepare("UPDATE users SET user_rememberme_token = :user_rememberme_token WHERE user_id = :user_id");
            $sth->execute(array(':user_rememberme_token' => $random_token_string, ':user_id' => $_SESSION['userID']));

            // generate cookie string that consists of userid, randomstring and combined hash of both
            $cookie_string_first_part = $_SESSION['userID'] . ':' . $random_token_string;
            $cookie_string_hash = hash('sha256', $cookie_string_first_part . COOKIE_SECRET_KEY);
            $cookie_string = $cookie_string_first_part . ':' . $cookie_string_hash;

           
			setcookie("rememberme", $cookie_string, time()+3600*24*14, "/",COOKIE_DOMAIN, 0);
			
        }
    }
	

	private function deleteRememberMeCookie()
    {
        // if database connection opened
        if ($this->databaseConnection()) {
		
            // Reset rememberme token
            $sth = $this->db_connection->prepare("UPDATE users SET user_rememberme_token = NULL WHERE user_id = :user_id");
            $sth->execute(array(':user_id' => $_SESSION['userID']));
			
        }
		//expire cookie
        setcookie('rememberme', false, time() - (3600 * 3650), '/', COOKIE_DOMAIN,0);
    }
	
	     
    private function loginWithCookies()
    {
	
        if (isset($_COOKIE['rememberme'])) {
            // extract data from the cookie
            list ($user_id, $token, $hash) = explode(':', $_COOKIE['rememberme']);
            // check cookie hash validity
            if ($hash == hash('sha256', $user_id . ':' . $token . COOKIE_SECRET_KEY) && !empty($token)) {
                // cookie looks good, try to select corresponding user
                if ($this->databaseConnection()) {
                    // get real token from database (and all other data)
                    $sth = $this->db_connection->prepare("SELECT * FROM users WHERE user_id = :user_id
                                                      AND user_rememberme_token = :user_rememberme_token AND user_rememberme_token IS NOT NULL");
                    $sth->bindValue(':user_id', $user_id, PDO::PARAM_INT);
                    $sth->bindValue(':user_rememberme_token', $token, PDO::PARAM_STR);
                    $sth->execute();
                    // get result row (as an object)
                    $result_row = $sth->fetchObject();

                    if (isset($result_row->user_id)) {
                        
                    	$this->sessionsAndData($result_row);

                        // Cookie token usable only once
                        $this->newRememberMeCookie();
                        return true;
                    }
                }
            }
          
        }
        return false;
    }
	
	//logout 
	//destroy all sessions and cookies created
	 public function Logout()
    {
        $this->deleteRememberMeCookie();

        $_SESSION = array();
        session_destroy();

        $this->loginstatus = false;
		header('location:../BAAS_LK/index.php');
    }
	
	private function sessionsAndData($result_row)
	{
				//creating sessions of user data
				
                $_SESSION['userID'] = $result_row->user_id;
                $_SESSION['username'] = $result_row->user_name;
                $_SESSION['email'] = $result_row->user_email;
                $_SESSION['loginstatus'] = 1;
				$url="images/".$result_row->user_avatar;
				$_SESSION['Catagory']=$result_row->user_catagory;
				$_SESSION['url']=$url;

                //add data to login object
				
                $this->user_id = $result_row->user_id;
                $this->user_name = $result_row->user_name;
                $this->user_email = $result_row->user_email;
                $this->loginstatus= true;
				$this->catagory=$result_row->user_catagory;
				$this->url=$url;
				
	}
  
}
