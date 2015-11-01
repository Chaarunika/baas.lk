<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$user= $_SESSION['username'];
$userphoto=$_SESSION['user_avatar'];
$usercatagory=$_SESSION['Catagory'];
$userphoto=$_SESSION['url'];
$topic=$_POST['topic'];
$detail=$_POST['detail'];


$host="localhost"; // Host name 
$username1="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="baaslk"; // Database name 
$tbl_name="fquestions"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username1", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");


$datetime=date("d/m/y h:i:s"); //create date time

$sql="INSERT INTO $tbl_name(user,userphoto,topic,detail,datetime,user_catagory)VALUES('$user','$userphoto','$topic', '$detail', '$datetime','$usercatagory')";
$result=mysql_query($sql);

if($result){
header('Location: forum.php');
   exit();
}
else {
echo "ERROR";
}
mysql_close();
?>
