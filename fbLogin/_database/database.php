<?php
if($_SERVER['SERVER_ADDR']== "::1"){
    $hostname = "localhost";
    $user = "root";
    $password = "";
    $database = "baaslk";
    $prefix = "";
    $database=mysqli_connect($hostname,$user,$password,$database);

    if (!$database) {
    die("Connection failed: " . mysqli_connect_error());
    }    
}

else{
    $hostname = "mysql.hostinger.co.uk";
    $user = "u160949775_baas";
    $password = "baaslaepa";
    $database = "u160949775_baas";
    $prefix = "";
    $database=mysqli_connect($hostname,$user,$password,$database);


    if (!$database) {
        die("Connection failed: " . mysqli_connect_error());
    }
}

?>
			