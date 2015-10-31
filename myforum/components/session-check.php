<?php
    
    require '_database/database.php';
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    if(!$_SESSION['user_name']){
        header("location:login.php?session=notset");
	
    }
?>