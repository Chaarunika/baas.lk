<?php 
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    if(!$_SESSION["username"]){
        header("location:login.php?session=notset");
	
    }
	?>