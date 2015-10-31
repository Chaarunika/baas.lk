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
	
	if(isset($_GET['sp']))
	{
	$spid=$_GET['sp'];
	$date=$_GET['date'];
	
	
	$sql="select * from calendar where jobDate='".$date."' and sp_id='".$spid."'";
	$result = mysqli_query($database,$sql) or die(mysqli_error($database));
	$noOfjobs=mysqli_num_rows($result);
			
	
	
	
?>

<style>


<?php

	$distance = 200;

	for($i=0; $i<$noOfjobs;$i++){
	
	
	echo "
	#apDivJobBox{$i}{
	position: absolute;
	left: 500px;
	top: ". $distance. "px;
	width: 501px;
	height:200px;
	z-index: 2;
	border-radius: 20px;
	background-color: rgba(255,255,255,0.5);
	}";
	
	
	
	$distance = $distance + 250;
	}
		
?>

	
	#apDivJob{
	position: absolute;
	left: 50px;
	top: 8px;
	width: 323px;
	z-index: 2;

</style> 









<?php
$i=0;

while($job = mysqli_fetch_assoc($result))
{
    echo "<div id=\"apDivJobBox{$i}\">
		<div id=\"apDivJob\">
			 <p style=\"font-size:30px\"> 
			   
					Job - ".$job['title']."
			
					
			

			<p>	Date:
			".$job['jobDate']."
			</p>
			
			<p>	Details:
			".$job['detail']."
			</p>
			
			<p>	Location:
			".$job['location']."
			</p>
			
			<p>	Time:
			".$job['jobtime']."
			</p>

		</div>
  
	</div>";
	$i++;
}
?> 



	
	

    
    

    
<?php }?>
<div id="apDivContainer">






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
			echo "<p align='center'>".date('jS F, Y',$time)."</p>";
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
