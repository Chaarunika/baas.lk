<?php
include "dbconnect.php"; 
$username = $_POST['textfield'];
$password = $_POST['textfield2'];

$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$password = md5($password);


$sql="SELECT adminusername,password FROM systemadmin WHERE adminusername='$username' and password='$password'";
$result=$conn->query($sql);

echo $result->num_rows; 

if($result->num_rows==1)
{
session_start();
$_SESSION["adminusername"] = $username;
header("location:home.php");
}
else
{
header("location:index.php");

}

$conn->close();
?>