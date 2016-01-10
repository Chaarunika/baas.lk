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
	height:630;
	z-index:2;
	background-color: rgba(192,192,192,1);
	padding-left:50px;	
}
#basic {
	position:absolute;
	left:270px;
	top:60px;
	width:490px;
	height:560px;
	z-index:3;
	background-color: rgba(255,255,255,1);
	padding-left:50px;
	border-style: solid;
    border-color: #0000ff;
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
<body>

<div id='show1'>
<table><tr><td><a href="home.php"><div id='btn'>Remove User</div></a></td><td><a href="createprofile.php"><div id='btn1'>Create User</div></a></td></tr></table>

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
     <tr><td></td></tr>
     <tr>
  	<td>
       <label for="lastname"><p>Last Name</p></label>
       </td><td>
       <input type="text"  name="lastname" id="lastname" autocomplete="off"  required/>
     </td>
     </tr>
      <tr><td></td></tr>
    </table>
     
 	Brief Description
      <p>
      <textarea name="secondLine1" id="secondLine" rows=6 cols="50%"/></textarea>
      </p>
      
    Work History
      <p>
      <textarea name="secondLine2" id="secondLine" rows=6 cols="50%" /></textarea>
      </p>
      <table><tr><td width="300px">
      <input type="submit" name="finish" id="saveContact" value="FINISH" /></td></tr></table>

</form>
</div>
</div>
</body>






