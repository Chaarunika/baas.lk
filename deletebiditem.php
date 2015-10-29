<?php
session_start();
require_once("_database/database.php");

$deleteid=$_GET['biditemid'];
$sql="DELETE FROM tblbiditems WHERE biditemid=$deleteid";

$result = mysqli_query($dbConnection,$sql);
    
    if(!$result){
      die("Database query failed.");
    }    
    

?>

<html>
<head><title> deleting items</title></head>

<body>
<p>Auction item sucessfully deleted</p>
<p> <a href=menu.php>menu</a></p>
</body>

</html>