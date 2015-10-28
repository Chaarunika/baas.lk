
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<?php require '_database/database.php';?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<link href="main.css" rel="stylesheet">
<link href="login.css" rel="stylesheet">
<link href="css/header.css" rel="stylesheet">
</head>

<div id="joinus">
<a href="signup.php"><img src="images/joinus.png"></a> 

</div>

<div id="login">
<a href="login.php"><img src="images/login.png"></a> 

</div>

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

/**
 * A simple PHP Login Script / ADVANCED VERSION
 * For more versions (one-file, minimal, framework-like) visit http://www.php-login.net
 *
 * @author Panique
 * @link http://www.php-login.net
 * @link https://github.com/panique/php-login-advanced/
 * @license http://opensource.org/licenses/MIT MIT License
 */
require_once('libraries/password_compatibility_library.php');

// include the config
require_once('config/config.php');

// include the to-be-used language, english by default. feel free to translate your project and include something else
require_once('translations/en.php');

// include the PHPMailer library
require_once('libraries/PHPMailer.php');

// load the login class
require_once('classes/Login.php');

// create a login object. when this object is created, it will do all login/logout stuff automatically
// so this single line handles the entire login process.
$login = new Login();
include('header.php'); 

?>

<div id="login-form-box">

 
  
  <div id="login-form">
<?php


// ... ask if we are logged in here:






if ($login->isUserLoggedIn() == true) {
    // the user is logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are logged in" view.
		
	$username=$_SESSION['user_name'];
    $sql = "SELECT * FROM users where user_name='$username'";
    $result = mysqli_query($database,$sql) or die(mysqli_error($database)); 
    $rws = mysqli_fetch_array($result);
	
	
	$_SESSION['username']=$username;
	$_SESSION['email']=$rws['user_email'];
	$_SESSION['loginstatus']=1;
	$_SESSION['userID']=$rws['user_id'];
	$url="images/".$rws['user_avatar'];
	$_SESSION['Catagory']=$rws['user_catagory'];
	$_SESSION['url']=$url;
	
	

	
	header("Location:http://localhost/BAAS_LK/profile.php");
	
	
	
	

} else {
    // the user is not logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are not logged in" view.
	
	?>
	


	
	<?php include "views/not_logged_in.php" ?>
	
 </div>
  
  
 
  
  <a href = "fbLogin/fbSignupStatus.php">
  <div id="facebook"><img src="images/facebook-login.png" alt="" width="150" height="33" /></div>
  </a>
</div>	
 
<?php	
}

?>



</html>

