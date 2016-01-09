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

        //SMS send function

         
             

        $sql2 = "SELECT DISTINCT contactNo FROM serviceprovider WHERE category='$jobType' AND area='$jobArea' ";
        $result2 = mysqli_query($dbConnection,$sql2);

        while($row = mysqli_fetch_assoc($result2)) {

            $ch = curl_init(); 
            curl_setopt($ch, CURLOPT_URL, "http://baas.lk/serverip.php"); 
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
            $output = curl_exec($ch);      
            curl_close($ch);         

            $ch = curl_init();   
            //$gatewayURL =    "http://".$output.":9090/sendsms?phone=".$row['contactNo']."&text=baas.lk%0a".urlencode($jobDesc)."%0aAddress+:+".urlencode($jobAddress).",+".urldecode($jobArea).".%0a%0acall++".urlencode($jobTel)."%0a"."&password=123456";
            $textitURL = "http://www.textit.biz/sendmsg/index.php?id=94776014365&password=6065&text=baas.lk%0a".urlencode($jobDesc)."%0aAddress+:+".urlencode($jobAddress).",+".urldecode($jobArea).".%0a%0acall++".urlencode($jobTel)."&to=".$row['contactNo'];
            
            //curl_setopt($ch, CURLOPT_URL, $gatewayURL); 
            curl_setopt($ch, CURLOPT_URL, $textitURL); 
            $output = curl_exec($ch);          
            curl_close($ch);               
        }  
     }  

     else {
    echo "Error: " . $sql . "<br>" . mysqli_error($dbConnection);
     }

}
?>

<br><br>
    <div id="mainform">
        
        <form name="formJob" method='post' class="formJobb" action='index.php'>
            <h2> <?php echo POSTYOURJOB; ?> </h2>
            <label> <?php echo SELECTJOBTYPE; ?> </label>
            <select  name="jobType"  class='jobSelect'>
            <option><?php echo ARCHI_DESIGN ?></option>
            <option><?php echo BUILDER ?></option>
            <option><?php echo CONSULTANCYSERVICE ?> </option>
            <option><?php echo CONTRACTOR ?></option>
            <option><?php echo ELECTRICIAN ?></option>
            <option><?php echo MASON ?></option>
            <option><?php echo MATERIAL ?> </option>
            <option><?php echo REALESTATECOMPANY ?></option>
            <option><?php echo TECHNICIAN ?> </option>
            <option><?php echo CARPENTER ?></option>
            <option><?php echo  HANDYMAN ?> </option>
            <option><?php echo PAINTER ?></option>
            <option><?php echo  PLUMBER ?></option>
            <!--
            <option> Cement</option>
            <option> Hardware</option>
            <option> Sand Supplier</option>
            <option> Broker</option>
            <option> Real Estate Company</option>
            <option> A/C Technician</option>
            <option> Electrician</option>
            <option>HandyMan </option>
            <option> Carpenter </option> -->
             </select>
             
            <br><br>
            <label><?php echo SELECTAREA ?></label>
            <select name = "jobArea" class='jobSelect'> 
            <option><?php echo COLOMBO ; ?></option>
            <option><?php echo KANDY; ?></option>
            <option><?php echo KURUNEGALA ; ?></option>
            <option><?php echo AMPARA ; ?></option>
            <option><?php echo ANURA ; ?></option>
            <option><?php echo BADULLA ; ?></option>
            <option><?php echo BATTICALOA ; ?></option>
            <option><?php echo GALLE ; ?></option>
            <option><?php echo GAMPAHA ; ?></option>
            <option><?php echo HAMBANTOTA ; ?></option>
            <option><?php echo JAFFNA ; ?></option>
            <option><?php echo KALUTARA ; ?></option>
            <option><?php echo KEGALLE ; ?></option>
            <option><?php echo KILINOCHCHI ; ?></option>
            <option><?php echo MANNAR ; ?></option>
            <option><?php echo MATALE ; ?></option>
            <option><?php echo MATARA ; ?></option>
            <option><?php echo MONERAGALA ; ?></option>
            <option><?php echo MULLITIVU ; ?></option>
            <option><?php echo NUWARAELIYA ; ?></option>
            <option><?php echo POLONNARUWA ; ?></option>
            <option><?php echo PUTTALAMA ; ?></option>
            <option><?php echo RATNAPURA ; ?></option>
            <option><?php echo TRINCOMALEE ; ?></option>
            <option><?php echo VAVUNIYA ; ?></option>


            </select> 
            <br><br>

            <label> <?php echo JOBDESCRIPTION; ?> </label>            
            <textarea class='jobText' placeholder="<?php echo ENTERSHORTDESCRIPTION ; ?>" name ="jobDesc" maxlength="150" required></textarea>
            <br><br>
            <label> <?php echo JOBADDRESS ; ?></label>
            <textarea class='jobText' name = "jobAddress" placeholder="<?php echo ENTERADDRESS ; ?>" required></textarea>
            <br><br>
            <label> <?php echo CONTACTNUMBER ; ?> </label>
            <input name="jobTel" id="jobTel" class='jobInput' placeholder="<?php echo ENTERYOURTELEPHONENUMBER ; ?>" type="text" onblur="return ValidateMobNumber('jobTel')" required>

            <input type="submit" class ='jobButton' name="submitJob"  value= "<?php echo POSTJOB; ?>" >
        </form>
    </div>


