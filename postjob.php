
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	
	$conn = new MySQLi("localhost","root","","baaslk");
	mysqli_query($conn,"INSERT INTO postjob2 (job_type,job_description,area,address,tel_num) VALUES ('$_POST[type]','$_POST[job]','$_POST[area]','$_POST[add]','$_POST[tel]')");
	echo "Successfully";

}
?>

<br><br>
<div id="postJobBox">
	<div id = "a1">
	   <center><h2> Post Your Job </h2></center>
        <br>
    </div>
    
    <form action = "" method = "post">
    
    <div id = "a2">
        <center>Select Job Type <select name="type" class = "type"> 
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
    	Job Description <br> <textarea name ="job" cols= "32" rows= "4" class = "jobd"> </textarea>
    	</center>
    	</div>
    <br>
    
    <div id = "a7">
    	<center>
        Select Area <select name = "area" class= "area"> 
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
    	Address <br> <textarea name = "add" cols = "20" rows = "3" class="add"> </textarea>
    	</center>
    </div>
    <br>
    
    <div id="a5">
    	<center>
    	Telephone Number <br> <input type="text" name="tel" class= "tel" >
      
    	</center>
    </div>
    <br>
    
    <div id="a6">
        <center>
        <input type="submit" name="submit" value= "POST JOB" class = "post" >
        </center>
    </div>
    </form>
</div>

