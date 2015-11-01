<!DOCTYPE html >
<html>

<head>
	<title>baas.lk</title>

	<!-- Bootstrap  
	<meta name="viewport" content="width=device-width, initial-scale=1.0">   
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->

	<link href="Gallery/_css/Icomoon/style.css" rel="stylesheet" type="text/css" />
	<link href="Gallery/_css/Icomoon/style.css" rel="stylesheet" type="text/css" />
	<link href="Gallery/_css/main.css" rel="stylesheet" type="text/css"/>
	<link href="Gallery/_css/pop-up-gallery3.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="Gallery/_scripts/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="Gallery/_scripts/pop-up-gallery3.js"></script>
	<link href="css/header.css" rel="stylesheet" />
	<link href="css/profile.css" rel="stylesheet" />
</head>

<style type="text/css">

#subMenu{
	position: absolute;
	top: 90px;
	width: 100%;
	left :50px;
}
</style>
<body>

	<?php 
	include_once('header.php'); 
	//session_start();
	include_once('_database/database.php'); 
	include_once('functions/functions.php');

	?>


	


	<?php 	
	if(isset($_SESSION['userID']))
	{
	$userID = $_SESSION['userID'];	
	}
	if(isset($_GET['user']))
	{
		$userID = $_GET['user'];	
	}


	$result = get_user_details($userID);
	$user = mysqli_fetch_assoc($result);	

	$result2 = get_serviceprovider_details($userID);
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

	<div id="subMenu">
		<ul class="nav nav-tabs">
		  	<li role="presentation" class="active"><a href="profile.php">Overview</a></li>
		 	<li role="presentation"><a href="spProfEdit.php">Edit Profile</a></li>
		 	<li role="presentation"><a href="#">Messages</a></li>
		</ul>
	</div>

<div id="apDivContainer">

	


    <div id="apDivMainInfo">
    	<div id="apDivTitle">

        <p style="font-size:30px"> 
        	<?php         	
        	if(isset($user['user_firstname'])){ 
        		echo $user['user_firstname']." ".$user['user_lastname'] ;
        	}?>
        	<br><br>
      	</p>    

        <p>member since : <?php if(isset($user['user_registration_datetime'])) { echo $user['user_registration_datetime'] ;} ?></p> 
        <p>Catagory : <?php if(isset($sp['catagory'])) { echo $sp['catagory'] ;} ?></p>
        <p>Area : <?php if(isset($sp['area'])) { echo $sp['area'] ;} ?></p>  
        </div>
      	<!--
      	<div id="apDivProfPic2"><img class="img-circle2"  src= " <?php// echo $_SESSION['url'] ?> "  > </div>  
      	-->
      	<?php //echo $user['user_avatar'] ; ?>
     	<div id="apDivProfPic2"><img class="img-circle2"  src=  <?php if(isset($user['user_avatar'])) { echo $user['user_avatar'] ;} ?>   > </div>  
    	
    </div>
    
    <div id="apDivContactBox">
    	<div id="apDivContactInfo">
        <p style="font-size:20px">Contact Details</p>    
        <p>Contact No : <?php if(isset($sp['contactNo'])) { echo $sp['contactNo'];} ?></p>    
        <p>Email : <?php if(isset($user['user_email'])) {  echo $user['user_email'];} ?></p>
        <p>Address : <?php if(isset($sp['address'])) { echo $sp['address'];} ?></p>  
        <p>Optional Contact No : <?php if(isset($sp['opContactNo'])) { echo $sp['opContactNo'];} ?></p>    
        <p>Optional Email : <?php if(isset($sp['opEmail'])) {  echo $sp['opEmail'];} ?></p>       
        </div>           
    </div>

	
	
    <div id="calendarBox">
	
	<?php
		if(isset($_GET['user'])){
			include('calendar/customer_calendar.php');		
		}
		else{	
			include('calendar/sp_calendar.php');	
		}
	?>
	
    </div>
    
    
    <div id="apDivShortDesc"> 
    <p style="font-size:20px">About Us</p>  
    <p style="line-height: 130%;"><?php if(isset($sp['descr'])) { echo $sp['descr']; }?></div>
    
    <div id="apDivWorkHistory"> 
    <p style="font-size:20px">Work History</p>  
    <p style="line-height: 130%;"> <?php if(isset($sp['workInfo'])) { echo $sp['workInfo'];} ?></div>
    

		<div id="galleryBox">

			<div class="wrapper-inner-content-image">    
				<img src="Gallery/_assets/9.jpg"/>
				<img src="Gallery/_assets/8.jpg"/>
				<img src="Gallery/_assets/7.jpg"/>
				<img src="Gallery/_assets/6.jpg"/>
				<img src="Gallery/_assets/5.jpg"/>
				<img src="Gallery/_assets/4.jpg"/>
				<img src="Gallery/_assets/3.jpg"/>
				<img src="Gallery/_assets/2.jpg"/>   
				<img src="Gallery/_assets/1.jpg"/>    
    			
				<div class="wrapper-inner-content-image-hover">
					<div class="wrapper-inner-content-image-hover-cercle"><span class="icon-search"></span></div>
                   
				</div>  
			</div>
		</div>	

    
</div>


        

</body>
</html>
