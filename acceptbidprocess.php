<?php

session_start();
require_once("dbconnect.php");
require_once("checkstatus.php");

$accountid=$_SESSION['accountid'];
$itemid=$_POST['itemid'];
$bidprice=$_POST['bidprice'];

$sql= "insert into tblbidhistory(accountid,biditemid,bidprice,dtesubmitted) values($accountid, $itemid,$bidprice, NOW())";
$result=mysql_query($sql) or die ("Error in adding bid for item: ".mysql_error());

header('location:listbiditems.php');
?>

<html>
<head><title>bid sucess</title></head>

<body>
<p>Bid sucessfully accepted</p>
<p><a href="listbiditems.php">Back to list</a> </p>
</body>
</html>




