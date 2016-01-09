<!DOCTYPE html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>baas.lk</title>
<?php require_once('libraries/password_compatibility_library.php') ; ?>
<?php require_once('config/config.php'); ?>
<link rel="stylesheet" type="text/css" href="css/spProfEdit.css">
<link rel="stylesheet" type="text/css" href="css/header.css">
<link rel="stylesheet" type="text/css" href="css/galleryUpdate.css">

<!-- Bootstrap  -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">   
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


<style type="text/css">

	#subMenu{
  position: absolute;
  top: 90px;
  width: 90% ;
  left :50px;
}
</style>

<script type="text/javascript">

function ValidateMobNumber(txtMobId) {
  var fld = document.getElementById(txtMobId);

  if (fld.value == "") {
  return false;
 }
  if (isNaN(fld.value)) {
  alert("The phone number contains illegal characters.");
  fld.value = "";
  fld.focus();
  return false;
 }
 else if (!(fld.value.length == 10)) {
  alert("The phone number is the wrong length. \nPlease enter 10 digit mobile no.");
  fld.value = "";
  fld.focus();
  return false;
 }

}

</script>

<script src="javascript/editTable.js"></script>

</head>

<body>

<?php include ("header.php"); ?>

<?php include "galleryUpdate.php" ?>

  <div id="subMenu">
    <ul class="nav nav-tabs">
      <li role="presentation" ><a href="profile.php"><?php echo OVERVIEW ; ?></a></li>
      <li role="presentation" class="active"><a href="spProfEdit.php"><?php echo EDITPROFILE ; ?></a></li>
      <li role="presentation"><a href="list_pm.php"><?php echo MESSAGETAB; ?></a></li>
    </ul>
  </div>

<div id="spProfEditContainer"> 


<div id="apDivProfBox">

  <div id="apDivProfAbout">

		<div id="apDivIcon"><img src="images/face.png" width="40" height="39" alt="icon" /></div>

		<div id="apDivAbout"><?php echo EDITPROFILE ; ?></div>
    </div>

  <div id="apDivTopicList">

		<a href="#">
		<div id="apDivTopic0">
			<div id="apDivBar0"> </div>
		  <div id="apDivTag0" onclick = "selectFunction(0);"><?php echo EDITBASICINFORMATION ; ?></div>
		</div>
    	</a>

		<a href="#">
		<div id="apDivTopic1" style= "top:65px">
		  <div id="apDivBar1" ></div>
		  <div id="apDivTag1" onclick = "selectFunction(1)"><?php echo EDITYOURCONTACTDETAILS ; ?></div>
		</div>
        </a>

		<a href="#">
		<div id="apDivTopic2" style= "top:130px">
		  <div id="apDivBar2" ></div>
		  <div id="apDivTag2" onclick = "selectFunction(2)"><?php echo EDITYOURWORKINFORMATION ; ?></div>
		</div>
        </a>

		<a href="#">
		<div id="apDivTopic3" style= "top:195px">
		  <div id="apDivBar3"></div>
		  <div id="apDivTag3" onclick = "selectFunction(3)"><?php echo PASSWORDCHANGE ; ?></div>
		</div>
        </a>




  </div>





<?php
  include_once ('_database/database.php');
  $userID = $_SESSION['userID'];  
?>

<?php   
  include_once('functions/functions.php');

  $result = get_user_details($userID);
  $user = mysqli_fetch_assoc($result);  

  $result2 = get_serviceprovider_details($userID);
  $sp = mysqli_fetch_assoc($result2);
?>

<?php include_once('includes/apDivOptionBox0.php') ?>


<?php

  if(isset($_POST["firstName"]) )
  {

  $firstName = $_POST["firstName"];
  $lastName = $_POST["lastName"];
  $year = $_POST["year"];
  $month = $_POST["month"];
  $date = $_POST["date"];
  //$gender = $_POST["gender"];  
  $firstLine = $_POST["firstLine"];
  $secondLine = $_POST["secondLine"];
  $area = $_POST["district"];

  $dob = $year."/".$month."/".$date;
  $address = $firstLine.",".$secondLine.",".$area ; 
  
 
  $sql = "UPDATE users SET user_firstName = '$firstName' , user_lastname = '$lastName' WHERE user_id = $userID";
  $sql2 = "UPDATE serviceprovider SET area= '$area' , dob = '$dob' , gender = 'M' ,address = '$address' WHERE user_id = $userID";

  if (mysqli_query($dbConnection, $sql) && mysqli_query($dbConnection, $sql2) ) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($dbConnection);
  }



   }

   ?>

  
  <?php include_once('includes/apDivOptionBox1.php') ?>


     <?php

  if(isset($_POST["optionalEmail"]) )
  {
  $optionalEmail = $_POST["optionalEmail"];
  $primaryMobile = $_POST["primaryMobile"];
  $optionalMobile = $_POST["optionalMobile"];

  $sql = "UPDATE serviceprovider SET opEmail = '$optionalEmail' , contactNo = '$primaryMobile' , opContactNo='$optionalMobile' WHERE user_id = $userID ";
  

  if (mysqli_query($dbConnection, $sql)  ) {
    echo "Conatct Info recorded created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($dbConnection);
  }


  }

  ?>

 <?php include_once('includes/apDivOptionBox2.php') ?>

  <?php

  if(isset($_POST["spCategory"]) )
  {
  $spCategory = $_POST["spCategory"];
  $shortDescription = $_POST["shortDescription"];
  $workHistory = $_POST["workHistory"];
  //$attachment1 = $_POST["attachment1"];
  //$attachment2 = $_POST["attachment2"];
  //$attachment3 = $_POST["attachment3"];

  $sql = "UPDATE serviceprovider SET workInfo = '$workHistory' , category = '$spCategory' , descr ='$shortDescription' WHERE user_id = $userID ";
  

  if (mysqli_query($dbConnection, $sql)  ) {
    echo "Conatct Info recorded created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($dbConnection);
  }

  
  }

  ?>

  
  <?php include_once('includes/apDivOptionBox3.php') ?>

     <?php

  if(isset($_POST["optionalEmail"]) )
  {
  $optionalEmail = $_POST["optionalEmail"];
  $primaryMobile = $_POST["primaryMobile"];
  $optionalMobile = $_POST["optionalMobile"];

  $sql = "UPDATE serviceprovider SET opEmail = '$optionalEmail' , contactNo = '$primaryMobile' , opContactNo='$optionalMobile' WHERE user_id = $userID ";
  

  if (mysqli_query($dbConnection, $sql)  ) {
    echo "Conatct Info recorded created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($dbConnection);
  }


  }
  
  if(isset($_POST["oldPassword"]) )
  {
  $oldPassword = $_POST["oldPassword"];
  $newPassword = $_POST["newPassword"];
  $confirmPassword = $_POST["confirmPassword"];
  
	$sqlget = "select * from users where user_id='".$_SESSION['userID']."'";  
	$row=mysqli_query($dbConnection, $sqlget);
	$result=mysqli_fetch_assoc($row);
	
	
	if(password_verify($oldPassword,$result['user_password_hash']))
	{
		if( $newPassword==$confirmPassword)
		{
			$hash_cost_factor = HASH_COST_FACTOR;
			$newPasswordhash = password_hash($newPassword, PASSWORD_DEFAULT, array('cost' => 	$hash_cost_factor));
		
			$sql = "UPDATE users SET user_password_hash = '".$newPasswordhash."' where user_name='"	.$_SESSION['username']."'";
	  
			mysqli_query($dbConnection, $sql);
			header('Location:login.php?logout');
		}
		else
		{
		
		echo "new password and confirm password doesn't match";
		
		}
			
	}
	
	else
	{		
	echo "Old password is wrong";
			
	
	}
  
	 
 
  }


  

  ?>

   
</div>

</div>
<?php
mysqli_close($dbConnection);
?>
</body>
</html>
