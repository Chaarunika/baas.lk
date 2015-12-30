<?php

session_start();

$_SESSION['language']='sinhala';

header('Location: ' . $_SERVER['HTTP_REFERER']);



?>