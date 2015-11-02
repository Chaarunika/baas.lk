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
			header('location:userSP.php?email='.$email) ;

		}
		
		else
		{
			//new user
		
		
		}
		
	
	
	}

}




?>