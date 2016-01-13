<?php
//Translate to English
session_start();

$_SESSION['language']='english';

if($_SERVER['HTTP_REFERER']!='http://localhost/BAAS_LK/searchSP.php')
{
	header('Location: ' . $_SERVER['HTTP_REFERER']);
}

else
{
	header('Location: http://localhost/BAAS_LK/index.php');
}


?>