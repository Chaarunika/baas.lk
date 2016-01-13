<?php include 'header.php'; ?> 
<?php include "../_database/database.php"; ?>
<?php include "common.php" ;?><head>
<!-- create new account form1 -->

<script type="text/javascript">
function ValidateMobNumber(txtMobId) {
  var fld = document.getElementById(txtMobId);

  if (isNaN(fld.value)) {
  alert("The phone number contains illegal characters.");
  fld.value="";
  fld.focus();
  return false;
 }
 else if (!(fld.value.length == 10 || fld.value.length == 0)) {
  alert("The phone number is the wrong length. \nPlease enter 10 digit mobile no.");
  fld.value="";
  fld.focus();
  return false;
 }

}
</script>
<?php
 
$query = "SELECT user_name,user_email FROM users";
  	$result = $database->query($query);
	$found=0;
	while($row = $result->fetch_assoc()){
		$found++;
    	$userarray[] = $row['user_name'];
		$emailarray[]=$row['user_email'];
  	}
	if($found!=0)
	{
	$username=json_encode($userarray);
	$email=json_encode($emailarray);
	}
  ?> 
  
  <script>
function validateform(emailid){  
<?php
		echo "var email = $email; \n";
 ?>
  
var emailid = document.getElementById(emailid);
var atposition=emailid.value.indexOf("@");  
var dotposition=emailid.value.lastIndexOf("."); 

for(var i = 0; i < email.length; i++){
          if(email[i]==emailid.value)
		  {
			alert("Email already exist");
			emailid.value="";
			emailid.focus();
			 return false;   
		  }
		
        }
if(emailid.value!="")
{
if(atposition<1 || dotposition<atposition+2 || dotposition+2>=emailid.value.length){  
  alert("Please enter a valid e-mail address"); 
  emailid.value="";
  emailid.focus();
   return false;  
}
}

}  
</script>
<script>
function usernamevalidate(username)
{
	 var usernameid = document.getElementById(username);
	 <?php
		echo "var username = $username; \n";
    ?>
		
        for(var i = 0; i < username.length; i++){
          if(username[i]==usernameid.value)
		  {
			alert("user name already exist");
			usernameid.value="";
			usernameid.focus();
			 return false;   
		  }
		
        }
	
}


</script>

<script>
function passwordvalid(password)
{
	
	 var passwordid = document.getElementById(password);
	     
		  if(passwordid.value.length<6 && passwordid.value!="")
		  {
			alert("Give long password at least 6 characters");
			passwordid.value="";
			passwordid.focus();
			return false;   
		  }
		
        
	
}

</script>

<script>
function confirmvalid()
{
	
	 var password=document.form1.newPassword.value; 
     var repassword=document.form1.confirmPassword.value;
	
	if(repassword!=password && repassword!="")
	{
		alert("Didn't match password"); 
		document.form1.confirmPassword.value=""; 
		document.form1.confirmPassword.focus();
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
	height:510px;
	z-index:3;
	background-color: rgba(255,255,255,1);
	padding-left:50px;
	border-style: solid;
    border-color: #0000ff;
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
#btn {
	top:0px;
	left:0px;
  background: #787878;
  background-image: -webkit-linear-gradient(top, #787878, #4e5a61);
  background-image: -moz-linear-gradient(top, #787878, #4e5a61);
  background-image: -ms-linear-gradient(top, #787878, #4e5a61);
  background-image: -o-linear-gradient(top, #787878, #4e5a61);
  background-image: linear-gradient(to bottom, #787878, #4e5a61);
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  border-radius: px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
  width:140px;
}

#btn:hover {
  background: #000000;
  background-image: -webkit-linear-gradient(top, #000000, #000000);
  background-image: -moz-linear-gradient(top, #000000, #000000);
  background-image: -ms-linear-gradient(top, #000000, #000000);
  background-image: -o-linear-gradient(top, #000000, #000000);
  background-image: linear-gradient(to bottom, #000000, #000000);
  text-decoration: none;
}
#btn1 {
  top:0px;
  left:140px;
  background: #787878;
  background-image: -webkit-linear-gradient(top, #787878, #4e5a61);
  background-image: -moz-linear-gradient(top, #787878, #4e5a61);
  background-image: -ms-linear-gradient(top, #787878, #4e5a61);
  background-image: -o-linear-gradient(top, #787878, #4e5a61);
  background-image: linear-gradient(to bottom, #787878, #4e5a61);
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  border-radius: px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
  width:140px;
}

#btn1:hover {
  background: #000000;
  background-image: -webkit-linear-gradient(top, #000000, #000000);
  background-image: -moz-linear-gradient(top, #000000, #000000);
  background-image: -ms-linear-gradient(top, #000000, #000000);
  background-image: -o-linear-gradient(top, #000000, #000000);
  background-image: linear-gradient(to bottom, #000000, #000000);
  text-decoration: none;
}


</style>
</head>


<div id="show1">
<table><tr><td><a href="home.php"><div id='btn'>Remove User</div></a></td><td><a href="createprofile.php"><div id='btn1'>Create User</div></a></td></tr></table>

<div id="basic">
  <h3>BASIC INFORMATION</h3>
    <form id="form1" name="form1" method="post" action="extra.php">
   
    <table>
    <tr>
  	<td>
       <label for="username">User Name</label>
       <td>
       <input type="text"  name="username" id="username" autocomplete="off" onBlur="return usernamevalidate('username')" required/>
     </td>
     </tr><tr><td></td></tr>
     
      <tr>
     <td>
       <label for="Password">New Password</label>
       </td>
       <td>
       <input type="password"  name="newPassword" id="newPassword" onBlur="return passwordvalid('newPassword')" autocomplete="off" required/>
     	</td>
        </tr> 
        <tr><td></td></tr>
        
        <tr>
        <td>
       <label for="confirmPassword">Confirm Password</label>
	</td>
    <td>
       <input type="password" name="confirmPassword" id="confirmPassword" onBlur="return confirmvalid()" autocomplete="off" required/>
     </td>
     </tr>
     <tr><td></td></tr>
        <tr>
        <td>
       <label for="email">Email</label>
	</td>
    <td>
       <input type="text" name="email" id="email" autocomplete="off"  onBlur="return validateform('email')" required />
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
       <input type="text" name="primaryMobile" id="primaryMobile" onBlur="return ValidateMobNumber('primaryMobile')" required/>
    </td>
    </tr>
     <tr><td></td></tr>
        <tr><td></td></tr>
    <tr>
    <td>
       <label for="optionalMobile">Second Mobile No</label>
       </td>
       <td>
       <input type="text" name="optionalMobile" id="optionalMobile" onBlur="return ValidateMobNumber('optionalMobile')" />
    </td>
    </tr>
</table>
 
      <p>Address</p>
      <p>
        <textarea name="secondLine" id="secondLine" rows=4 cols="40"  required/></textarea>
      </p>
      <table><tr><td width="270px"></td><td>
      <input name="next" type="submit" class="next" id="saveContact" value="NEXT>>" /> </td></tr></table>
    </form>

</div>
</div>
