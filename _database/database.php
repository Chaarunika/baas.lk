<?php
    $hostname = "mysql.hostinger.co.uk";
    $user = "u160949775_baas";
    $password = "baaslaepa";
    $database = "u160949775_baas";
    $prefix = "";
    $database=mysqli_connect($hostname,$user,$password,$database);

    //$conn=mysqli_connect($hostname,$user,$password,$database);

    
    if (!$database) {
    die("Connection failed: " . mysqli_connect_error());
    }


    define("DB_HOST", "mysql.hostinger.co.uk");
    define("DB_NAME", "u160949775_baas");
    define("DB_USER", "u160949775_baas");
    define("DB_PASS", "baaslaepa");

    $dbConnection=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

    if (!$dbConnection){
        die("Database Connection failed : " . mysqli_connect_error());
    }
?>
