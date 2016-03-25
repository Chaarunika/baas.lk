<?php

	session_start();
	require_once __DIR__ . '/facebook-sdk-v5/autoload.php';

if($_SERVER['SERVER_ADDR']== "::1"){
	$fb = new Facebook\Facebook([
	'app_id' => '1680299895566142',
	'app_secret' => '5d88d2a30ab36423a1a9aa3e8acc0865',
	'default_graph_version' => 'v2.2',]);
	$helper = $fb->getRedirectLoginHelper();
	$permissions = ['email']; // optional
	$loginUrl = $helper->getLoginUrl('http://localhost/BAAS_LK/fbLogin/fbSignupStatusRedirect_login.php', $permissions);
	//echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
	header('location:'.$loginUrl);
}

else{	
	$fb = new Facebook\Facebook([
	'app_id' => '833097200139012',
	'app_secret' => 'c7e3a807c57d71a9457c84c138b1815d',
	'default_graph_version' => 'v2.4',]);
	$helper = $fb->getRedirectLoginHelper();
	$permissions = ['email']; // optional
	$loginUrl = $helper->getLoginUrl('http://baas.lk/fbLogin/fbSignupStatusRedirect_login.php', $permissions);
	//echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
	header('location:'.$loginUrl);	
}

?>