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

   
#manageAppointments{
	position: absolute;
	width: 1041px;
	height:100px;
	z-index: 2;
	background-color: rgba(200,200,200,0.8);
	border: 1px solid rgba(51,51,51,0.2);
	}

#manageAppointmentsInside{
	position: absolute;
	width: 500px;
	height:60px;
	top:20px;
	left:270px;
	border-radius:20px;
	z-index: 2;
	background-color: rgba(255,255,255,0.6);
	    box-shadow: 2px 5px 5px #7c7c7c;
	    border: 1px solid rgba(51,51,51,0.2);
	}	
	
	
#apDivMainInfo{
	position: absolute;
	left: 500px;
	top: 100px;
	width: 501px;
	height:250px;
	z-index: 2;
	border-radius: 20px;
	background-color: rgba(255,255,255,0.5);
	border: 1px solid rgba(51,51,51,0.2);
}

#appbox
{
	position: absolute;
	left: 50px;
	top: 40px;
	width: 323px;
	z-index: 2;}



}

	#apDivJob{
	position: absolute;
	left: 50px;
	top: 8px;
	width: 323px;
	z-index: 2;}


	#sms{
	position: absolute;
	left: 50px;
	top: 50px;
	width: 323px;
	z-index: 1;}

	#sendsms{
	position: absolute;
	left: 120px;
	top: 230px;
	width: 323px;
	z-index: 1;}
</style> 





    
    

    

<div id="apDivContainer">


<div id="manageAppointments">


	<div id="manageAppointmentsInside">
	<p align='center' style='font-size:25px'>
	Manage Appointments
	</p>
	</div>

</div>

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
			
			
	
			
			$sql="INSERT INTO `calendar` (`title`, `detail`, `jobDate`, `dateAdded`, `location`, `jobtime`, `contactno`, `customer_id`, `sp_id`, `accepted`) VALUES
			('".$title."', '".$detail."', '".$date."', now(), '".$location."', '".$jobtime."', '".$contactNo."','".$customer."' ,'".$spid."' , 0)";
			
			mysqli_query($database,$sql);

					

                        $sql2 = "SELECT contactNo FROM serviceprovider WHERE sp_id=$spid";
                        $result2=mysqli_query($database,$sql2);
                        $row = mysqli_fetch_assoc($result2);
                        
                        $phone=$row['contactNo'];

                        $sql3="SELECT calendar_id FROM calendar ORDER BY calendar_id DESC";
                        $result3=mysqli_query($database,$sql3);
                        $row1 = mysqli_fetch_assoc($result3);
                        $job=$row1['calendar_id'];
                        

                          


                         $ch = curl_init(); 


                 
                      
                        $detail=urlencode($detail);

 
                        
                         
                         
 
                         $url="http://www.textit.biz/sendmsg/index.php?id=94776014365&password=6065&text=baas.lk%0a".$detail."%0aCall++:+".$contactNo."%0a%0aTo+accept+this+Job+Reply:+JOB+".$job."&to=".$phone;
                      
                    
                
                         
                         curl_setopt($ch, CURLOPT_URL, $url); 

                         //return the transfer as a string 
                         curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

                         // $output contains the output string 
                         $output = curl_exec($ch); 
                         //echo   $output;



                         // close curl resource to free up system resources 
                         curl_close($ch);   
                         

                         header("Location:appointment.php?user=$spid&send=true");
                        
                         
	
		
		}
	
	}

	if(isset($_GET['send']))
	{
        if($_GET['send']==true)
        {
              echo "<div id='appbox'><div id=\"appointmentForm\">
		    <div id=\"appointmentFormbody\">
                    <p style=\"font-size:20px\">SMS was sent...!!!
                    <div id=\"sms\">
                    <img src=\"images/sms.jpg\" height=\"200\" width=\"200\"></div>
                    <div id=\"sendsms\"></div></div></div></div>";
                    
        }
	}	
?>



<div id="calendarBox">
	
	<?php

		
		include('calendar/customer_calendar.php');
		
		
	?>
	
</div>


		<?php 
		if (!isset($_GET['add']) and !isset($_GET['send']))
		{
		
		echo "<div id='appbox'><div id=\"appointmentForm\">
		<div id=\"appointmentFormbody\">";
			$date=$_GET['date'];
			$time= strtotime($date);
			echo "<p align='center'>".date('jS F, Y',$time)."<p>";
			include('calendar/createappointment.php');
		 }
		 
		 echo "</div></div>"; 
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
					