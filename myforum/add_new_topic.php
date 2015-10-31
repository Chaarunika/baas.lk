//create new topic table data get
<?php include 'components/session-check.php' ?>
<?php
$user= $_SESSION['user_name'];
$sql = "SELECT * FROM users where user_name='$user'";
$result = mysqli_query($database,$sql) or die(mysqli_error($database)); 
$rws = mysqli_fetch_array($result);
$userphoto=$rws['user_avatar'];
$usercatagory=$rws['user_catagory'];
mysql_close();

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
