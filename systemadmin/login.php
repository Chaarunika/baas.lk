<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'baaslk';


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

$_SESSION["username"] = $username;
$sql="SELECT username,password FROM systemadmin WHERE username='$username' and password='$password'";
$result=$conn->query($sql);

echo $result->num_rows; 

if($result->num_rows==1)
{
header("location:home.php");
}
else
{
header("location:index.php");

}


$conn->close();
?>



