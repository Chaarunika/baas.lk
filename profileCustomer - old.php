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

<style>
p{	
	color: rgba(51,51,51,1);
	font-size:18px;
	}

h3{
	line-height: 40%;	

}
 .FAQ { 
 		cursor:hand; cursor:pointer;
        border:1px solid darkorange;
        border-radius: 3px;
        width:600px; 
        background-color: #f0f0f0;
       // padding :5px;  	
        
        
    }

 .FAA { 
 	display:none;	
 	 }


#apDivTitle{
	position: absolute;
	left: 131px;
	top: 90px;
	width: 70%;
	height: 105px;
	z-index: 111;
}



#apDivQuestionBox {
	position: absolute;
	left: 100px;
	top: 30px;
	width: 390px;
	height: 400px;
	z-index: 1;
	background-color: #f0f0f0;
	border-radius: 5px;
	border:1px solid rgba(51,51,51,0.5);
}
#apDivQuestionTitle {
	position: absolute;
	left: 16px;
	top: 18px;
	width: 350px;
	z-index: 2;
}

#apDivQustionForum {
	position: absolute;
	left: 19px;
	top: 50px;
	width: 340px;
	height: 160px;
	z-index: 2;
}
.post{
width:100%;
height:40px;
margin-top:15px;
margin-bottom:15px;
background-color:rgba(240,240,240,0.8);
border:1px solid rgba(0,0,0,0.2);
border-radius:3px;
font-family:'Fauna One',serif;
font-weight:500;
font-size:14px;
border-style: solid;
border-width: 1px;
}
.post:hover{
	background-color:#a6a6a6;
}
.faqText{
width:100%;
height:100px;
margin-top:10px;
border:none;
border-radius:3px;
padding:5px;
resize:none;
border-style: solid;
border-width: 1px;
border-color: rgba(240,240,1,1);

}
.faqInput{
width:50%;
height:30px;
margin-top:10px;
border:none;
border-radius:3px;
padding:5px;
resize:none;
border-style: solid;
border-width: 1px;
border-color: rgba(240,240,1,1);

}

.btn {
  background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  font-family: Arial;
  color: #ffffff;
  font-size: 12px;
  text-decoration: none;
}

.btn {
  background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  font-family: Arial;
  color: #ffffff;
  font-size: 12px;
  text-decoration: none;
}

.btn:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}
</style>

<body>

	<?php 
	include_once('header.php'); 
	include_once('_database/database.php'); 
	include_once('functions/functions.php');
	?>

	<?php 	
	if(isset($_SESSION['userID'])){
	$userID = $_SESSION['userID'];
	$result2 = get_customer_details($userID);
	$sp = mysqli_fetch_assoc($result2);
	}	

	if(isset($_GET['user']))
	{
		$userID = $_GET['user'];
		$result = get_user_details($userID);
	    $user = mysqli_fetch_assoc($result);	
	}

		

	
	
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

        if(!isset($_GET['complain']))
        {
        		echo "<p align='center' style='font-size:30px'>".YOURRECENTAPPOINTMENTS."</p><br><br>";


				$customer=$_SESSION['userID'];
				$sql="select * from calendar where customer_id='".$customer."'";
				$result = mysqli_query($database,$sql) or die(mysqli_error($database));
				$noOfappointments=mysqli_num_rows($result);
				if($noOfappointments==0)
				{
				echo "<br>".YOUHAVENOAPPOINMENTSTOSHOW."<br>";
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
						<td align='center' width='400px'>Complain</td>
						<td align='center' width='400px'>Feedback</td>
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
				
					echo "</td>";


					echo "<td align='center' width='200px'>";	

					if($appointment['accepted']==1&&$appointment['reported']==0){
			    
				    echo "<a href=profileCustomer.php?complain=".$appointment['calendar_id']."&sid=".$fname['user_id'].">";
				    echo "<div id='report' class='btn'>
				    Report
				    </div>";

				   
				    echo "</a>";				
					}	


					else if($appointment['accepted']==1&&$appointment['reported']==1)
					{
						echo "Reported";


					}

					else
					{
						
				   		 echo "Pending";
				    	


					}	
				   
				    echo "</td >";


				    echo "<td align='center' width='400px'>";
					
					if($appointment['accepted']==0){
						echo "Pending";				
					}
					else if($appointment['feedback']==0){
						echo "Display feedback";					
					}
					else if($appointment['feedback']==1){
						echo "Feedback lefted";					
					}
				
					echo "</td>";
				

					echo "</tr></tbody>";
				
				
				}
					
				
				echo "</table>";
				
				
				}
		
		    }

	

		    else
		    {




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


		   
		
		?>
	
		</div>	
    </div>   
</div>       

</body>
</html>
