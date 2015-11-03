<!DOCTYPE html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php require_once('libraries/password_compatibility_library.php') ; ?>
<?php require_once('config/config.php'); ?>
<link rel="stylesheet" type="text/css" href="css/spProfEdit.css">
<link rel="stylesheet" type="text/css" href="css/header.css">

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
  width: 100%;
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

<script>

function selectFunction(variable){
		
		

		if (variable == 0)
		{			
		document.getElementById("apDivTopic0").style.zIndex = 8;
		
		document.getElementById("apDivTag0").style.color = "black" ;
		document.getElementById("apDivTag1").style.color = "grey" ;
		document.getElementById("apDivTag2").style.color = "grey" ;
		document.getElementById("apDivTag3").style.color = "grey" ;
		
		document.getElementById("apDivOptionBox0").style.visibility = "visible";
		document.getElementById("apDivOptionBox1").style.visibility = "hidden";
		document.getElementById("apDivOptionBox2").style.visibility = "hidden";
		document.getElementById("apDivOptionBox3").style.visibility = "hidden";
		
		document.getElementById("apDivBar0").style.background = "orange";
		document.getElementById("apDivBar1").style.background = "white";
		document.getElementById("apDivBar2").style.background = "white";
		document.getElementById("apDivBar3").style.background = "white";
		
		document.getElementById("apDivProfBox").style.height = "600px" ;	

		
		}

		if (variable == 1)
		{
			
		document.getElementById("apDivTopic1").style.zIndex = 8;
		
		document.getElementById("apDivTag1").style.color = "black" ;
		document.getElementById("apDivTag0").style.color = "grey" ;
		document.getElementById("apDivTag2").style.color = "grey" ;
		document.getElementById("apDivTag3").style.color = "grey" ;
		
		document.getElementById("apDivOptionBox0").style.visibility = "hidden";
		document.getElementById("apDivOptionBox1").style.visibility = "visible";
		document.getElementById("apDivOptionBox2").style.visibility = "hidden";
		document.getElementById("apDivOptionBox3").style.visibility = "hidden";
		
		document.getElementById("apDivBar1").style.background = "orange";
		document.getElementById("apDivBar0").style.background = "white";
		document.getElementById("apDivBar2").style.background = "white";
		document.getElementById("apDivBar3").style.background = "white";
		
		
		document.getElementById("apDivProfBox").style.height = "500px" ;

		}
		if (variable == 2)
		{
			
		document.getElementById("apDivTopic2").style.zIndex = 8;
		
		document.getElementById("apDivTag2").style.color = "black" ;
		document.getElementById("apDivTag1").style.color = "grey" ;
		document.getElementById("apDivTag0").style.color = "grey" ;
		document.getElementById("apDivTag3").style.color = "grey" ;
		
		document.getElementById("apDivOptionBox0").style.visibility = "hidden";
		document.getElementById("apDivOptionBox1").style.visibility = "hidden";
		document.getElementById("apDivOptionBox2").style.visibility = "visible";
		document.getElementById("apDivOptionBox3").style.visibility = "hidden";
		
		document.getElementById("apDivBar2").style.background = "orange";
		document.getElementById("apDivBar1").style.background = "white";
		document.getElementById("apDivBar0").style.background = "white";
		document.getElementById("apDivBar3").style.background = "white";
		
		
		document.getElementById("apDivProfBox").style.height = "600px" ;		
		
		}
		if (variable == 3)
		{
			
		document.getElementById("apDivTopic3").style.zIndex = 8;
		
		document.getElementById("apDivTag3").style.color = "black" ;
		document.getElementById("apDivTag1").style.color = "grey" ;
		document.getElementById("apDivTag2").style.color = "grey" ;
		document.getElementById("apDivTag0").style.color = "grey" ;
		
		document.getElementById("apDivOptionBox0").style.visibility = "hidden";
		document.getElementById("apDivOptionBox1").style.visibility = "hidden";
		document.getElementById("apDivOptionBox2").style.visibility = "hidden";
		document.getElementById("apDivOptionBox3").style.visibility = "visible";
		
		document.getElementById("apDivBar3").style.background = "orange";
		document.getElementById("apDivBar1").style.background = "white";
		document.getElementById("apDivBar2").style.background = "white";
		document.getElementById("apDivBar0").style.background = "white";
		
		document.getElementById("apDivProfBox").style.height = "600px" ;
		
		
		}
		
		
	
	
} 
</script>


</head>

<body>

<?php include ("header.php"); ?>

  <div id="subMenu">
    <ul class="nav nav-tabs">
      <li role="presentation" ><a href="profile.php">Overview</a></li>
      <li role="presentation" class="active"><a href="spProfEdit.php">Edit Profile</a></li>
      <li role="presentation"><a href="#">Messages</a></li>
    </ul>
  </div>

<div id="spProfEditContainer"> 


<div id="apDivProfBox">

  <div id="apDivProfAbout">

		<div id="apDivIcon"><img src="images/face.png" width="40" height="39" alt="icon" /></div>

		<div id="apDivAbout">Edit Profile</div>
    </div>

  <div id="apDivTopicList">

		<a href="#">
		<div id="apDivTopic0">
			<div id="apDivBar0"> </div>
		  <div id="apDivTag0" onclick = "selectFunction(0);">Edit Basic Information</div>
		</div>
    	</a>

		<a href="#">
		<div id="apDivTopic1" style= "top:65px">
		  <div id="apDivBar1" ></div>
		  <div id="apDivTag1" onclick = "selectFunction(1)">Edit your Contact details</div>
		</div>
        </a>

		<a href="#">
		<div id="apDivTopic2" style= "top:130px">
		  <div id="apDivBar2" ></div>
		  <div id="apDivTag2" onclick = "selectFunction(2)">Edit your Work Information</div>
		</div>
        </a>

		<a href="#">
		<div id="apDivTopic3" style= "top:195px">
		  <div id="apDivBar3"></div>
		  <div id="apDivTag3" onclick = "selectFunction(3)">Password Change</div>
		</div>
        </a>




  </div>





<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "baaslk";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


 // include ('_database/database.php');


  $userID = $_SESSION['userID']; 
  
?>
    
  <div id="apDivOptionBox0">

    <form id="form1" name="form1" method="post" action="spProfEdit.php">
      <label for="firstName">First Name</label>
      <input type="text" name="firstName" id="firstName" required />
      <label for="lastName">Last Name</label>
      <input type="text" name="lastName" id="lastName" required />
      <label for="year">Year</label>
      <select name="year" id="year" required>
        <option>1989</option>
        <option>1990</option>
        <option>1991</option>
        <option>1992</option>
        <option>1993</option>
        <option>1994</option>
        <option>1995</option>
        <option>1996</option>
        <option>1997</option>
        <option>1998</option>
        <option>1999</option>
        <option>2000</option>
      </select>
      <label for="month">Month</label>
      <select name="month" id="month" required>
        <option>January</option>
        <option>February</option>
        <option>March</option>
        <option>April</option>
        <option>May</option>
        <option>June</option>
      </select>
      <label for="date">Date</label>
      <select name="date" id="date" required>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>13</option>
        <option>14</option>
        <option>15</option>
        <option>16</option>
      </select>
      <p>
        <label>
          <input type="radio" name="gender" value="M" id="gender_0" required />
          Male</label>
        <br />
        <label>
          <input type="radio" name="gender" value="F" id="gender_1" required />
          Female</label>
      </p>
      <p>Please Select Preferable Languages to communicate</p>
      <p>
        <label>
        <input type="checkbox" name="check" value="S" id="language_0" />Sinhala</label>
        
        <label>
          <input type="checkbox" name="check" value="T" id="language_1"  />Tamil</label>
        
        <label>
          <input type="checkbox" name="check" value="E" id="language_2" />English</label>
      </p>
      <p>Adress</p>
      <p>
        <label for="firstLine">Line1</label>
        <input type="text" name="firstLine" id="firstLine" required />
      </p>
      <p>
        <label for="secondLine">Line 2</label>
        <input type="text" name="secondLine" id="secondLine" required />
      </p>
      <p>
        <label for="district">District</label>
        <select name="district" id="district" required>
          <option>Anuradhapura</option>
          <option>Colombo</option>
          <option>Kurunegala</option>
          <option>Kandy</option>
          <option>Ampara</option>
        </select>
      </p>
      <p>
        <input type="submit" name="saveOverview" id="saveOverview" value="Save" />
      </p>      
    </form>



<?php

  if(isset($_POST["firstName"]) )
  {

  $firstName = $_POST["firstName"];
  $lastName = $_POST["lastName"];
  $year = $_POST["year"];
  $month = $_POST["month"];
  $date = $_POST["date"];
  $gender = $_POST["gender"];  
  $firstLine = $_POST["firstLine"];
  $secondLine = $_POST["secondLine"];
  $area = $_POST["district"];

  $dob = $year."/".$month."/".$date;
  $address = $firstLine.",".$secondLine.",".$area ; 
  echo $firstName;
 
  $sql = "UPDATE users SET user_firstName = '$firstName' , user_lastname = '$lastName' WHERE user_id = $userID";
  $sql2 = "UPDATE serviceprovider SET area= '$area' , dob = '$dob' , gender = '$gender' ,address = '$address' WHERE user_id = $userID";

  if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql2) ) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }



   }

   ?>

  </div>
  
  
  
 <div id="apDivOptionBox1">
   <form id="form2" name="form2" method="post" action="spProfEdit.php">
     <p>
       <label for="optionalEmail">Optional Email</label>
       <input type="text" name="optionalEmail" id="optionalEmail" />
     </p>
     <p>
       <label for="primaryMobileNo">Primary Mobile No</label>
       <input type="text" name="primaryMobile" id="primaryMobile" onblur="return ValidateMobNumber('primaryMobile')"  required/>
     </p>
     <p>
       <label for="optionalMobile">Secondary Mobile No</label>
       <input type="text" name="optionalMobile" id="optionalMobile" onblur="return ValidateMobNumber('optionalMobile')"  />
     </p>
     <p>
       <input type="submit" name="saveContact" id="saveContact" value="Save" />
     </p>

     <?php

  if(isset($_POST["optionalEmail"]) )
  {
  $optionalEmail = $_POST["optionalEmail"];
  $primaryMobile = $_POST["primaryMobile"];
  $optionalMobile = $_POST["optionalMobile"];

  $sql = "UPDATE serviceprovider SET opEmail = '$optionalEmail' , contactNo = '$primaryMobile' , opContactNo='$optionalMobile' WHERE user_id = $userID ";
  

  if (mysqli_query($conn, $sql)  ) {
    echo "Conatct Info recorded created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }


  }

  ?>

   </form>





 </div>
 
 
  <div id="apDivOptionBox2">
    <form action="spProfEdit.php" method="post" enctype="multipart/form-data" name="form3" id="form3">
      <p>
        <label for="spCategory">Service Provider Category</label>
        <select name="spCategory" id="spCategory">
          <option>Electrician</option>
          <option>Mason</option>
          <option>Plumber</option>
        </select>
      </p>
      <p>
        <label for="shortDescription">A short Description about You</label>
        <textarea name="shortDescription" id="shortDescription" cols="45" rows="5" required></textarea>
      </p>
      <p>
        <label for="workHistory">Work History and Experience Details</label>
        <textarea name="workHistory" id="workHistory" cols="45" rows="5" required></textarea>
      </p>
      <p>Work History Photos</p>
      <p>
        <label for="attachement1">Attachement1</label>
        <input type="file" name="attachement1" id="attachement1" />
      </p>
      <p>
        <label for="attachement2">Attachement2</label>
        <input type="file" name="attachement2" id="attachement2" />
      </p>
      <p>
        <label for="attachement3">Attachement3</label>
        <input type="file" name="attachement3" id="attachement3" />
      </p>
      <p>
       <input type="submit" name="saveInfo" id="saveInfo" value="Save" />
     </p>
    </form>


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
  

  if (mysqli_query($conn, $sql)  ) {
    echo "Conatct Info recorded created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  
  }

  ?>

  </div>
      <div id="apDivOptionBox3">
	  
	   <form id="form4" name="form4" method="post" action="spProfEdit.php">
     <p>
       <label for="oldPassword">Old Password</label>
       <input type="password"  name="oldPassword" id="oldPassword" autocomplete="off" required/>
     </p>
     <p>
       <label for="newPassword">New Password</label>
       <input type="password"  name="newPassword" id="newPassword" autocomplete="off" required/>
     </p>
     <p>
       <label for="confirmPassword">Confirm Password</label>

       <input type="password" name="confirmPassword" id="confirmPassword" autocomplete="off" required/>
     </p>
     <p>
       <input type="submit" name="password" id="password" value="Change" />
     </p>

     <?php

  if(isset($_POST["optionalEmail"]) )
  {
  $optionalEmail = $_POST["optionalEmail"];
  $primaryMobile = $_POST["primaryMobile"];
  $optionalMobile = $_POST["optionalMobile"];

  $sql = "UPDATE serviceprovider SET opEmail = '$optionalEmail' , contactNo = '$primaryMobile' , opContactNo='$optionalMobile' WHERE user_id = $userID ";
  

  if (mysqli_query($conn, $sql)  ) {
    echo "Conatct Info recorded created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }


  }
  
  if(isset($_POST["oldPassword"]) )
  {
  $oldPassword = $_POST["oldPassword"];
  $newPassword = $_POST["newPassword"];
  $confirmPassword = $_POST["confirmPassword"];
  
	$sqlget = "select * from users where user_id='".$_SESSION['userID']."'";  
	$row=mysqli_query($conn, $sqlget);
	$result=mysqli_fetch_assoc($row);
	
	
	if(password_verify($oldPassword,$result['user_password_hash']))
	{
		if( $newPassword==$confirmPassword)
		{
			$hash_cost_factor = HASH_COST_FACTOR;
			$newPasswordhash = password_hash($newPassword, PASSWORD_DEFAULT, array('cost' => 	$hash_cost_factor));
		
			$sql = "UPDATE users SET user_password_hash = '".$newPasswordhash."' where user_name='"	.$_SESSION['username']."'";
	  
			mysqli_query($conn, $sql);
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

   </form>
	  
	  
	  
	  
	  </div>
</div>

</div>
<?php
mysqli_close($conn);
?>
</body>
</html>
