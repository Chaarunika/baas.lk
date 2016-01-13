
<?php
//Translate to sinhala
session_start();

$_SESSION['language']='sinhala';

if($_SERVER['HTTP_REFERER']!='http://localhost/baas.lk/searchSP.php')
{
	header('Location: ' . $_SERVER['HTTP_REFERER']);
}

else
{
	header('Location: http://localhost/BAAS_LK/index.php');
}

?>