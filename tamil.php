<?php

session_start();

$_SESSION['language']='tamil';

header('Location: ' . $_SERVER['HTTP_REFERER']);



?>