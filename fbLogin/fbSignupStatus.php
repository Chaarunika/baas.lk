<?php

session_start();
require_once __DIR__ . '/facebook-sdk-v5/autoload.php';


$fb = new Facebook\Facebook([
'app_id' => '520230444818215',
'app_secret' => 'a468986e874bfc3b2a68fb4dfc5faa7c',
'default_graph_version' => 'v2.2',]);

$helper = $fb->getRedirectLoginHelper();
$permissions = ['email']; // optional
$loginUrl = $helper->getLoginUrl('http://baas.lk/fbLogin/fbSignupStatusRedirect.php', $permissions);


if(isset($_GET['catagory']))
{
	$_SESSION['Catagory']=$_GET['catagory'];
}

header('location:'.$loginUrl);
?>