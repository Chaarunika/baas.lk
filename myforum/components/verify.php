<?php

	
	session_start();
	
	$code= $_SESSION['code'];

	$enteredcode=$_REQUEST['enteredcode'];
	
	if($code==$enteredcode)
	{
	echo "activated";
	//header("location:http://localhost/php-login-advanced/edit-profile.php");
	}
	else
	{
	echo "wrong";
	}
	

		

?>