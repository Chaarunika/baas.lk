<?php
ob_start();
include '../_database/database.php';
$username = $_POST['textfield'];
$password = $_POST['textfield2'];

$username = stripslashes($username);
$password = stripslashes($password);
$password = md5($password);


$sql="SELECT adminusername,password FROM systemadmin WHERE adminusername='$username' and password='$password'";
$result=$database->query($sql);

echo $result->num_rows; 

if($result->num_rows==1)
{
session_start();
$_SESSION["adminusername"] = $username;
$_SESSION["nowtab"] = "";
header("location:home.php");
}
else
{
header("location:index.php");

}

$database->close();
?>