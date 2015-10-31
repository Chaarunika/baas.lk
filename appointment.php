<!DOCTYPE html >
<html>

<head>
	<title>baas.lk</title>

	<link href="css/header.css" rel="stylesheet" />
	<link href="css/calendarSP.css" rel="stylesheet" />
	<script type="text/javascript" src="Gallery/_scripts/jquery-2.1.4.min.js"></script>
</head>


<body>

	<?php 
	include_once('header.php'); 
	include_once('_database/database.php'); 
	include_once('functions/functions.php');
	

	
	
	
?>

<style>




	
	#apDivJob{
	position: absolute;
	left: 50px;
	top: 8px;
	width: 323px;
	z-index: 2;

</style> 














	
	

    
    

    

<div id="apDivContainer">


<?php
		
	
	if(isset($_GET['add']))
	{
	
		if($_GET['add']==true)
		{
			$spid=$_GET['user'];
			$date=$_GET['date'];
			$title=$_POST['title'];
			$detail=$_POST['description'];
			$location=$_POST['location'];
			$jobtime=$_POST['time'];
			$contactNo=$_POST['contactNo'];
			$customer=$_SESSION['userID'];
			
			
	
			
			$sql="INSERT INTO `baaslk`.`calendar` (`title`, `detail`, `jobDate`, `dateAdded`, `location`, `jobtime`, `contactno`, `customer_id`, `sp_id`, `accepted`) VALUES
			('".$title."', '".$detail."', '".$date."', now(), '".$location."', '".$jobtime."', '".$contactNo."','".$customer."' ,'".$spid."' , 0)";
			
			mysqli_query($database,$sql);
	
		
		}
	
	}
	
?>



<div id="calendarBox">
	
	<?php

		
		include('calendar/customer_calendar.php');
		
		
	?>
	
</div>


		<?php
		if (isset($_GET['date']))
		{
		
		echo "<div id=\"appointmentForm\">
		<div id=\"appointmentFormbody\">";
			$date=$_GET['date'];
			$time= strtotime($date);
			echo "<p align='center'>".date('jS F, Y',$time)."<p>";
			include('calendar/createappointment.php');
		 }
		 
		 echo "</div>";
		 ?>
		
</div>
</div>


<script src="jquery.min.js"></script>
<script>
$("#spanhovering").hover(function(event) {
    $("#divtoshow").css({top: event.clientY}).show();
}, function() {
    $("#divtoshow").hide();
});
</script>

</body>
</html>
