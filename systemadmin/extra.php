<?php include 'header.php'; ?> 
<?php include "../_database/database.php"; ?>
<?php include "common.php" ;?>



<?php
 $username = $_POST['username'];
 $password = $_POST['newPassword'];
 $email = $_POST['email'];
 $spCategory = $_POST['spCategory'];
 $district = $_POST['district'];
 $primaryMobile=$_POST['primaryMobile'];
 $optionalMobile=$_POST['optionalMobile'];
 $address=$_POST['secondLine'];
 $details = $username."||".$password."||".$email."||".$spCategory."||".$district."||".$primaryMobile."||".$optionalMobile."||".$address;
 
?>
<style>
#show1{
	position:absolute;
	left:212px;
	top:79px;
	width:85%;
	height:600;
	z-index:2;
	background-color: rgba(192,192,192,1);
	padding-left:50px;	
}
#basic {
	position:absolute;
	left:270px;
	top:60px;
	width:430px;
	height:500px;
	z-index:3;
	background-color: rgba(255,255,255,1);
	padding-left:50px;
}

</style>
<body>

<div id='show1'>
<h3>  <a href="home.php">Remove User</a> || <a href="createprofile.php">Create User</a></h3>
<div id="basic">
<h3>EXTRA INFORMATION   </h3>
<form id="form2" name="form2" method="post" action="create.php?id=<?php echo $details; ?>">
	<table>
    <tr>
  	<td>
       <label for="firstname"><p>First Name</p></label></td>
       <td >
       <input type="text"  name="firstname" id="firstname" autocomplete="off" required/>
     </td>
     </tr>
     <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
     <tr>
  	<td>
       <label for="lastname"><p>Last Name</p></label>
       </td><td>
       <input type="text"  name="lastname" id="lastname" autocomplete="off"  required/>
     </td>
     </tr>
    </table>
     
 	<p>Brief Description</p>
      <p>
      <textarea name="secondLine1" id="secondLine" rows=6 cols="50%"/></textarea>
      </p>
      
    <p>Work History</p>
      <p>
      <textarea name="secondLine2" id="secondLine" rows=6 cols="50%" /></textarea>
      </p>
      <table><tr><td width="300px">
      <input type="submit" name="finish" id="saveContact" value="FINISH" /></td></tr></table>

</form>
</div>
</div>
</body>






