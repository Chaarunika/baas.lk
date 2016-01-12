<!DOCTYPE html >

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Untitled Document</title>

	<style></style>
	<link href="css/header.css" rel="stylesheet" />
	<link href="css/signup.css" rel="stylesheet" />
</head>

<body>

	<?php include("header.php"); ?>

	<?php

	require_once('_database/database.php');
    require_once('libraries/password_compatibility_library.php');
	require_once('config/configCustomer.php');	
	require_once('libraries/PHPMailer.php');
	require_once('classes/RegistrationCustomer.php');

	// create the registration object
	$registration = new Registration();
	?>

	<div id ="apDivBox">

		<div id="apDivTitle">Create	your baas.lk Account</div>

		<?php if (!$registration->registration_successful && !$registration->verification_successful) { ?>

		<div id="apDivFbLogin">
  			<p style="font-size:20px">Fed up with filling forms...???</p>
  			<p style="font-size:20px">Try easy signup solutions..</p>

  			<a href = "fbLogin/fbSignupStatus.php?catagory=customer">
  			<p><img src="images/fb-logo-signup.png" width="250" height="53" /></p>
  			</a>
			
			<a href = "google/customer.php">
   			<p><img src="images/googleSignup.png" width="255" height="54" /></p>
			</a>
		</div>

		

		<div id="apDivFormBox"> 

  			<form method="post" action="" name="registerform">
    		
    		<label for="user_name">
   			<p>Choose your username</p></label>
    		<input name="user_name" type="text" required class="textField" id="user_name" pattern="[a-zA-Z0-9]{2,64}" />

    		<label for="user_email">
    		<p>Email Address (verification Required)</p></label>
    		<input name="user_email" type="email" required class="textField" id="user_email" />    

		    <label for="user_password_new"><p>Create a password (minimun 6 characters)</p></label>
		    <input name="user_password_new" type="password" required class="textField" id="user_password_new" pattern=".{6,}" autocomplete="off" />

		    <label for="user_password_repeat"><p>Confirm your password</p></label>
		    <input name="user_password_repeat" type="password" required class="textField" id="user_password_repeat" pattern=".{6,}" autocomplete="off" />

    		<input name="register" type="submit" class="signupBtn" value="signup"/>
			</form>

		<?php } ?>

		</div>

	</div>

	<?php
	// show potential errors / feedback (from registration object)
	if (isset($registration)) {
   		if ($registration->errors) {
        	foreach ($registration->errors as $error) {
           		echo "<div id=\"apDivMessage\" >".$error."</div>";
        		}
    		}
    	if ($registration->messages) {
        	foreach ($registration->messages as $message) {        		
           		echo "<div id=\"apDivMessage\" style=\"left :10%\">".$message."</div>";
        		}
    	}
	}
	?>

	<?php if(isset($_SESSION)){
	session_destroy();
	}?>
</body>

</html>
