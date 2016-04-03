<?php 
require_once('googlesdkCustomer/src/Google_Client.php');    
require_once('googlesdkCustomer/src/contrib/Google_Oauth2Service.php');
$client = new Google_Client();
$client->setApplicationName("Google UserInfo PHP Starter Application");
$oauth2 = new Google_Oauth2Service($client);



	$authUrl = $client->createAuthUrl();
	header('Location: ' . filter_var($authUrl, FILTER_SANITIZE_URL));
		

 
?>