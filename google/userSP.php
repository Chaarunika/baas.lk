<?php

require_once('_database/database.php'); 
session_start();

	$email=$_GET['email'];
	$sql = "SELECT * FROM users where user_email='".$email."'";
    $result = mysqli_query($database,$sql) or die(mysqli_error($database)); 
    $rws = mysqli_fetch_array($result);
	
	$_SESSION['userID']=$rws['user_id'];
	$_SESSION['username']=$rws['user_name'];
	$_SESSION['email']=$email;
	$_SESSION['firstname']=$rws['user_firstname'];
	$_SESSION['lastname']=$rws['user_lastname'];
	$_SESSION['url']=$rws['user_avatar'];
	$_SESSION['Catagory']=$rws['user_catagory'];
	$_SESSION['loginType'] = $rws['login_type'] ;
	header('location:../index.php');


?>