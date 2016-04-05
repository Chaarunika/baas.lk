<?php

    if($_SERVER['SERVER_ADDR']== "::1"){
        $hostname = "localhost";
        $user = "root";
        $password = "";
        $database = "baaslk";
        $prefix = "";
        $database=mysqli_connect($hostname,$user,$password,$database);

        //$conn=mysqli_connect($hostname,$user,$password,$database);

        
        if (!$database) {
        die("Connection failed: " . mysqli_connect_error());
        }


        define("DB_HOST", "localhost");
        define("DB_NAME", "baaslk");
        define("DB_USER", "root");
        define("DB_PASS", "");

        $dbConnection=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
       
        if (!$dbConnection){
            die("Database Connection failed : " . mysqli_connect_error());
        }
    }

    else{
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
    }
?>
