<?php

session_start();
require_once __DIR__ . '/facebook-sdk-v5/autoload.php';


$fb = new Facebook\Facebook([
'app_id' => '405706082952850',
'app_secret' => '4db495f644b8175b9f91968047941582',
'default_graph_version' => 'v2.2',]);

$helper = $fb->getRedirectLoginHelper();
$permissions = ['email']; // optional
$loginUrl = $helper->getLoginUrl('http://localhost/BAAS_LK/fbLogin/fbSignupStatusRedirect.php', $permissions);


if(isset($_GET['catagory']))
{
	$_SESSION['Catagory']=$_GET['catagory'];
}

header('location:'.$loginUrl);
?>