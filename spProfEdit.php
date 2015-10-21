<!DOCTYPE html>

<head>

  <title>baas.lk</title>
  <link rel="stylesheet" type="text/css" href="css/spProfEdit.css">
  <link rel="stylesheet" type="text/css" href="css/header.css">
  <script src="javascript/editTable.js"></script>

</head>

<body>

  <?php 
  include ("header.php");
  include("_database/database.php");
  include("functions/functions.php");

  $userID = $_SESSION['userID'];
  ?>

  <div id="spProfEditContainer"> 
    <div id="apDivProfBox">

      <div id="apDivProfAbout">
		    <div id="apDivIcon"><img class ="img-circleTable" src="<?php echo $_SESSION['url'] ?>" width="40" height="39" alt="icon" /></div>
		    <div id="apDivAbout">About</div>
      </div>

      <div id="apDivTopicList">

		    <a href="#">
		    <div id="apDivTopic0">
			    <div id="apDivBar0"> </div>
		      <div id="apDivTag0" onclick = "selectFunction(0);">Overview</div>
		    </div></a>

    		<a href="#">
    		<div id="apDivTopic1" style= "top:65px">
    		  <div id="apDivBar1" ></div>
    		  <div id="apDivTag1" onclick = "selectFunction(1)">Contact details</div>
    		</div></a>

    		<a href="#">
    		<div id="apDivTopic2" style= "top:130px">
    		  <div id="apDivBar2" ></div>
    		  <div id="apDivTag2" onclick = "selectFunction(2)">Work Info</div>
    		</div></a>

    		<a href="#">
    		<div id="apDivTopic3" style= "top:195px">
    		  <div id="apDivBar3"></div>
    		  <div id="apDivTag3" onclick = "selectFunction(3)">Settings</div>
    		</div></a>
      </div>

      <?php include('forms/mainDetails.php') ?>
    
      



<?php

  if(isset($_POST["firstName"]) )
  {

  $firstName = $_POST["firstName"];
  $lastName = $_POST["lastName"];  
  $gender = $_POST["gender"];  
  $firstLine = $_POST["firstLine"];
  $secondLine = $_POST["secondLine"];
  $area = $_POST["district"];

 
  $address = $firstLine.",".$secondLine.",".$area ;   
 
  $sql = "UPDATE users SET user_firstName = '$firstName' , user_lastname = '$lastName' WHERE user_id = $userID";
  $sql2 = "UPDATE serviceprovider SET area= '$area' , dob = '$dob' , gender = '$gender' ,address = '$address' WHERE user_id = $userID";

  if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql2) ) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }



   }

   ?>

  
  
  
  
 <div id="apDivOptionBox1">
   <form id="form2" name="form2" method="post" action="spProfEdit.php">
     <p>
       <label for="optionalEmail">Optional Email</label>
       <input type="text" name="optionalEmail" id="optionalEmail" />
     </p>
     <p>
       <label for="primaryMobileNo">Primary Mobile No</label>
       <input type="text" name="primaryMobile" id="primaryMobile" required/>
     </p>
     <p>
       <label for="optionalMobile">Secondary Mobile No</label>
       <input type="text" name="optionalMobile" id="optionalMobile" />
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
      <div id="apDivOptionBox3"></div>
</div>

</div>
<?php
mysqli_close($conn);
?>
</body>
</html>
