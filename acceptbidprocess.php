<?php

session_start();
require_once("_database/database.php");

$accountid=$_SESSION['accountid'];
$itemid=$_POST['itemid'];
$bidprice=$_POST['bidprice'];

$sql= "insert into tblbidhistory(accountid,biditemid,bidprice,dtesubmitted) values($accountid, $itemid,$bidprice, NOW())";
$result=mysqli_query($database,$sql) or die ("Error in adding bid for item: ".mysqli_error());

header('location:listbiditems.php');
?>






