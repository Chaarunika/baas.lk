<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>


<link href="header.css" rel="stylesheet">
<link href="customerSignup.css" rel="stylesheet">

<style>
</style>
</head>

<body>


<?php

// check for minimum PHP version
if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit('Sorry, this script does not run on a PHP version smaller than 5.3.7 !');
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    // if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
    // (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
    require_once('libraries/password_compatibility_library.php');
}
// include the config
require_once('config/config.php');

// include the to-be-used language, english by default. feel free to translate your project and include something else
require_once('translations/en.php');

// include the PHPMailer library
require_once('libraries/PHPMailer.php');

// load the registration class
require_once('classes/Registration.php');

// create the registration object. when this object is created, it will do all registration stuff automatically
// so this single line handles the entire registration process.
$registration = new Registration();



?>



<?php include 'header.php' ?>




<div id="apDivFbLogin"><img src="images/fb-logo-signup.png" width="250" height="53" /></div>

<div id ="apDivBox">

<div id="apDivTitle">    Proceed to find a service provider	</div>


<div id="apDivFormBox"> 

<?php include("views/register.php"); ?>


 

</div>
 </div>

</body>
</html>
