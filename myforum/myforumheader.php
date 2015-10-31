
<?php include 'navbar/navigation.php'?>
<link href="navbar/navigation.css" rel="stylesheet">
<link href="main.css" rel="stylesheet">
<?php include 'components/session-check.php' ?>
<?php include 'controllers/base/head.php' ?>
<?php          
	$username=$_SESSION['user_name'];
    $sql = "SELECT * FROM users where user_name='$username'";
    $result = mysqli_query($database,$sql) or die(mysqli_error($database)); 
    $rws = mysqli_fetch_array($result);
	
	$sqlsp = "SELECT * FROM serviceprovider where user_id='$rws[user_id]'";
    $resultsp = mysqli_query($database,$sqlsp) or die(mysqli_error($database)); 
    $rwssp = mysqli_fetch_array($resultsp);
	
	
?>
<div id="pic" class="userpicture" style="background-image:url('/baass/<?php 
if($rws['user_catagory']=="customer")
{
	echo "customer";
}
else
{
	echo "serviceprovider";
}
?>/userfiles/avatars/<?php 
echo $rws['user_avatar'];
?>')"></div>

<div id="logout"> <a href="../logout.php"><img src="../images/logout.png"></a></div>

