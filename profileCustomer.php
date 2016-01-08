<!DOCTYPE html >
<html>

<head>
	<meta charset="UTF-8">
	<title>baas.lk</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">   
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
	
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

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

	

<div id="subMenu">
	<ul class="nav nav-tabs">
	  	<li role="presentation" class="active"><a href="profileCustomer.php"><?php echo OVERVIEW ; ?></a></li>	 	
	 	<li role="presentation"><a href="list_pm.php"><?php echo MESSAGES ; ?> </a></li>
	</ul>
</div>

<div id="apDivContainer">

    <div id="apDivMainInfo">
    	<div id="apDivTitle">
    	<br>
        <p style="font-size:30px"> 
        	<?php         	
        	if(isset($user['user_firstname'])){ 
        		echo $user['user_firstname']." ".$user['user_lastname'] ;
        	}?>
      	</p>    
      	<br>
        <p><?php echo MEMBERSINCE ; ?> : <?php if(isset($user['user_registration_datetime'])) { echo $user['user_registration_datetime'] ;} ?></p>    
        <p><?php echo AREA ; ?> : <?php if(isset($sp['area'])) { echo $sp['area'] ;} ?></p>  
        </div>
      
     	<!--
      	<div id="apDivProfPic2"><img class="img-circle2"  src= " <?php //echo $_SESSION['url'] ?> "  > </div>  
      	-->
     	<div id="apDivProfPic2"><img class="img-circle2"  src=  <?php if(isset($user['user_avatar'])) { echo $user['user_avatar'] ;} ?>   > </div>  
    	
     </div>
    
    <div id="apDivContactBox">
    	<div id="apDivContactInfo">
        <p style="font-size:20px"><?php echo CONTACTDETAILS ; ?></p>    
        <p><?php echo CONTACTNUMBER ; ?> : <?php // if(isset($sp['contactNo'])) { echo $sp['contactNo'];} ?></p>    
        <p><?php echo EMAIL  ; ?> : <?php if(isset($user['user_email'])) {  echo $user['user_email'];} ?></p>
        <p><?php echo ADDRESS ; ?> : <?php if(isset($sp['address'])) { echo $sp['address'];} ?></p>          
            
        </div>           
    </div>
    
    <div id="appointmentBox">
	
		 <div id="appointmentBody">
		<p align='center' style='font-size:30px'><?php echo YOURRECENTAPPOINTMENTS ; ?></p><br><br>

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
		<table class='table table-bordered'>
			<thead>       
				<tr>
				<td align='center' width='100px'>Date</td>
				<td align='center' width='200px'>Job</td>
				<td align='center' width='200px'>Service Provider</td>
				<td align='center' width='400px'>Status</td>
				</tr>
			 </thead>";
		
		while($appointment = mysqli_fetch_assoc($result))
		{
			$timest=strtotime($appointment['jobDate']);
		echo "<tbody>
			<tr>
			<td align='center' width='100px'>".date('j/m/Y',$timest)."</td>
			<td align='center' width='200px'>".$appointment['title']."</td>

			<td align='center' width='200px'>";			
			$sqlname="select user_firstname,user_id from users where user_id='".$appointment['sp_id']."'";
			$resultname = mysqli_query($database,$sqlname) or die(mysqli_error($database));
			$fname = mysqli_fetch_assoc($resultname);	
			echo "<a href='
			profile.php?user=".$fname['user_id']."'";	
			echo">";
			echo $fname['user_firstname'];
			echo "</a>";
			echo "</td >";

			echo "<td align='center' width='400px'>";
			
			if($appointment['accepted']==0){
				echo "Pending";				
			}
			else if($appointment['accepted']==1){
				echo "Service provider agreed";					
			}
			else if($appointment['accepted']==2){
				echo "Canceled by Service provider";					
			}
		
			echo "</td></tr></tbody>";
		
		
		}
			
		
		echo "</table>";
		
		
		}
		
		
		
		?>
	
		</div>	
    </div>   
</div>       

</body>
</html>
