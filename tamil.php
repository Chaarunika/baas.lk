<?php

session_start();

$_SESSION['language']='tamil';

if($_SERVER['HTTP_REFERER']!='http://localhost/BAAS_LK/searchSP.php')
{
	header('Location: ' . $_SERVER['HTTP_REFERER']);
}

else
{
	header('Location: http://localhost/BAAS_LK/index.php');
}



?>