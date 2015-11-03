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

<?php include_once ('_database/database.php') ?>

<?php
if(isset($_POST['submitJob'])){
    echo "Successfully";
    $jobType = $_POST['jobType'];
	$jobDesc = $_POST['jobDesc'];
    $jobArea =$_POST['jobArea'];
    $jobAddress= $_POST['jobAddress'];
    $jobTel = $_POST['jobTel'];

	$sql = " INSERT INTO postjob2 (job_type,job_description,area,address,tel_num) VALUES ('$jobType','$jobDesc','$jobArea','$jobAddress',$jobTel )";
	

    if (mysqli_query($dbConnection,$sql) ) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

}
?>

<br><br>
<div id="postJobBox">
	<div id = "a1">
	   <center><h2> Post Your Job </h2></center>
        <br>
    </div>
    
    <form action = "index.php" method = "post">
    
    <div id = "a2">
        <center>Select Job Type 
        <select name="jobType" class = "type" required /> 
        <option> Architect</option>
        <option>  Draftsman</option>
        <option> Landscape Designer </option>
        <option> Interior Designer</option>
        <option> Carpenter</option>
        <option> Mason</option>
        <option>Painter </option>
        <option> Plumber</option>
        <option>Tiler </option>
        <option> Contractor</option>
        <option>Astrology </option>
        <option> Fengshui</option>
        <option>Numerology Service </option>
        <option> Vaasthu</option>
        <option>Brick Supplier </option>
        <option> Cement</option>
        <option> Hardware</option>
        <option> Sand Supplier</option>
        <option> Broker</option>
        <option> Real Estate Company</option>
        <option> A/C Technician</option>
        <option> Electrician</option>
        <option>HandyMan </option>
        </select></center>
    </div>
    <br><br>
    
    <div id = "a3">
    	<center>
    	Job Description <br> <textarea name ="jobDesc" cols= "32" rows= "4" class = "jobd" required >  </textarea>
    	</center>
    	</div>
    <br>
    
    <div id = "a7">
    	<center>
        Select Area <select name = "jobArea" class= "area" required /> 
        <option>Colombo</option>
        <option>Kandy</option>
        <option>Kurunegala</option>
        <option>Ampara</option>
        <option>Anuradhapura</option>
        <option>Badulla</option>
        <option>Batticaloa</option>
        <option>Galle</option>
        <option>Gampaha</option>
        <option>Hambantota</option>
        <option>Jaffna</option>
        <option>Kalutara</option>
        <option>Kegalle</option>
        <option>Kilinochchi</option>
        <option>Mannar</option>
        <option>Matale</option>
        <option>Matara</option>
        <option>Moneragala</option>
        <option>Mullaitivu</option>
        <option>Nuwara Eliya</option>
        <option>Polonnaruwa</option>
        <option>Puttalam</option>
        <option>Ratnapura</option>
        <option>Trincomalee</option>
        <option>Vavuniya</option>
        </select>
    	</center>
    </div>
    <br>
    
    <div id="a4"> 
    	<center>
    	Address <br> <textarea name = "jobAddress" cols = "20" rows = "3" class="add" required >  </textarea>
    	</center>
    </div>
    <br>
    
    <div id="a5">
    	<center>
    	Telephone Number <br> <input type="text" name="jobTel" id="jobTel" class= "tel" onblur="return ValidateMobNumber('jobTel')" required /> 
      
    	</center>
    </div>
    <br>
    
    <div id="a6">
        <center>
        <input type="submit" name="submitJob" value= "POST JOB" class = "post" >
        </center>
    </div>
    </form>
</div>

