<?php

session_start();

$_SESSION['language']='english';

header('Location: ' . $_SERVER['HTTP_REFERER']);



?>