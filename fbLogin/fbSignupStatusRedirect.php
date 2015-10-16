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

	$_SESSION['loginType'] = $loginType ;

	$sql = "SELECT * FROM users where user_name=$id";
    $result = mysqli_query($database,$sql) or die(mysqli_error($database)); 
    $rws = mysqli_fetch_array($result);

    $count = 0;  // variable to chech wther user already exists
	if($id==$rws['user_name'])
	{
	$_SESSION['catagory']	= $rws['user_catagory'] ;  //user catagory for session for previously signed fb users$_SESSION['catagory']	= $rws['user_catagory'] ;
	$_SESSION['userID']	= $rws['user_id'] ;
    $count++ ; 
    header('location: ../index.php');

	}
	else{

		header('location: selectUserFB.php');
	}
}
	?>