<?php
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	
    require '_database/database.php';
	
	if (isset($_SESSION['registered'])) 
	{
	if($_SESSION['user_username'])
	   {
        header("location:home.php");
		}    
  
}
      
    
?>