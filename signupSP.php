<!DOCTYPE html >

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>baas.lk</title>

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
	require_once('classes/RegistrationSP.php');

	// create the registration object
	$registration = new Registration();
	
	
	?>

	<div id ="apDivBox">

		<div id="apDivTitle"><?php echo CREATEYOURBAASACCOUNT ; ?></div>

		<?php if (!$registration->registration_successful && !$registration->verification_successful) { ?>

		
	
		<div id="apDivFbLogin">
  			<p style="font-size:20px"><?php echo FEDUPWITHFILLINGFORMS ; ?>...???</p>
  			<p style="font-size:20px"><?php echo TRYEASYSIGNUPSOLUTION ; ?> ..</p>
			
  			<a href = "fbLogin/fbSignupStatus.php?catagory=sp">
  			<p><img src="images/fb-logo-signup.png" width="250" height="53" /></p>
  			</a>
  			<a href = "google/sp.php">
   			<p><img src="images/googleSignup.png" width="255" height="54" /></p>
			</a>
		</div>

		

		<div id="apDivFormBox"> 

	

  			<form method="post" action="" name="registerform">
    		
    		<label for="user_name">
   			<p><?php echo CHOOSEYOURUSERNAME ; ?></p></label>
    		<input name="user_name" type="text" required class="textField" id="username" pattern="[a-zA-Z0-9]{2,64}" />
    		<div id="error"><div id="status"></div></div>
    		<label for="user_email">
    		<p><?php echo EMAILADDRESS ; ?> </p></label>
    		<input name="user_email" type="email" required class="textField" id="inputID" />
    		<div id="error_email"><div id="invalidEmailError" style="display:none">Please enter a valid email address</div>    
            </div id="error_email">
		    <label for="user_password_new"><p><?php echo CREATEAPASSWORD ; ?></p></label>
		    <input name="user_password_new" type="password" required class="textField" id="user_password_new" pattern=".{6,}" autocomplete="off" />

		    <label for="user_password_repeat"><p><?php echo CONFIRMYOURPASSWORD ; ?></p></label>
		    <input name="user_password_repeat" type="password" required class="textField" id="user_password_repeat" pattern=".{6,}" autocomplete="off" />
			
    		<input name="register" type="submit" class="signupBtn" value="<?php echo SIGNUP ; ?>"/>
			</form>

		<?php } ?>

		</div>

	</div>

	<?php
	// show potential errors / feedback (from registration object)
	if (isset($registration)) {
   		if ($registration->errors) {
        	foreach ($registration->errors as $error) {
           		echo "<div id=\"apDivError\">".$error."</div>";
        		}
    		}
    	if ($registration->messages) {
        	foreach ($registration->messages as $message) {        		
           		echo "<div id=\"apDivMessage\" style=\"left :10%\">".$message."</div>";
        		}
    	}
	}
	?>
	
	<?php
	
	if(isset($_SESSION)){
	session_destroy();
	
	}
	
	
	?>
	
	
	
	
</body>
<script type="text/javascript" src="jquery-1.2.6.min.js"></script>

<link rel="stylesheet" type="text/css" href="style.css" />

<SCRIPT type="text/javascript">
<!--
/*
Credits: Bit Repository
Source: http://www.bitrepository.com/web-programming/ajax/username-checker.html 
*/

pic1 = new Image(16, 16); 
pic1.src = "loader.gif";

$(document).ready(function(){

$("#username").change(function() { 

var usr = $("#username").val();

if(usr.length >= 4)
{
$("#status").html('<img src="loader.gif" align="absmiddle">&nbsp;Checking availability...');

    $.ajax({  
    type: "POST",  
    url: "check.php",  
    data: "username="+ usr,  
    success: function(msg){  
   
   $("#status").ajaxComplete(function(event, request, settings){ 

	if(msg == 'OK')
	{ 
        $("#username").removeClass('object_error'); // if necessary
		$("#username").addClass("object_ok");
		$(this).html('&nbsp;<img src="tick.gif" align="absmiddle">');
	}  
	else  
	{  
		$("#username").removeClass('object_ok'); // if necessary
		$("#username").addClass("object_error");
		$(this).html(msg);
	}  
   
   });

 } 
   
  }); 

}
else
	{
	$("#status").html('<font color="red">The username should have at least <strong>4</strong> characters.</font>');
	$("#username").removeClass('object_ok'); // if necessary
	$("#username").addClass("object_error");
	}

});

});
 

$('#inputID').bind('blur focus', function(event){
    if(event.type === 'blur'){
        //cache jquery objects
        var $invalidEmailError = $('#invalidEmailError'),
            $submitButton = $('#submitButton'),
            $this = $(this);

        var v = $this.val();
        
        //trim spaces
        v =  v.replace(/^\s+|\s+$/g, "");

        //check email against regex
        if(v.match(/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i)){
            $invalidEmailError.hide();
            $submitButton.removeAttr('disabled').removeClass('disabled');
            $this.addClass('email-good').removeClass('email-bad');
        }
        else{
            $invalidEmailError.show();
            $submitButton.attr('disabled','disabled').addClass('disabled');
            $this.addClass('email-bad').removeClass('email-good');
        }
        //replace email with trimmed version
        $this.val(v);
    }
    //remove status styles while editing
    if(event.type === 'focus'){
        $(this).removeClass('email-bad email-good');
    }
});




</SCRIPT>

</html>
