f<!DOCTYPE html >
<html>

<head>
	<title>baas.lk</title>
	<meta charset="UTF-8">

	<!-- Bootstrap  -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">   
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
	
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

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
	width: 90%;
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


<?php 
echo "
<script type=\"text/javascript\">(function(d, t, e, m){    
    
    window.RW_Async_Init = function(){
                
        RW.init({
            huid: \"".$user['user_id']."\",
            uid: \"5c4f6f81191890288de05d59c79ac9ea\",
            source: \"website\",
            options: {
                \"advanced\": {
                    \"font\": {
                        \"size\": \"14px\"
                    },
                    \"text\": {
                        \"rateAwful\": \"Not Good\",
                        \"rateThis\": \"Rate\"
                    }
                },
                \"size\": \"medium\",
                \"style\": \"oxygen1\",
                \"isDummy\": false
            } 
        });
        RW.render();
    };
        // Append Rating-Widget JavaScript library.
    var rw, s = d.getElementsByTagName(e)[0], id = \"rw-js\",
        l = d.location, ck = \"Y\" + t.getFullYear() + 
        \"M\" + t.getMonth() + \"D\" + t.getDate(), p = l.protocol,
        f = ((l.search.indexOf(\"DBG=\") > -1) ? \"\" : \".min\"),
        a = (\"https:\" == p ? \"secure.\" + m + \"js/\" : \"js.\" + m);
    if (d.getElementById(id)) return;              
    rw = d.createElement(e);
    rw.id = id; rw.async = true; rw.type = \"text/javascript\";
    rw.src = p + \"//\" + a + \"external\" + f + \".js?ck=\" + ck;
    s.parentNode.insertBefore(rw, s);
    }(document, new Date(), \"script\", \"rating-widget.com/\"));
</script> ";

?>

<div id="fullscreen">
	<div id="fullscreen-inner">
		<div id="fullscreen-inner-left" class="fullscreen-inner-button"><span class="icon-caret-left"></span></div>
		<div id="fullscreen-inner-right" class="fullscreen-inner-button"><span class="icon-caret-right"></span></div>
		<div id="fullscreen-inner-close" class="fullscreen-inner-button"><span class="icon-close"></span></div>
		<div id="fullscreen-image"></div>
	</div>
</div>

	<?php if(!isset($_GET['user']))	{	?>
		<div id="subMenu">
			<ul class="nav nav-tabs">
			  	<li role="presentation" class="active"><a href="profile.php"> <?php echo OVERVIEW ; ?> </a></li>
			 	<li role="presentation"><a href="spProfEdit.php"> <?php echo EDITPROFILE ; ?> </a></li>
			 	<li role="presentation"><a href="list_pm.php"> <?php echo MESSAGES ; ?></a> </li>
			</ul>
		</div>
	<?php } ?>

<div id="apDivContainer">

	


    <div id="apDivMainInfo">
    	<div id="apDivTitle">

        <p style="font-size:30px ;line-height: 100%"> 
        	<?php         	
        	if(isset($user['user_firstname'])){ 
        		echo $user['user_firstname']." ".$user['user_lastname'] ;
        	}?>        	
      	</p>    

        <p><?php echo MEMBERSINCE ; ?> : <?php if(isset($user['user_registration_datetime'])) { echo $user['user_registration_datetime'] ;} ?></p> 
        <p><?php echo CATAGORY ; ?> : <?php if(isset($sp['category'])) { echo $sp['category'] ;} ?></p>
        <p><?php echo AREA ; ?> : <?php if(isset($sp['area'])) { echo $sp['area'] ;} ?></p>  

        <div class="rw-ui-container"></div> 
        </div>
      	<!--
      	<div id="apDivProfPic2"><img class="img-circle2"  src= " <?php// echo $_SESSION['url'] ?> "  > </div>  
      	-->
      	<?php //echo $user['user_avatar'] ; ?>
     	<div id="apDivProfPic2"><img class="img-circle2"  src=  <?php if(isset($user['user_avatar'])) { echo $user['user_avatar'] ;} ?>   > </div>  
    	
    </div>
    
    <div id="apDivContactBox">
    	<div id="apDivContactInfo">
        <p style="font-size:20px"><?php echo CONTACTDETAILS ; ?></p>
        <?php
        if(isset($_GET['user']))
		{
		echo "<p><font align='right'><a href='new_pm.php' class='link_new_pm'>Send a message</a></font></p> " ;
		}
		?>
		 
        <p><?php echo CONTACTNUMBER ; ?> : <?php if(isset($sp['contactNo'])) { echo $sp['contactNo'];} ?></p>    
        <p><?php echo EMAIL  ; ?>: <?php if(isset($user['user_email'])) {  echo $user['user_email'];} ?></p>
        <p><?php echo ADDRESS ; ?> : <?php if(isset($sp['address'])) { echo $sp['address'];} ?></p>  
        <p><?php echo OPTIONALCONTACTNO ; ?> : <?php if(isset($sp['opContactNo'])) { echo $sp['opContactNo'];} ?></p>    
        <p><?php echo OPTIONALEMAIL ; ?> : <?php if(isset($sp['opEmail'])) {  echo $sp['opEmail'];} ?></p>  
		
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
    <p style="font-size:20px"><?php echo ABOUTUS ; ?></p>  
    <p style="line-height: 130%;"><?php if(isset($sp['descr'])) { echo $sp['descr']; }?></div>
    
    <div id="apDivWorkHistory"> 
    <p style="font-size:20px"><?php echo WORKHISTORY ; ?></p>  
    <p style="line-height: 130%;"> <?php if(isset($sp['workInfo'])) { echo $sp['workInfo'];} ?></div>
    

	<div id="galleryBox">
	<?php 
	$result = get_user_details($userID); //need this otherwise not working
	$user = mysqli_fetch_assoc($result); //need this otherwise not working
	$foldername = "Gallery/galleryUploads/".$user['user_name']."/"; 	
	?>
	
	  
	<div class="wrapper-inner-content-image">    
		<img src="  
			<?php 
	  		$target_file = $foldername."9.jpg";
	  		if (file_exists($target_file)){
	   		 echo $target_file; 
	  		} 
	  		else{
	    		echo "Gallery/galleryUploads/default.gif";
	 		} 
			?>
		"/>
		<img src="  
			<?php 
	  		$target_file = $foldername."8.jpg";
	  		if (file_exists($target_file)){
	   		 echo $target_file; 
	  		} 
	  		else{
	    		echo "Gallery/galleryUploads/default.gif";
	 		} 
			?>
		"/>
		<img src="  
			<?php 
	  		$target_file = $foldername."7.jpg";
	  		if (file_exists($target_file)){
	   		 echo $target_file; 
	  		} 
	  		else{
	    		echo "Gallery/galleryUploads/default.gif";
	 		} 
			?>
		"/>
		<img src="  
			<?php 
	  		$target_file = $foldername."6.jpg";
	  		if (file_exists($target_file)){
	   		 echo $target_file; 
	  		} 
	  		else{
	    		echo "Gallery/galleryUploads/default.gif";
	 		} 
			?>
		"/>
		<img src="  
			<?php 
	  		$target_file = $foldername."5.jpg";
	  		if (file_exists($target_file)){
	   		 echo $target_file; 
	  		} 
	  		else{
	    		echo "Gallery/galleryUploads/default.gif";
	 		} 
			?>
		"/>
		<img src="  
			<?php 
	  		$target_file = $foldername."4.jpg";
	  		if (file_exists($target_file)){
	   		 echo $target_file; 
	  		} 
	  		else{
	    		echo "Gallery/galleryUploads/default.gif";
	 		} 
			?>
		"/>
		<img src="  
			<?php 
	  		$target_file = $foldername."3.jpg";
	  		if (file_exists($target_file)){
	   		 echo $target_file; 
	  		} 
	  		else{
	    		echo "Gallery/galleryUploads/default.gif";
	 		} 
			?>
		"/>
		<img src="  
			<?php 
	  		$target_file = $foldername."2.jpg";
	  		if (file_exists($target_file)){
	   		 echo $target_file; 
	  		} 
	  		else{
	    		echo "Gallery/galleryUploads/default.gif";
	 		} 
			?>
		"/>
		<img src="  
			<?php 
	  		$target_file = $foldername."1.jpg";
	  		if (file_exists($target_file)){
	   		 echo $target_file; 
	  		} 
	  		else{
	    		echo "Gallery/galleryUploads/default.gif";
	 		} 
			?>
		"/>
		
		<div class="wrapper-inner-content-image-hover">
			<div class="wrapper-inner-content-image-hover-cercle"><span class="icon-search"></span></div>
           
		</div>  
	</div>
</div>	

    
</div>


        

</body>
</html>
