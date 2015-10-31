<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<?php include 'header.php'?>
<?php include 'navbar/navigation.php'?>
<link href="main.css" rel="stylesheet">




<style type="text/css">
#serviceproviderbox {
	position:absolute;
	width:460px;
	height:400px;
	z-index:1;
	left: 700px;
	top: 250px;
		background-color: #F7F7F7;
	background-color: #ffffff;
	border: 2px solid #f0f0f0;
	border-radius: 10px;
}
#apDiv2 {
	position:absolute;
	width:631px;
	height:521px;
	z-index:2;
	left: 202px;
	top: 141px;
	background-color: #F7F7F7;
	background-color: #ffffff;
	border: 2px solid #f0f0f0;
	border-radius: 10px;
}

#box {
	position:absolute;
	width:375px;
	height:382px;
	z-index:2;
	left: 121px;
	top: 133px;
}

@font-face {
    font-family: BRITANIC;
    src: url(fonts/verdana.woff);
}
#signupasa {
	position:absolute;
	width:200px;
	height:53px;
	z-index:3;
	left: 60px;
	top: 350px;
	font-family:BRITANIC;
	font-size: 20px;
	color: #213266;
	font-weight:bold;
}
@font-face {
    font-family: BRITANIC;
    src: url(fonts/verdana.woff);
}

#general {
	position:absolute;
	width:200px;
	height:53px;
	z-index:3;
	left: 60px;
	top: 350px;
	font-family:BRITANIC;
	font-size: 20px;
	color: #213266;
	font-weight:bold;
}
#apDiv5 {
	position:absolute;
	width:207px;
	height:177px;
	z-index:2;
	left: 247px;
	top: 103px;
}

@font-face {
    font-family: BRITANIC;
    src: url(fonts/verdana.woff);
}

#sptitle {
	position:absolute;
	width:200px;
	height:115px;
	z-index:3;
	left: 57px;
	top: 55px;
	font-family:BRITANIC;
	font-size: 40px;
	color: #213266;
	font-weight:bold;
}

@font-face {
    font-family: BRITANIC;
    src: url(fonts/verdana.woff);
}

#looking{
	position:absolute;
	width:578px;
	height:115px;
	z-index:3;
	left: 30px;
	top: 25px;
	font-family:BRITANIC;
	font-size: 40px;
	color: #213266;
	font-weight:bold;
}


#apDiv7 {
	position:absolute;
	width:124px;
	height:45px;
	z-index:4;
	left: -494px;
	top: 353px;
}

@font-face {
    font-family: BRITANIC;
    src: url(fonts/verdana.woff);
}

#signUP {
	position:absolute;
	width:217px;
	height:50px;
	z-index:5;
	left: 150px;
	top: 350px;
	font-family:BRITANIC;
	font-size: 20px;
	color: #009900;
	font-weight:bold;
	}

@font-face {
    font-family: BRITANIC;
    src: url(fonts/verdana.woff);
}

#serviceprovider {
	position:absolute;
	width:217px;
	height:50px;
	z-index:5;
	left: 195px;
	top: 350px;
	font-family:BRITANIC;
	font-size: 20px;
	color: #009900;
	font-weight:bold;
	}

#home {
	position:absolute;
	width:145px;
	height:40px;
	z-index:1;
	left: 549px;
	top: 147px;
}
@font-face {
    font-family: BRITANIC;
    src: url(fonts/verdana.woff);
}
#apDiv1 {
	position:absolute;
	width:112px;
	height:55px;
	z-index:3;
	left: 971px;
	top: 335px;
	font-family:BRITANIC;
	font-size: 40px;
	color: #000099;
	font-weight:bold;
}


        /* just for the demo */
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 10px;
        }
        label {
            position: relative;
            vertical-align: middle;
            bottom: 1px;
        }
        input[type=text],
        input[type=password],
        input[type=submit],
        input[type=email] {
            display: block;
            margin-bottom: 15px;
        }
        input[type=checkbox] {
            margin-bottom: 15px;
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
<div id="apDiv2">
	<div id="looking">
    Proceed to find a service provider
	</div>

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



	
	
<div id="box">	
<div id="home"><img src="../images/fb-logo-signup.png" width="250" height="53" /></div>

<?php
	include("views/register.php");
?>
</div>	
</div>





<div id="apDiv1">or</div>

</body>
</html>