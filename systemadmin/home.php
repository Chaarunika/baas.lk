<?php include "header.php" ;?>
<?php include "common.php" ;?>
  <?php include '../_database/database.php'; ?>
  <!-- home and also serviceprovider profile view-->
<style>
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
#show1{
	position:absolute;
	padding-left:20px;
	left:212px;
	top:79px;
	width:85%;
	height:500;
	z-index:2;
	background-color: rgba(192,192,192,1);	
}

</style>
<div id=show1>

<table><tr><td><a href="home.php"><div id='btn'>Remove User</div></a></td><td><a href="createprofile.php"><div id='btn1'>Create User</div></a></td></tr></table>

<style type="text/css">
#apDiv19 {
	position:absolute;
	left:200px;
	top:70px;
	width:896px;
	height:115px;
	z-index:1;
}
#apDiv20 {
	position:absolute;
	left:18px;
 	top:0px;
	width:691px;
	height:100px;
	z-index:2;
	border-radius: 20px;
	background-color:#CCC;
	font-weight: bold;
}

.searchtext {
	position: absolute;
	border-width:3px;
	border-style: inset;
	left: 51px;
	font-size:16px;
	font-family:"Arial Black", Gadget, sans-serif;
	top: 13px;
	width: 470px;
	height: 26px;
}

.searchbutton {
	position: absolute;
	left: 546px;
	top: 17px;
	width: 94px;
	height: 24px;
	 background: #787878;
    background-image: -webkit-linear-gradient(top, #787878, #4e5a61);
  background-image: -moz-linear-gradient(top, #787878, #4e5a61);
  background-image: -ms-linear-gradient(top, #787878, #4e5a61);
  background-image: -o-linear-gradient(top, #787878, #4e5a61);
  background-image: linear-gradient(to bottom, #787878, #4e5a61);
	font-weight: bold;
	color:#FFF;
	font-size: 12px;
	text-decoration: none;
}
.searchbutton:hover{
 background: #000000;
  background-image: -webkit-linear-gradient(top, #000000, #000000);
  background-image: -moz-linear-gradient(top, #000000, #000000);
  background-image: -ms-linear-gradient(top, #000000, #000000);
  background-image: -o-linear-gradient(top, #000000, #000000);
  background-image: linear-gradient(to bottom, #000000, #000000);
  text-decoration: none;
  cursor:hand;
}
#apDiv1 #apDiv2 #form1 p {
	font-size: 14px;
}
#apDiv3 {
	position:absolute;
	left:51px;
	top:72px;
	width:0px;
	height:7px;
	z-index:2;
}
#apDiv4 {
	position:absolute;
	left:8px;
	top:43px;
	width:699px;
	height:39px;
	z-index:3;
}
.area {
	position: absolute;
	width: 236px;
	left: 53px;
	top: 59px;
}
.work {
	position: absolute;
	left: 315px;
	top: 60px;
	width: 207px;
}
</style>
<body>
<div id="apDiv19">
  <div id="apDiv20">
    <form id="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?> ">
    <p>&nbsp;</p>
    <p>
      <label for="textfield"></label>
      <input name="textfield" type="text" class="searchtext" id="textfield" />
      <input name="button" type="submit" class="searchbutton" id="button" value="SEARCH" />
    </p>
    <p>
      <label for="area"></label>
      <select name="area" class="area" id="area">
       <option>Any Area</option>
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
      <label for="work"></label>
      <select name="work" class="work" id="work">
      <option> Any Category</option>
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
    </p>
    </form>
</div>
</div>

<div id="publish">
<script type="text/javascript">  
function msg(){  
var v= confirm("Are u sure?");  
if(v==true){  
alert("ok");  
}  
else{  
alert("cancel");  
}  
  
}  
</script>

<?php

if ( isset($_POST['button']))
{

$found =-1;

$word =stripslashes($_POST['textfield']);
$area = stripslashes($_POST['area']);
$category=stripslashes($_POST['work']);
if($word=="")
{
	if($area== "Any Area" && $category=="Any Category")
	{
		
$found =-1;
$sql = "SELECT * FROM users CROSS JOIN serviceprovider WHERE users.user_id=serviceprovider.user_id";
$result = mysqli_query($database, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
	   ++$found;
	   		   ?>
<style type="text/css">
#ap<?php echo $found; ?>
{
	position:absolute;
	left:180px;
	top:<?php echo 200*$found?>px;
	width:750px;
	height:180px;
	z-index:2;
	border-radius: 20px;
	border-style:solid;
	border-width:2px;
	background-color:#F8F7F1;
	font-weight: bold;	
}

</style>
<div id="ap<?php echo $found; ?>">
<table width="700" height="100%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#F8F7F1" >
<tr>
<td><table width="100%" height="100%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#F8F7F1">
<tr>
<td width="100%" bgcolor="#F8F7F1"><table><tr>
<td width="10%" bgcolor="#F8F7F1" align="left"><img src="
<?php 
if($row['login_type']=='fb')
{
	echo $row['user_avatar'];
}
else
{
	echo "../".$row['user_avatar'];
}
?>" alt="" border=3 height=30 width=30></img></td>
<td width="75%"bgcolor="#F8F7F1" align="right"><a href= "../systemadmin/profile.php?user=<?php echo $row["user_id"];?>" target="_blank" >View Profile</a></td>
</tr></table></td>
</tr>
<tr>
<td width="100%" bgcolor="#F8F7F1"><strong><?php echo $row['user_name']." || ".$row['area']." || ".$row['category']; ?></strong></td>
</tr>
<tr>
<td width="100%" bgcolor="#F8F7F1"><?php echo $row['descr']; ?></td>
</tr>
<tr>
<td width="100%" bgcolor="#F8F7F1" align="right"><a href= "remove.php?detail=<?php  echo "sp".",".$row["sp_id"].",".$row["user_id"];?>" onClick="msg()"><img src="images/remove.jpg" alt="" border=3 height=30 width=30></img></a></td>
</tr>
</table></td>
</tr>
</table><br>
</div>
<br/>
<?php	   
 
		    
}//while
}//if
if($found ==-1)
{
?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<table width="1000"  >
<tr>
<td width="100%" align="center"><strong><?php echo "Not Founded" ?></strong></td>
</tr>
</table>
<?php
}//if found
mysqli_close($database);
	
	}
	
	else if($area != "Any Area" && $category=="Any Category")
	
	{
 		
    $found =-1;
$sql = "SELECT * FROM users CROSS JOIN serviceprovider WHERE users.user_id=serviceprovider.user_id and serviceprovider.area='$area' ";
$result = mysqli_query($database, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
	   ++$found;
	   		   ?>
<style type="text/css">
#ap<?php echo $found; ?>
{
	position:absolute;
	left:180px;
	top:<?php echo 200*$found?>px;
	width:750px;
	height:180px;
	z-index:2;
	border-radius: 20px;
	border-style:solid;
	border-width:2px;
	background-color:#F8F7F1;
	font-weight: bold;	
}

</style>
<div id="ap<?php echo $found; ?>">
<table width="700" height="100%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#F8F7F1" >
<tr>
<td><table width="100%" height="100%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#F8F7F1">
<tr>
<td width="100%" bgcolor="#F8F7F1"><table><tr>
<td width="10%" bgcolor="#F8F7F1" align="left"><img src="<?php
if($row['login_type']=='fb')
{
	echo $row['user_avatar'];
}
else
{
	echo "../".$row['user_avatar'];
}
?>" alt="" border=3 height=30 width=30></img></td>
<td width="75%"bgcolor="#F8F7F1" align="right"><a href= "../systemadmin/profile.php?user=<?php echo $row["user_id"];?>" target="_blank" >View Profile</a></td>
</tr></table></td>
</tr>
<tr>
<td width="100%" bgcolor="#F8F7F1"><strong><?php 
if($row['login_type']=='fb')
{
	echo $row['user_firstname']." || ".$row['area']." || ".$row['category']; 
}
else
{
	echo $row['user_name']." || ".$row['area']." || ".$row['category']; 
}
?></strong></td>
</tr>
<tr>
<td width="100%" bgcolor="#F8F7F1"><?php echo $row['descr']; ?></td>
</tr>
<tr>
<td width="100%" bgcolor="#F8F7F1" align="right"><a href= "remove.php?detail=<?php  echo "sp".",".$row["sp_id"].",".$row["user_id"];?>" onClick="msg()"><img src="images/remove.jpg" alt="" border=3 height=30 width=30></img></a></td>
</tr>
</table></td>
</tr>
</table><br>
</div>
<br/>
<?php	   
 
		    
}//while
}//if
if($found ==-1)
{
?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<table width="1000"  >
<tr>
<td width="100%" align="center"><strong><?php echo "Not Founded" ?></strong></td>
</tr>
</table>
<?php
}//if found
mysqli_close($database);
	
	}
	else if($area == "Any Area" && $category !="Any Category")
	
	{
 		
$found =-1;
$sql = "SELECT * FROM users CROSS JOIN serviceprovider WHERE users.user_id=serviceprovider.user_id and serviceprovider.category='$category' ";
$result = mysqli_query($database, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
	   ++$found;
	   		   ?>
<style type="text/css">
#ap<?php echo $found; ?>
{
	position:absolute;
	left:180px;
	top:<?php echo 200*$found?>px;
	width:750px;
	height:180px;
	z-index:2;
	border-radius: 20px;
	border-style:solid;
	border-width:2px;
	background-color:#F8F7F1;
	font-weight: bold;	
}

</style>
<div id="ap<?php echo $found; ?>">
<table width="700" height="100%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#F8F7F1" >
<tr>
<td><table width="100%" height="100%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#F8F7F1">
<tr>
<td width="100%" bgcolor="#F8F7F1"><table><tr>
<td width="10%" bgcolor="#F8F7F1" align="left"><img src="../<?php echo $row['user_avatar'];?>" alt="" border=3 height=30 width=30></img></td>
<td width="75%"bgcolor="#F8F7F1" align="right"><a href= "../systemadmin/profile.php?user=<?php echo $row["user_id"];?>" target="_blank" >View Profile</a></td>
</tr></table></td>
</tr>
<tr>
<td width="100%" bgcolor="#F8F7F1"><strong><?php 
if($row['login_type']=='fb')
{
	echo $row['user_firstname']." || ".$row['area']." || ".$row['category']; 
}
else
{
	echo $row['user_name']." || ".$row['area']." || ".$row['category']; 
}

?></strong></td>
</tr>
<tr>
<td width="100%" bgcolor="#F8F7F1"><?php echo $row['descr']; ?></td>
</tr>
<tr>
<td width="100%" bgcolor="#F8F7F1" align="right"><a href= "remove.php?detail=<?php  echo "sp".",".$row["sp_id"].",".$row["user_id"];?>" onClick="msg()"><img src="images/remove.jpg" alt="" border=3 height=30 width=30></img></a></td>
</tr>
</table></td>
</tr>
</table><br>
</div>
<br/>
<?php	   
 
		    
}//while
}//if
if($found ==-1)
{
?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<table width="1000"  >
<tr>
<td width="100%" align="center"><strong><?php echo "Not Founded" ?></strong></td>
</tr>
</table>
<?php
}//if found
mysqli_close($database);
	
	}
	else if($area != "Any Area" && $category !="Any Category")
	{
		$found =-1;
$sql = "SELECT * FROM users CROSS JOIN serviceprovider WHERE users.user_id=serviceprovider.user_id and serviceprovider.area='$area' and serviceprovider.category='$category'";
$result = mysqli_query($database, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
	   ++$found;
	   		   ?>
<style type="text/css">
#ap<?php echo $found; ?>
{
	position:absolute;
	left:180px;
	top:<?php echo 200*$found?>px;
	width:750px;
	height:180px;
	z-index:2;
	border-radius: 20px;
	border-style:solid;
	border-width:2px;
	background-color:#F8F7F1;
	font-weight: bold;	
}

</style>
<div id="ap<?php echo $found; ?>">
<table width="700" height="100%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#F8F7F1" >
<tr>
<td><table width="100%" height="100%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#F8F7F1">
<tr>
<td width="100%" bgcolor="#F8F7F1"><table><tr>
<td width="10%" bgcolor="#F8F7F1" align="left"><img src="../<?php echo $row['user_avatar'];?>" alt="" border=3 height=30 width=30></img></td>
<td width="75%"bgcolor="#F8F7F1" align="right"><a href= "../systemadmin/profile.php?user=<?php echo $row["user_id"];?>" target="_blank" >View Profile</a></td>
</tr></table></td>
</tr>
<tr>
<td width="100%" bgcolor="#F8F7F1"><strong><?php echo $row['user_name']." || ".$row['area']." || ".$row['category']; ?></strong></td>
</tr>
<tr>
<td width="100%" bgcolor="#F8F7F1"><?php echo $row['descr']; ?></td>
</tr>
<tr>
<td width="100%" bgcolor="#F8F7F1" align="right"><a href= "remove.php?detail=<?php  echo "sp".",".$row["sp_id"].",".$row["user_id"];?>" onClick="msg()"><img src="images/remove.jpg" alt="" border=3 height=30 width=30></img></a></td>
</tr>
</table></td>
</tr>
</table><br>
</div>
<br/>
<?php	   
 
		    
}//while
}//if
if($found ==-1)
{
?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<table width="1000"  >
<tr>
<td width="100%" align="center"><strong><?php echo "Not Founded" ?></strong></td>
</tr>
</table>
<?php
}//if found
mysqli_close($database);
	
		
	}
		
}
else
{
	if($area== "Any Area" && $category=="Any Category")
	{
		$sql = "SELECT * FROM users CROSS JOIN serviceprovider WHERE users.user_id=serviceprovider.user_id";
$result = mysqli_query($database, $sql);
$word = str_replace(' ','',$word);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
       $string = $row['user_name'].$row['category'].$row['area'];	   
	   $line = strtolower($string);
	   if(strpos($line,strtolower($word))>-1) 
	   {	++$found;
	   		   
	   		

?>
<style type="text/css">
#ap<?php echo $found; ?>
{
	position:absolute;
	left:180px;
	top:<?php echo 200*$found?>px;
	width:750px;
	height:180px;
	z-index:2;
	border-radius: 20px;
	border-style:solid;
	border-width:2px;
	background-color:#F8F7F1;
	font-weight: bold;	
}

</style>
<div id="ap<?php echo $found; ?>">
<table width="700" height="100%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#F8F7F1" >
<tr>
<td><table width="100%" height="100%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#F8F7F1">
<tr>
<td width="100%" bgcolor="#F8F7F1"><table><tr>
<td width="10%" bgcolor="#F8F7F1" align="left"><img src="../<?php echo $row['user_avatar'];?>" alt="" border=3 height=30 width=30></img></td>
<td width="75%"bgcolor="#F8F7F1" align="right"><a href= "../systemadmin/profile.php?user=<?php echo $row["user_id"];?>" target="_blank" >View Profile</a></td>
</tr></table></td>
</tr>
<tr>
<td width="100%" bgcolor="#F8F7F1"><strong><?php echo $row['user_name']." || ".$row['area']." || ".$row['category']; ?></strong></td>
</tr>
<tr>
<td width="100%" bgcolor="#F8F7F1"><?php echo $row['descr']; ?></td>
</tr>
<tr>
<td width="100%" bgcolor="#F8F7F1" align="right"><a href= "remove.php?detail=<?php  echo "sp".",".$row["sp_id"].",".$row["user_id"];?>" onClick="msg()"><img src="images/remove.jpg" alt="" border=3 height=30 width=30></img></a></td>
</tr>
</table></td>
</tr>
</table><br>
</div>
<br/>
<?php	   
 }//if
		    
}//while
}//if
if($found ==-1)
{
?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<table width="1000"  >
<tr>
<td width="100%" align="center"><strong><?php echo "Not Founded" ?></strong></td>
</tr>
</table>
<?php
}//if found
mysqli_close($database);
	}
	else if($area != "Any Area" && $category=="Any Category")
	{
		$sql = "SELECT * FROM users CROSS JOIN serviceprovider WHERE users.user_id=serviceprovider.user_id and serviceprovider.area='$area'";
$result = mysqli_query($database, $sql);
$word = str_replace(' ','',$word);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
       $string = $row['user_name'].$row['category'].$row['area'];	   
	   $line = strtolower($string);
	   if(strpos($line,strtolower($word))>-1) 
	   {	++$found;
	   		   
	   		

?>
<style type="text/css">
#ap<?php echo $found; ?>
{
	position:absolute;
	left:180px;
	top:<?php echo 200*$found?>px;
	width:750px;
	height:180px;
	z-index:2;
	border-radius: 20px;
	border-style:solid;
	border-width:2px;
	background-color:#F8F7F1;
	font-weight: bold;	
}

</style>
<div id="ap<?php echo $found; ?>">
<table width="700" height="100%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#F8F7F1" >
<tr>
<td><table width="100%" height="100%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#F8F7F1">
<tr>
<td width="100%" bgcolor="#F8F7F1"><table><tr>
<td width="10%" bgcolor="#F8F7F1" align="left"><img src="../<?php echo $row['user_avatar'];?>" alt="" border=3 height=30 width=30></img></td>
<td width="75%"bgcolor="#F8F7F1" align="right"><a href= "../systemadmin/profile.php?user=<?php echo $row["user_id"];?>" target="_blank" >View Profile</a></td>
</tr></table></td>
</tr>
<tr>
<td width="100%" bgcolor="#F8F7F1"><strong><?php echo $row['user_name']." || ".$row['area']." || ".$row['category']; ?></strong></td>
</tr>
<tr>
<td width="100%" bgcolor="#F8F7F1"><?php echo $row['descr']; ?></td>
</tr>
<tr>
<td width="100%" bgcolor="#F8F7F1" align="right"><a href= "remove.php?detail=<?php  echo "sp".",".$row["sp_id"].",".$row["user_id"];?>" onClick="msg()"><img src="images/remove.jpg" alt="" border=3 height=30 width=30></img></a></td>
</tr>
</table></td>
</tr>
</table><br>
</div>
<br/>
<?php	   
 }//if
		    
}//while
}//if
if($found ==-1)
{
?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<table width="1000"  >
<tr>
<td width="100%" align="center"><strong><?php echo "Not Founded" ?></strong></td>
</tr>
</table>
<?php
}//if found
mysqli_close($database);
	}
	else if($area == "Any Area" && $category !="Any Category")
	
	{
 		$sql = "SELECT * FROM users CROSS JOIN serviceprovider WHERE users.user_id=serviceprovider.user_id and serviceprovider.category='$category'";
$result = mysqli_query($database, $sql);
$word = str_replace(' ','',$word);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
       $string = $row['user_name'].$row['category'].$row['area'];	   
	   $line = strtolower($string);
	   if(strpos($line,strtolower($word))>-1) 
	   {	++$found;
	   		   
	   		

?>
<style type="text/css">
#ap<?php echo $found; ?>
{
	position:absolute;
	left:180px;
	top:<?php echo 200*$found?>px;
	width:750px;
	height:180px;
	z-index:2;
	border-radius: 20px;
	border-style:solid;
	border-width:2px;
	background-color:#F8F7F1;
	font-weight: bold;	
}

</style>
<div id="ap<?php echo $found; ?>">
<table width="700" height="100%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#F8F7F1" >
<tr>
<td><table width="100%" height="100%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#F8F7F1">
<tr>
<td width="100%" bgcolor="#F8F7F1"><table><tr>
<td width="10%" bgcolor="#F8F7F1" align="left"><img src="../<?php echo $row['user_avatar'];?>" alt="" border=3 height=30 width=30></img></td>
<td width="75%"bgcolor="#F8F7F1" align="right"><a href= "../systemadmin/profile.php?user=<?php echo $row["user_id"];?>" target="_blank" >View Profile</a></td>
</tr></table></td>
</tr>
<tr>
<td width="100%" bgcolor="#F8F7F1"><strong><?php echo $row['user_name']." || ".$row['area']." || ".$row['category']; ?></strong></td>
</tr>
<tr>
<td width="100%" bgcolor="#F8F7F1"><?php echo $row['descr']; ?></td>
</tr>
<tr>
<td width="100%" bgcolor="#F8F7F1" align="right"><a href= "remove.php?detail=<?php  echo "sp".",".$row["sp_id"].",".$row["user_id"];?>" onClick="msg()"><img src="images/remove.jpg" alt="" border=3 height=30 width=30></img></a></td>
</tr>
</table></td>
</tr>
</table><br>
</div>
<br/>
<?php	   
 }//if
		    
}//while
}//if
if($found ==-1)
{
?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<table width="1000"  >
<tr>
<td width="100%" align="center"><strong><?php echo "Not Founded" ?></strong></td>
</tr>
</table>
<?php
}//if found
mysqli_close($database);
   
	}
	else if($area != "Any Area" && $category !="Any Category")
	{
		$sql = "SELECT * FROM users CROSS JOIN serviceprovider WHERE users.user_id=serviceprovider.user_id and serviceprovider.area='$area' and serviceprovider.category='$category'";
$result = mysqli_query($database, $sql);
$word = str_replace(' ','',$word);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
       $string = $row['user_name'].$row['category'].$row['area'];	   
	   $line = strtolower($string);
	   if(strpos($line,strtolower($word))>-1) 
	   {	++$found;
	   		   
	   		

?>
<style type="text/css">
#ap<?php echo $found; ?>
{
	position:absolute;
	left:180px;
	top:<?php echo 200*$found?>px;
	width:750px;
	height:180px;
	z-index:2;
	border-radius: 20px;
	border-style:solid;
	border-width:2px;
	background-color:#F8F7F1;
	font-weight: bold;	
}

</style>
<div id="ap<?php echo $found; ?>">
<table width="700" height="100%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#F8F7F1" >
<tr>
<td><table width="100%" height="100%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#F8F7F1">
<tr>
<td width="100%" bgcolor="#F8F7F1"><table><tr>
<td width="10%" bgcolor="#F8F7F1" align="left"><img src="../<?php echo $row['user_avatar'];?>" alt="" border=3 height=30 width=30></img></td>
<td width="75%"bgcolor="#F8F7F1" align="right"><a href= "../systemadmin/profile.php?user=<?php echo $row["user_id"];?>" target="_blank" >View Profile</a></td>
</tr></table></td>
</tr>
<tr>
<td width="100%" bgcolor="#F8F7F1"><strong><?php echo $row['user_name']." || ".$row['area']." || ".$row['category']; ?></strong></td>
</tr>
<tr>
<td width="100%" bgcolor="#F8F7F1"><?php echo $row['descr']; ?></td>
</tr>
<tr>
<td width="100%" bgcolor="#F8F7F1" align="right"><a href= "remove.php?detail=<?php  echo "sp".",".$row["sp_id"].",".$row["user_id"];?>" onClick="msg()"><img src="images/remove.jpg" alt="" border=3 height=30 width=30></img></a></td>
</tr>
</table></td>
</tr>
</table><br>
</div>
<br/>
<?php	   
 }//if
		    
}//while
}//if
if($found ==-1)
{
?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<table width="1000"  >
<tr>
<td width="100%" align="center"><strong><?php echo "Not Founded" ?></strong></td>
</tr>
</table>
<?php
}//if found
mysqli_close($database);
	}
}
}
else
{

$found =-1;
$sql = "SELECT * FROM users CROSS JOIN serviceprovider WHERE users.user_id=serviceprovider.user_id";
$result = mysqli_query($database, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
	   ++$found;
	   		   ?>
<style type="text/css">
#ap<?php echo $found; ?>
{
	position:absolute;
	left:180px;
	top:<?php echo 200*$found?>px;
	width:750px;
	height:180px;
	z-index:2;
	border-radius: 20px;
	border-style:solid;
	border-width:2px;
	background-color:#F8F7F1;
	font-weight: bold;	
}

</style>
<div id="ap<?php echo $found; ?>">
<table width="700" height="100%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#F8F7F1" >
<tr>
<td><table width="100%" height="100%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#F8F7F1">
<tr>
<td width="100%" bgcolor="#F8F7F1"><table><tr>
<td width="10%" bgcolor="#F8F7F1" align="left"><img src="../<?php echo $row['user_avatar'];?>" alt="" border=3 height=30 width=30></img></td>
<td width="75%"bgcolor="#F8F7F1" align="right"><a href= "../systemadmin/profile.php?user=<?php echo $row["user_id"];?>" target="_blank" >View Profile</a></td>
</tr></table></td>
</tr>
<tr>
<td width="100%" bgcolor="#F8F7F1"><strong><?php echo $row['user_name']." || ".$row['area']." || ".$row['category']; ?></strong></td>
</tr>
<tr>
<td width="100%" bgcolor="#F8F7F1"><?php echo $row['descr']; ?></td>
</tr>
<tr>
<td width="100%" bgcolor="#F8F7F1" align="right"><a href= "remove.php?detail=<?php  echo "sp".",".$row["sp_id"].",".$row["user_id"];?>" onClick="msg()"><img src="images/remove.jpg" alt="" border=3 height=30 width=30></img></a></td>
</tr>
</table></td>
</tr>
</table><br>
</div>
<br/>
<?php	   
 
		    
}//while
}//if
if($found ==-1)
{
?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<table width="1000"  >
<tr>
<td width="100%" align="center"><strong><?php echo "Not Founded" ?></strong></td>
</tr>
</table>
<?php
}//if found
}

?>
</div>
<style>
#publish {
	position:absolute;
	left:0px;
	top:200px;
	min-height:<?php echo 400 + 200*$found?>px;
	width:100%;
	z-index:2;
	background-color: rgba(192,192,192,1);
	font-weight: bold;
}
</style>
</body>

</div>

