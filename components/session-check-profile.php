<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    require '_database/database.php';
    $user_username = mysqli_real_escape_string($database,$_REQUEST['user_name']);
    if(!$_SESSION['user_name']){
        header("location:$user_name");
    }
?>