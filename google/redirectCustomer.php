<?php

require_once('googlesdkCustomer/src/Google_Client.php');    
require_once('googlesdkCustomer/src/contrib/Google_Oauth2Service.php');
$client = new Google_Client();
$client->setApplicationName("Google UserInfo PHP Starter Application");
$oauth2 = new Google_Oauth2Service($client);


if (isset($_GET['code'])) {
  $client->authenticate($_GET['code']);
  $token = $client->getAccessToken();
  if($token){
    $user_profile = $oauth2->userinfo->get();  
    echo "<pre>";
    
	echo $user_profile['id'];  //id 
    echo $user_profile['email']; //email
    echo $user_profile['given_name']; //first name
    echo $user_profile['family_name']; //last name
    echo $user_profile['picture']; //url

}

}

?>