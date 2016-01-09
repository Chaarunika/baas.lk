<?php include 'header.php'; ?> 
<?php include "../_database/database.php"; ?>
<?php include "common.php" ;?>

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
	left:270px;
	top:60px;
	width:400px;
	height:446px;
	z-index:3;
	background-color: rgba(255,255,255,1);
	padding-left:50px;
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

#show1{
	position:absolute;
	padding-left:20px;
	left:212px;
	top:79px;
	width:85%;
	height:600;
	z-index:2;
	background-color: rgba(192,192,192,1);	
}


</style>
</head>
<div id="show1">
<h3>
 <h3>  <a href="home.php">Remove User</a> || <a href="createprofile.php">Create User</a></h3>
</h3>

<div id="basic">
  <h3>BASIC INFORMATION</h3>
    <form id="form1" name="form1" method="post" action="extra.php">
   
    <table>
    <tr>
  	<td>
       <label for="username">User Name</label>
       <td>
       <input type="text"  name="username" id="username" autocomplete="off" />
     </td>
     </tr>
     
      <tr><td></td></tr>
     
     <tr>
     <td>
       <label for="Password">New Password</label>
       </td>
       <td>
       <input type="password"  name="newPassword" id="newPassword" autocomplete="off" />
     	</td>
        </tr> 
        <tr><td></td></tr>
        
        <tr>
        <td>
       <label for="confirmPassword">Confirm Password</label>
	</td>
    <td>
       <input type="password" name="confirmPassword" id="confirmPassword" autocomplete="off" />
     </td>
     </tr>
      <tr><td></td></tr> <tr><td></td></tr> <tr><td></td></tr><tr><td></td></tr>
      <tr><td> 
      <label for="spCategory">SP Category</label>
      </td>
      <td>
        <select name="spCategory" id="spCategory" >
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
        <select name="district" id="district">
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
       <input type="text" name="primaryMobile" id="primaryMobile"  />
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
        <textarea name="secondLine" id="secondLine" rows=4 cols="50%"  /></textarea>
      </p>
      <table><tr><td width="270px"></td><td>
      <input name="next" type="submit" class="next" id="saveContact" value="NEXT>>" /> </td></tr></table>
    </form>

</div>
</div>
