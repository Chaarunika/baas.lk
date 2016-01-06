<head>

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


<style type="text/css">
#apDiv11 {
	position:absolute;
	left:20px;
	top:20px;
	width:899px;
	height:578px;
	z-index:1;
	
}
#other {
	position:absolute;
	left:181px;
	top:10px;
	width:550px;
	height:491px;
	z-index:5;
	background-color: rgba(255,255,255,1);
	border-radius:20px;
}


#basic {
	position:absolute;
	left:59px;
	top:29px;
	width:498px;
	height:446px;
	z-index:3;
	background-color: rgba(255,255,255,1);
}

#apDiv5 {
	position:absolute;
	left:181px;
	top:10px;
	width:550px;
	height:491px;
	z-index:5;
	background-color: rgba(255,255,255,1);
	border-radius:20px;
}
</style>
</head>
<div id="apDiv11">
<h3>
 Create New Account
</h3>
 <div id="apDiv5">
<div id="basic">
  <p>BASIC INFORMATION   </p>
    <form id="form1" name="form1" method="post" action="createprofile.php">
   
    <table>
    <tr>
  	<td>
       <label for="username">User Name</label>
       </td>
       <td>
       <input type="text"  name="username" id="username" autocomplete="off" required/>
     </td>
     </tr>
     
      <tr><td></td></tr>
     
     <tr>
     <td>
       <label for="Password">New Password</label>
       </td>
       <td>
       <input type="password"  name="newPassword" id="newPassword" autocomplete="off" required/>
     	</td>
        </tr> 
        <tr><td></td></tr>
        
        <tr>
        <td>
       <label for="confirmPassword">Confirm Password</label>
	</td>
    <td>
       <input type="password" name="confirmPassword" id="confirmPassword" autocomplete="off" required/>
     </td>
     </tr>
      <tr><td></td></tr> <tr><td></td></tr> <tr><td></td></tr><tr><td></td></tr>
      <tr><td> 
      <label for="spCategory">SP Category</label>
      </td>
      <td>
        <select name="spCategory" id="spCategory" required>
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
        </select>
        </td></tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
      <tr><td>
        
        <label for="district">District</label>
        </td>
        <td>
        <select name="district" id="district" required>
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
      </td>
      </tr>
     </table>
     
    <table>
     <tr><td></td></tr>
        <tr><td></td></tr>
    <tr>
    <td>
       <label for="primaryMobileNo">Mobile No</label>
     </td>
     <td>
       <input type="text" name="primaryMobile" id="primaryMobile"  required/>
    </td>
    </tr>
     <tr><td></td></tr>
        <tr><td></td></tr>
    <tr>
    <td>
       <label for="optionalMobile">Second Mobile No</label>
       </td>
       <td>
       <input type="text" name="optionalMobile" id="optionalMobile"  />
    </td>
    </tr>
</table>
 
      <p>Address</p>
      <p>
        <textarea name="secondLine" id="secondLine" rows=4 cols="50%" required /></textarea>
      </p>
      <table><tr><td width="350px"></td><td>
      <input type="submit" name="next" id="saveContact" value="NEXT>>" /> </td></tr></table>
    </form>

</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if ( isset( $_POST['next'] ))
{
?>
<style>
#basic
{
	display:none;
}
</style>
<div id="other">
<p>EXTRA INFORMATION   </p>
<form id="form2" name="form2" method="post" action="createprofile.php">
 <p>Brief Description</p>
      <p>
        <textarea name="secondLine" id="secondLine" rows=6 cols="50%" /></textarea>
      </p>
      
   <p>Work History</p>
      <p>
        <textarea name="secondLine" id="secondLine" rows=6 cols="50%" /></textarea>
      </p>
      <table><tr><td width="350px"></td><td>
      <input type="submit" name="finish" id="saveContact" value="FINISH" /> </td></tr></table>

 </form>
</div>
<?php
	
}}
?>

</div>
</div>
