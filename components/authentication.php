<?php
	
	if(!isset($_SESSION['user_name']))
{
   session_start();
}
    
    require '_database/database.php';
    $user_username=$_SESSION['user_name'];
?>