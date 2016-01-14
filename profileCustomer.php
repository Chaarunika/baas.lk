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

	<!-- rating  -->
	<link rel="stylesheet" href="star-rating.css" media="all" type="text/css"/>  
    <script src="star-rating.js" type="text/javascript"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">    

	<link href="css/header.css" rel="stylesheet" />
	
	<link href="css/profileCustomerNew.css" rel="stylesheet" />
</head>

<style>

</style>

<body>

	<?php 
	include_once('header.php'); 	
	include_once('_database/database.php'); 
	include_once('functions/functions.php');
	?>

	<?php 	
	if(isset($_SESSION['userID']))	{
		$userID = $_SESSION['userID'];	
	}
	if(isset($_GET['user'])){
		$userID = $_GET['user'];	
	}

	$result = get_user_details($userID);
	$user = mysqli_fetch_assoc($result);	

	$result2 = get_customer_details($userID);
	$cus = mysqli_fetch_assoc($result2);
	
	echo "aaaa".$userID;
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
		        <p style="font-size:30px; margin-top:0px"> 
		        	<?php         	
		        	if(isset($user['user_firstname'])){ 
		        		echo $user['user_firstname']." ".$user['user_lastname'] ;
		        	}?>        	
		      	</p>    
		        <p style="margin-top:0px" ><?php echo MEMBERSINCE ; ?> : <?php if(isset($user['user_registration_datetime'])) { echo $user['user_registration_datetime'] ;} ?></p>
		        
	    	</div> 
	      	<div id="apDivProfPic2"><img class="img-circle2"  src=  <?php if(isset($user['user_avatar'])) { echo $user['user_avatar'] ;} ?>  > </div>    	
	    </div>

	    <div id="apDivContactBox">    
	        <p style="font-size:20px"><?php echo CONTACTDETAILS ; ?></p>
		        <?php
			        if(isset($_GET['user']))
					{
					echo "<p><font align='right'><a href='new_pm.php' class='link_new_pm'>Send a message</a></font></p> " ;
					}
				?>	          
	        <p><?php echo EMAIL  ; ?>: <?php if(isset($user['user_email'])) {  echo $user['user_email'];} ?></p>
	        <p><?php echo CONTACTNUMBER ; ?> : <?php if(isset($cus['contactNo'])) { echo $cus['contactNo'];} ?></p>  	      		       
	    </div>

	</div>

	<div id="apDivContainerCol2">

		<div id="appointmentBox">
			<?php

				if(isset($_POST['description']))
			    {
			    	$job_id=$_SESSION['job_id'];
			    	$sp_id=$_SESSION['sid'];

			    	$sql="insert into complain(job_id,sp_id,description) values('".$job_id."','".$sp_id."','".$_POST['description']."')";
				    mysqli_query($database,$sql) or die(mysqli_error($database));

				    $sql="UPDATE calendar SET reported='1' WHERE calendar_id=$job_id";	
				     mysqli_query($database,$sql) or die(mysqli_error($database));		    	

			 	}

			 	if(!isset($_GET['complain'])&&!isset($_GET['rate']))
       			{
        		echo "<p align='center' style='font-size:30px'>".YOURRECENTAPPOINTMENTS."</p><br><br>";

				$customer=$_SESSION['userID'];
				$sql="select * from calendar where customer_id='".$customer."'";
				$result = mysqli_query($database,$sql) or die(mysqli_error($database));
				$noOfappointments=mysqli_num_rows($result);
				
				if($noOfappointments==0){
					echo "<br>".YOUHAVENOAPPOINMENTSTOSHOW."<br>";
				}
				
				else{				
					echo "
					<table class='table  table-striped'>
						<thead>       
							<tr>
							<td align='center' width='100px'><FONT color=blue size=5>Date</FONT></td>
							<td align='center' width='200px'><FONT color=blue size=5>Job</FONT></td>
							<td align='center' width='200px'><FONT color=blue size=5>User</FONT></td>
							<td align='center' width='400px'><FONT color=blue size=5>Status</FONT></td>
							<td align='center' width='400px'><FONT color=blue size=5>Complain</FONT></td>
							<td align='center' width='400px'><FONT color=blue size=5>Feedback</FONT></td>
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
							echo "Accepted";					
						}
						else if($appointment['accepted']==2){
							echo "Canceled";					
						}
				
						echo "</td>";


						echo "<td align='center' width='200px'>";	

						if($appointment['accepted']==1&&$appointment['reported']==0){
				    
					    echo "<a href=profileCustomer.php?complain=".$appointment['calendar_id']."&sid=".$fname['user_id'].">";
					    echo "<div id='report' class='btn'>
					    Report
					    </div>";

					   
					    echo "</a>";				
						}	

						else if($appointment['accepted']==1&&$appointment['reported']==1){
							echo "Reported";
						}

						else{							
					   		 echo "Pending";
						}	
				   
					    echo "</td >";


					    echo "<td align='center' width='400px'>";

						
						if($appointment['accepted']==0){
							echo "Pending";				
						}
						else if($appointment['feedback']==0){
							echo "<a href=profileCustomer.php?rate=".$appointment['calendar_id']."&sid=".$fname['user_id'].">";
							echo "<div id='report' class='btn'>
					   	    Rate
					    	</div>";

					   
					    echo "</a>";				
						}
						else if($appointment['feedback'] != 0){

							echo "Submitted";	
							//echo include('includes/ratingForSearch.php');						
						}
				
						echo "</td>";
						echo "</tr></tbody>";				
					}	

					echo "</table>";				
				}		
		    }	

		    else if(isset($_GET['complain'])){
				echo "<div id='apDivQuestionBox'>
				<div id='apDivQuestionTitle'>
				  <p style='font-size:18px'><strong> Have a complain ?</strong>?</p>
				  <p > Report to admin ...... </p>

				</div>

				<div id='apDivQustionForum'>
				  <form id='form1' name='form1' method='post' action='profileCustomer.php'>
				    <p>
				      <br><br>
				      <label>Service provider: ".$_GET['sid']." </label>				      
				    </p>
				    <p>";				     

				    $_SESSION['job_id']=$_GET['complain'];
				    $_SESSION['sid']=$_GET['sid'];

				      echo "<br><br>
				      <label>Job Title: ";

				      $sql="select * from calendar where calendar_id='".$_GET['complain']."'";
				      $result = mysqli_query($database,$sql) or die(mysqli_error($database));
				      $job=mysqli_fetch_assoc($result);
					
				      echo $job['title'];
				      echo "</label>				   
					    </p>
					    <p>
					      <label for='description'></label>
					      <textarea name='description' id='question' class='faqText' placeholder='Description' cols='45' rows='10' required></textarea>
					    </p>
					    <p>
					      <input type='submit' class='post' name='qBtn' id='qBtn' value='POST'/>
					    </p>
					  </form>
					</div>
					</div>";
		    }


		    else if(isset($_GET['rate'])){

				echo "<div id='apDivQuestionBox'>
				<div id='apDivQuestionTitle'>
				  <p style='font-size:18px'><strong> Leave a feedback</strong></p>
				  <p > How was this service provider ...... </p>

				</div>

				<div id='apDivQustionForum'>
				  <form id='form1' name='form1' method='post' action='profileCustomer.php'>
				    <p>
				      <br><br>
				      <label>Service provider: ".$_GET['sid']." </label>				      
				    </p>
				    <p>";				     

				    $_SESSION['job_id']=$_GET['rate'];
				    $_SESSION['sid']=$_GET['sid'];

				      echo "<br>
				      <label>Job Title: ";

				      $sql="select * from calendar where calendar_id='".$_GET['rate']."'";
				      $result = mysqli_query($database,$sql) or die(mysqli_error($database));
				      $job=mysqli_fetch_assoc($result);
					
				      echo $job['title']."<br><br>";

				      include('includes/rating.php');

				      echo "</label>				   
					    </p>
					    <p>
					      <label for='description'></label>
					      <textarea name='comment' id='question' class='faqText' placeholder='comment' cols='45' rows='5' required></textarea>
					    </p>
					    <p>
					      <input type='submit' class='post' name='qBtn' id='qBtn' value='POST'/>
					    </p>
					  </form>
					</div>
					</div>";
		    }

			?>

		</div>
	</div>

</body>
</html>
