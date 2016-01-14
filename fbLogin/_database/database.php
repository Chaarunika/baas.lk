<?php
    $hostname = "mysql.hostinger.co.uk";
    $user = "u160949775_baas";
    $password = "baaslaepa";
    $database = "u160949775_baas";
    $prefix = "";
    $database=mysqli_connect($hostname,$user,$password,$database);


    if (!$database) {
    die("Connection failed: " . mysqli_connect_error());
    }
?>
			