<?php
    $hostname = "localhost";
    $user = "root";
    $password = "";
    $database = "baaslk";
    $prefix = "";
    $database=mysqli_connect($hostname,$user,$password,$database);

    //$conn=mysqli_connect($hostname,$user,$password,$database);

    define("DB_HOST", "localhost");
	define("DB_NAME", "baaslk");
	define("DB_USER", "root");
	define("DB_PASS", "");


    if (!$database) {
    die("Connection failed: " . mysqli_connect_error());
    }
?>
