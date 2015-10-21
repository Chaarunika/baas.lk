<?php
foreach($_POST as $name => $content) { // Most people refer to $key => $value
    $spid=$name;
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "baaslk";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="DELETE FROM serviceprovider WHERE sp_id=$spid";
$result = mysqli_query($conn, $sql);
mysqli_close($conn);
header('location:removeserviceprovider.php');
?>