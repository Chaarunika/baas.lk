<?php include 'components/session-check.php';
 include 'controllers/base/head.php' ;

$username=$_SESSION['user_name'];
    $sql = "SELECT * FROM users where user_name='$username'";
    $result = mysqli_query($database,$sql) or die(mysqli_error($database)); 
    $rws = mysqli_fetch_array($result);
 if($rws['user_catagory']=="customer")
{
	header("location:../customer/home.php");
}
else
{
	header("location:../serviceprovider/home.php");
}
?>
