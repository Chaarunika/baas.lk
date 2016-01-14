<?php

session_start();
require_once __DIR__ . '/facebook-sdk-v5/autoload.php';


$fb = new Facebook\Facebook([
'app_id' => '520230444818215',
'app_secret' => 'a468986e874bfc3b2a68fb4dfc5faa7c',
'default_graph_version' => 'v2.2',]);

$helper = $fb->getRedirectLoginHelper();
$permissions = ['email']; // optional
$loginUrl = $helper->getLoginUrl('http://baas.lk/fbLogin/fbSignupStatusRedirect_login.php', $permissions);

//echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';

header('location:'.$loginUrl);
?>