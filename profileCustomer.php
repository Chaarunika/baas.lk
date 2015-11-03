<!DOCTYPE html >
<html>

<head>
	<title>baas.lk</title>

	<link href="Gallery/_css/Icomoon/style.css" rel="stylesheet" type="text/css" />
	<link href="Gallery/_css/Icomoon/style.css" rel="stylesheet" type="text/css" />
	<link href="Gallery/_css/main.css" rel="stylesheet" type="text/css"/>
	<link href="Gallery/_css/pop-up-gallery3.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="Gallery/_scripts/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="Gallery/_scripts/pop-up-gallery3.js"></script>
	<link href="css/header.css" rel="stylesheet" />
	<link href="css/profileCustomer.css" rel="stylesheet" />
</head>


<body>

	<?php 
	include_once('header.php'); 
	include_once('_database/database.php'); 
	include_once('functions/functions.php');
	?>

	<?php 	
	if(isset($_SESSION['userID'])){
	$userID = $_SESSION['userID'];
	}	

	if(isset($_GET['user']))
	{
		$userID = $_GET['user'];	
	}

	$result = get_user_details($userID);
	$user = mysqli_fetch_assoc($result);	

	$result2 = get_customer_details($userID);
	$sp = mysqli_fetch_assoc($result2);
	
	?>
  
<div id="fullscreen">
	<div id="fullscreen-inner">
		<div id="fullscreen-inner-left" class="fullscreen-inner-button"><span class="icon-caret-left"></span></div>
		<div id="fullscreen-inner-right" class="fullscreen-inner-button"><span class="icon-caret-right"></span></div>
		<div id="fullscreen-inner-close" class="fullscreen-inner-button"><span class="icon-close"></span></div>
		<div id="fullscreen-image"></div>
	</div>
</div>


<div id="apDivContainer">

    <div id="apDivMainInfo">
    	<div id="apDivTitle">

        <p style="font-size:30px"> 
        	<?php         	
        	if(isset($user['user_firstname'])){ 
        		echo $user['user_firstname']." ".$user['user_lastname'] ;
        	}?>
      	</p>    

        <p>member since : <?php if(isset($user['user_registration_datetime'])) { echo $user['user_registration_datetime'] ;} ?></p>    
        <p>Area : <?php if(isset($sp['area'])) { echo $sp['area'] ;} ?></p>  
        </div>
      
     	<!--
      	<div id="apDivProfPic2"><img class="img-circle2"  src= " <?php //echo $_SESSION['url'] ?> "  > </div>  
      	-->
     	<div id="apDivProfPic2"><img class="img-circle2"  src=  <?php if(isset($user['user_avatar'])) { echo $user['user_avatar'] ;} ?>   > </div>  
    	
     </div>
    
    <div id="apDivContactBox">
    	<div id="apDivContactInfo">
        <p style="font-size:20px">Contact Details</p>    
        <p>Contact No : <?php // if(isset($sp['contactNo'])) { echo $sp['contactNo'];} ?></p>    
        <p>Email : <?php if(isset($user['user_email'])) {  echo $user['user_email'];} ?></p>
        <p>Address : <?php if(isset($sp['address'])) { echo $sp['address'];} ?></p>          
            
        </div>           
    </div>
    
    <div id="appointmentBox">
	
		 <div id="appointmentBody">
		<p align='center' style='font-size:30px'>Your RecentAppointments</p>

		<?php
		$customer=$_SESSION['userID'];
		$sql="select * from calendar where customer_id='".$customer."'";
		$result = mysqli_query($database,$sql) or die(mysqli_error($database));
		$noOfappointments=mysqli_num_rows($result);
		if($noOfappointments==0)
		{
		echo "<br>You have no appointments to show<br>";
		}
		
		else
		{
		
		echo "
		<table border='1'>
			<tr>
			<td align='center' width='100px'>Date</td>
			<td align='center'width='100px'>Job</td>
			<td align='center'width='100px'>Service Provider</td>
			<td align='center'width='400px'>Status</td>
			</tr>";
		
		while($appointment = mysqli_fetch_assoc($result))
		{
			$timest=strtotime($appointment['jobDate']);
		echo "
			<tr>
			<td align='center' width='100px'>".date('j/m/Y',$timest)."</td>
			<td align='center'width='100px'>".$appointment['title']."</td>
			<td align='center'width='100px'>";
			
			
			
			$sqlname="select user_firstname,user_id from users where user_id='".$appointment['sp_id']."'";
			$resultname = mysqli_query($database,$sqlname) or die(mysqli_error($database));
			$fname = mysqli_fetch_assoc($resultname);	
			echo "<a href='
			profile.php?user=".$fname['user_id']."'";	
			echo">";
			echo $fname['user_firstname'];
			echo "</a>";
			echo "</td>";
			echo "<td>";
			
			if($appointment['accepted']==0)
			{
				echo "Pending";
					
			}
			else if($appointment['accepted']==1)
			{
				echo "Service provider agreed";
					
			}
			else if($appointment['accepted']==2)
			{
				echo "Canceled by Service provider";
					
			}
		
			echo "</td>
			</tr>";
		
		
		}
			
		
		echo "</table>";
		
		
		}
		
		
		
		?>
	
		</div>
	
    </div>
  
		

    
</div>


        

</body>
</html>
