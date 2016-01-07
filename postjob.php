<?php include_once ('_database/database.php'); 

?>

<?php
if(isset($_POST['jobDesc'])){
    
    echo "Successfully";
    $jobType = $_POST['jobType'];
    $jobDesc = $_POST['jobDesc'];
    $jobArea =$_POST['jobArea'];
    $jobAddress= $_POST['jobAddress'];
    $jobTel = $_POST['jobTel'];
    $user= $_SESSION['username'];

    $sql = " INSERT INTO postjob2 (username,job_type,job_description,area,address,tel_num) VALUES ('$user','$jobType','$jobDesc','$jobArea','$jobAddress',$jobTel )";
    
    if (mysqli_query($dbConnection,$sql) ) {
    echo "New record created successfully";
     } 
     else {
    echo "Error: " . $sql . "<br>" . mysqli_error($dbConnection);
     }

}
?>

<br><br>
    <div id="mainform">
        
        <form name="formJob" method='post' class="formJobb" action='index.php'>
            <h2> Post Your Job </h2>
            <label> Select Job Type </label>
            <select  name="jobType"  class='jobSelect'>
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
            <option> Carpenter </option>
             </select>
             
            <br><br>
            <label> Select Area </label>
            <select name = "jobArea" class='jobSelect'> 
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
            <option>Vavuniya</option> </select>
            <br><br>

            <label> Job Description </label>            
            <textarea class='jobText' placeholder="Short Job Description" name ="jobDesc" maxlength="100" required></textarea>
            <br><br>
            <label> Address </label>
            <textarea class='jobText' name = "jobAddress" placeholder="Address" required></textarea>
            <br><br>
            <label> Contact Number </label>
            <input name="jobTel" id="jobTel" class='jobInput' placeholder="Your Telephone Number" type="text" onblur="return ValidateMobNumber('jobTel')" required>

            <input type="submit" class ='jobButton' name="submitJob"  value="PostJob">
        </form>
    </div>


