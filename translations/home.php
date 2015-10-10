<html>
<?php include 'navbar/navigation.php'?>
<link href="navbar/navigation.css" rel="stylesheet">
<link href="main.css" rel="stylesheet">
<?php include 'components/session-check.php' ?>
<?php include 'controllers/base/head.php' ?>
   
<?php 
if (isset($_POST["request"]))    
{    
          if($_GET["request"]=="profile-update" && $_GET["status"]=="success"){
        $dialogue="Your profile update was successful! ";
    }
    else if($_GET["request"]=="profile-update" && $_GET["status"]=="unsuccess"){
        $dialogue="Your profile update was not at all successful! ";
    }
    else if($_GET["request"]=="login" && $_GET["status"]=="success"){
        $dialogue="Welcome back again! ";
    }
}  
    
?>


<?php          
    $sql = "SELECT * FROM users where user_name='uuu'";
    $result = mysqli_query($database,$sql) or die(mysqli_error($database)); 
    $rws = mysqli_fetch_array($result);
	
	$sqlsp = "SELECT * FROM serviceprovider where user_id='$rws[user_id]'";
    $resultsp = mysqli_query($database,$sqlsp) or die(mysqli_error($database)); 
    $rwssp = mysqli_fetch_array($resultsp);
	
	
?>
<div id="pic" class="userpicture" style="background-image:url('userfiles/avatars/<?php echo $rws['user_avatar'];?>')"></div>
<div id="logout"> <img src="images/logout.png"></div>

<?php include 'pr.php' 
?>


                  

</html>