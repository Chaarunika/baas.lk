<?php

session_start();

include ('_database/database.php');


define("DB_HOST", "localhost");
define("DB_NAME", "baaslk");
define("DB_USER", "root");
define("DB_PASS", "");

require_once __DIR__ . '/facebook-sdk-v5/autoload.php';

$fb = new Facebook\Facebook([
  'app_id' => '405706082952850',
  'app_secret' => '4db495f644b8175b9f91968047941582',
  'default_graph_version' => 'v2.2',
  ]);

$helper = $fb->getRedirectLoginHelper();
try {
  $accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

if (isset($accessToken)) {
  // Logged in!
  $_SESSION['facebook_access_token'] = (string) $accessToken;

  	$fb->setDefaultAccessToken($accessToken);
	$res = $fb->get( '/me?fields=id,name,email,picture' );
	$user = $res->getGraphObject();



	$id= $user->getProperty( 'id' );
	$name=$user->getProperty( 'name' );
	$email= $user->getProperty( 'email' );
	$arr = explode(' ',trim($name));
	$firstname= $arr[0]; 
	$lastname= $arr[1]; 
	$picture=$user->getProperty('picture' );
	$url= $picture->getProperty('url');
	
	$_SESSION['username']=$id;
	$_SESSION['email']=$email;
	$_SESSION['firstname']=$firstname;
	$_SESSION['lastname']=$lastname;
	$_SESSION['url']=$url;

  
	//These variales are defined for fb logged users	
	$userCatagory= $_SESSION['Catagory'] ;
	$loginType="fb";	
	$userActive=1;

	$sql = "SELECT * FROM users where user_name=$id";
    $result = mysqli_query($database,$sql) or die(mysqli_error($database)); 
    $rws = mysqli_fetch_array($result);

    $count = 0;  // variable to chech wther user already exists
	if($id==$rws['user_name'])
	{
    $count++ ; 

	}
	
	if($count == 0)

		{
	    
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

		if($userCatagory == "sp")
		{				
		$query_new_user_insert = $db_connection->prepare('INSERT INTO serviceprovider(user_id) VALUES(:user_id)');
		$query_new_user_insert->bindValue(':user_id', $user_id, PDO::PARAM_STR);
		$query_new_user_insert->execute();
		}

		else if($userCatagory == "customer"){
		$query_new_user_insert = $db_connection->prepare('INSERT INTO customer(user_id) VALUES(:user_id)');
		$query_new_user_insert->bindValue(':user_id', $user_id, PDO::PARAM_STR);
		$query_new_user_insert->execute();

		}

	}

	//header('location:selectUserFB.php');
	
} 
elseif ($helper->getError()) {
  // The user denied the request
  exit;
}

header('location: ../index.php');
//echo "token: ".$_SESSION['facebook_access_token'];


?>