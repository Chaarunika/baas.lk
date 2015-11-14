<?php
include "dbconnect.php"; 
session_start();
$username = $_POST['textfield'];
$password = $_POST['textfield2'];

$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$password = md5($password);


$sql="SELECT username,password FROM systemadmin WHERE username='$username' and password='$password'";
$result=$conn->query($sql);

echo $result->num_rows; 

if($result->num_rows==1)
{
$_SESSION["username"] = $username;
header("location:home.php");
}
else
{
header("location:index.php");

}

$conn->close();
?>