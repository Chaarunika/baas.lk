<?php
    $hostname = "localhost";
    $user = "root";
    $password = "";
    $database = "baaslk";
    $prefix = "";
    $database=mysqli_connect($hostname,$user,$password,$database);

    if (!$database) {
    die("Connection failed: " . mysqli_connect_error());
    }
?>
