<?php
require_once('_database/database.php'); 
require_once('googlesdkSP/src/Google_Client.php');    
require_once('googlesdkSP/src/contrib/Google_Oauth2Service.php');
$client = new Google_Client();
$client->setApplicationName("Google UserInfo PHP Starter Application");
$oauth2 = new Google_Oauth2Service($client);


if (isset($_GET['code'])) {
  $client->authenticate($_GET['code']);
  $token = $client->getAccessToken();
  if($token)
  {
    $user_profile = $oauth2->userinfo->get();  
    
	
	$id= $user_profile['id'];
	$email= $user_profile['email'];
	$firstname= $user_profile['given_name']; 
	$lastname=  $user_profile['family_name'];
	$url= $user_profile['picture'];
	
	$loginType="google";	
	$userActive=1;

	$sql = "SELECT * FROM users where user_email='".$email."'";
    $result = mysqli_query($database,$sql) or die(mysqli_error($database)); 
    $rws = mysqli_fetch_array($result);

    $count = 0;  // variable to chech wther user already exists
	
		if($email==$rws['user_email'])
		{
			//user exists
			session_start();

			$sql = "SELECT * FROM users where user_email='".$email."'";
    		$result = mysqli_query($database,$sql) or die(mysqli_error($database)); 
    		$rws = mysqli_fetch_array($result);
	
			$_SESSION['userID']=$rws['user_id'];
			$_SESSION['username']=$rws['user_name'];
			$_SESSION['email']=$email;
			$_SESSION['firstname']=$rws['user_firstname'];
			$_SESSION['lastname']=$rws['user_lastname'];
			$_SESSION['url']=$rws['user_avatar'];
			$_SESSION['Catagory']=$rws['user_catagory'];
			$_SESSION['loginType'] = $rws['login_type'] ;
			header('location:../index.php');
			

		}
		
		else
		{
						//new user

			session_start();

		

			$id= $user_profile['id'];
			$email= $user_profile['email'];
			$firstname= $user_profile['given_name']; 
			$lastname=  $user_profile['family_name'];
			$url= $user_profile['picture'];
	
			$loginType="google";	
			$userActive=1;

		
			$_SESSION['userID']=$id;
			$_SESSION['username']=$id;
			$_SESSION['email']=	$email;
			$_SESSION['firstname']=$firstname;
			$_SESSION['lastname']=$lastname;
			$_SESSION['url']=$url;
			$_SESSION['Catagory']="sp";
			$_SESSION['loginType'] = $loginType ;

			  
				//These variales are defined for fb logged users	
			$userCatagory= "sp";
			$loginType="google";	
			$userActive=1;

			$_SESSION['loginType'] = $loginType ;

			
				    
			$db_connection = new PDO('mysql:host='. DB_HOST .';dbname='. DB_NAME . ';charset=utf8', DB_USER, DB_PASS);
					      // write new users data into database
			$query_new_user_insert = $db_connection->prepare('INSERT INTO users (user_name,user_email,user_active,user_registration_ip, user_registration_datetime,user_firstname,user_lastname,user_avatar,user_catagory,login_type) VALUES(:user_name,:user_email,:user_active, :user_registration_ip, now(),:user_firstname,:user_lastname,:user_avatar,:user_catagory,:login_type)');
					
			$query_new_user_insert->bindValue(':user_name', $id, PDO::PARAM_STR);
			$query_new_user_insert->bindValue(':user_email', $email, PDO::PARAM_STR);
			$query_new_user_insert->bindValue(':user_active', $userActive, PDO::PARAM_BOOL);
			$query_new_user_insert->bindValue(':user_registration_ip', $_SERVER['REMOTE_ADDR'], PDO::PARAM_STR);		
			$query_new_user_insert->bindValue(':user_firstname',$firstname, PDO::PARAM_STR);
			$query_new_user_insert->bindValue(':user_lastname',$lastname, PDO::PARAM_STR);
			$query_new_user_insert->bindValue(':user_avatar',$url, PDO::PARAM_STR);
			$query_new_user_insert->bindValue(':user_catagory',$userCatagory, PDO::PARAM_STR);
			$query_new_user_insert->bindValue(':login_type',$loginType, PDO::PARAM_STR);
			$query_new_user_insert->execute();
								
			$user_id = $db_connection->lastInsertId();

						
			$query_new_user_insert = $db_connection->prepare('INSERT INTO serviceprovider(user_id) VALUES(:user_id)');
			$query_new_user_insert->bindValue(':user_id', $user_id, PDO::PARAM_STR);
			$query_new_user_insert->execute();
			$_SESSION['Catagory']	= "sp" ;
			

			header('location: ../index.php');
			




		
		}
		
	
	
	}

}




?>