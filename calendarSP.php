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

	$today1=date("m/d/Y");
	
	
	
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
			
			<p>	Contact No.:
			".$job['contactno']."
			</p>";
			
			if($today1<$job['jobDate']){
			
				if($job['accepted']==0)
				{
					echo "
					<form name='accept' action='";
					$_SERVER['PHP_SELF'];
					
					$_SESSION['cid']=$job['calendar_id'];
					
					echo "?id=
					'method='get'>
					<p align='center'>     
					<input type='submit' name='acc' value='Accept'>
					<input type='submit' name='dec' value='Decline'>
					</p>
					</form>
						";
				}
				else if($job['accepted']==1)
				{
					echo "
					<form name='accept' action='";
					$_SERVER['PHP_SELF'];
					
					$_SESSION['cid']=$job['calendar_id'];
					
					echo "?id=
					'method='get'>
					<p align='center'>     
					<input type='submit' name='dec' value='Decline'>
					</p>
					</form>
						";
				}
				
				else if($job['accepted']==2)
				{
					echo "
					<form name='accept' action='";
					$_SERVER['PHP_SELF'];
					
					$_SESSION['cid']=$job['calendar_id'];
					
					echo "?id=
					'method='get'>
					<p align='center'>     
					<input type='submit' name='acc' value='Accept'>
					</p>
					</form>
						";
				}
	
			}
			
		echo "		

		</div>
  
	</div>";
	$i++;
}
?> 



	
	

    
    

    
<?php }?>
<div id="apDivContainer">
<?php
if(isset($_GET['acc']))
{
	if($_GET['acc']=='Accept')
	{
		$id=$_SESSION['cid'];
		
		$sqlset="update calendar set accepted='1' where calendar_id='".$id."'";
		mysqli_query($database,$sqlset);
	}
	 

}
if(isset($_GET['dec']))
{
	if($_GET['dec']=='Decline')
	{
		$id=$_SESSION['cid'];
		
		$sqlset="update calendar set accepted='2' where calendar_id='".$id."'";
		mysqli_query($database,$sqlset);
	
	}

}	
?>
<div id="calendarBox">
	
	<?php

		
		include('calendar/sp_calendar.php');
		
		
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
