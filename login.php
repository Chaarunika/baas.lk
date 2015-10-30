
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<?php require '_database/database.php';?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<link href="main.css" rel="stylesheet">
<link href="login.css" rel="stylesheet">
<link href="css/header.css" rel="stylesheet">
<style type="text/css">
#apDiv1 {
	position:absolute;
	width:200px;
	height:30px;
	z-index:6;
	left: 207px;
	top: 300px;
}
</style>
</head>


<body>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

 
<p>&nbsp;</p>
<div id="signupbox">
  <div id="newto">
    <p>New to baas.lk?</p>
  </div>
  <div id="signupnow">
  <a href="signup.php">Sign UP NOW! </a></div>
</div>

</body>

<?php


require_once('libraries/password_compatibility_library.php');
require_once('config/config.php');
require_once('translations/en.php');
require_once('libraries/PHPMailer.php');
require_once('classes/Login.php');



?>

<div id="apDiv1">
<?php $login = new Login(); ?>

</div>

<?php
include('header.php'); 

?>

<div id="login-form-box">

	
  
  <div id="login-form">
  
<?php

if ($login->checkloginstatus() == true) {
   	
		header("Location:http://localhost/BAAS_LK/profile.php");
	}
	
	else 
	{

    include "views/not_logged_in.php" ;
	
	}
	
	?>
	
 </div>
  
  
 
  
  <a href = "fbLogin/fbSignupStatus.php">
  <div id="facebook"><img src="images/facebook-login.png" alt="" width="150" height="33" /></div>
  </a>
</div>	
 



</html>

