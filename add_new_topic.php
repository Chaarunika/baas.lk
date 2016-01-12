<?php
include 'sessioncheck.php' ;
include "_database/database.php";

if($_SESSION["username"]){
$user= $_SESSION['username'];
$userphoto=$_SESSION['user_avatar'];
$usercatagory=$_SESSION['Catagory'];
$userphoto=$_SESSION['url'];
$topic=$_POST['topic'];
$detail=$_POST['detail'];

if($_SESSION['loginType']=='fb')
{
	
$user= $_SESSION['firstname'];
$tbl_name="fquestions"; // Table name 
$datetime=date("d/m/y h:i:s"); //create date time

$sql="INSERT INTO $tbl_name(user,userphoto,topic,detail,datetime,user_catagory)VALUES('$user','$userphoto','$topic', '$detail', '$datetime','$usercatagory')";
$result=mysqli_query($database,$sql);

if($result){
header('Location: forum.php');
   exit();
}
else {
echo "ERROR";
}
mysqli_close($database);
	
}
else{
$tbl_name="fquestions"; // Table name 
$datetime=date("d/m/y h:i:s"); //create date time

$sql="INSERT INTO $tbl_name(user,userphoto,topic,detail,datetime,user_catagory)VALUES('$user','$userphoto','$topic', '$detail', '$datetime','$usercatagory')";
$result=mysqli_query($database,$sql);

if($result){
header('Location: forum.php');
   exit();
}
else {
echo "ERROR";
}
mysqli_close($database);
}
}
?>
