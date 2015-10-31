<?php
session_start();
require_once("dbconnect.php");
require_once("checkstatus.php");

$deleteid=$_GET['biditemid'];
$sql="delete from tblbiditems where biditemid=$deleteid";
$result=mysql_query($sql) or die("Error in deleting auction item: ".mysql_error());

?>

<html>
<head><title> deleting items</title></head>

<body>
<p>Auction item sucessfully deleted</p>
<p> <a href=menu.php>menu</a></p>
</body>

</html>