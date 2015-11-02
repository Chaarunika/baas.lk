<?php include "header.php"; ?>
<style type="text/css">
#apDiv1 {
	position:absolute;
	left:3px;
	top:200px;
	width:100%;
	height:81px;
	z-index:1;
}
#apDiv2 {
	position:absolute;
	left:239px;
	top:-30px;
	width:770px;
	height:100px;
	z-index:2;
	border-radius: 20px;
	background-color:#CCC;
	font-weight: bold;
}
#publish {
	position:absolute;
	left:12px;
	top:203px;
	width:100%;
	height:1300px;
	z-index:2;
	font-weight: bold;
}
.searchtext {
	position: absolute;
	left: 96px;
	top: 11px;
	width: 319px;
	height: 33px;
}
.searchbutton {
	position: absolute;
	left: 438px;
	top: 12px;
	width: 103px;
	height: 30px;
	background-color: #FF9900;
	font-weight: bold;
	font-size: 16px;
	border-radius: 20px;
}
</style>
<div id="apDiv1">
<div id="apDiv2">
  <form id="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?> ">
    <p>SEARCH SP</p>
    <p>
      <label for="textfield"></label>
      <input name="textfield" type="text" class="searchtext" id="textfield" required/>
      <input name="button" type="submit" class="searchbutton" id="button" value="SEARCH" />
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
include 'dbconnect.php';
$found =0;
$sql = "SELECT * FROM users CROSS JOIN customer WHERE users.user_id=customer.user_id";
$result = mysqli_query($conn, $sql);
$word =mysql_real_escape_string(stripslashes($_POST['textfield']));
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
       $string = $row['user_name'];	   
	   $line = strtolower($string);
	   if(strpos($line,strtolower($word))>-1) 
	   {	++$found;
	   		   
	   		

?>
<style type="text/css">
#ap<?php echo $found; ?>
{
	position:absolute;
	left:100px;
	top:<?php echo 190*$found?>px;
	width:1000px;
	height:180px;
	z-index:2;
	border-radius: 20px;
	background-color:#CCC;
	font-weight: bold;	
}
</style>
<div id="ap<?php echo $found; ?>">
<table width="950" height="100%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC" >
<tr>
<td><table width="100%" height="100%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td width="25%" bgcolor="#F8F7F1"><img src="\BAAS_LK\<?php echo $row['user_avatar'];?>" alt="" border=3 height=30 width=30></img></td>
<td width="75%"bgcolor="#F8F7F1" align="left"><a href= "/BAAS_LK/systemadmin/profileCustomer.php?user=<?php echo $row["user_id"];?>" target="_blank" >View Profile</a></td>
</tr>
<tr>
<td width="75%" bgcolor="#F8F7F1"><strong><?php echo $row['user_name']." || ".$row['area']; ?></strong></td>
</tr>
<tr>
<td width="75%" bgcolor="#F8F7F1" align="right"><a href= "remove.php?detail=<?php  echo "customer".",".$row["customer_id"].",".$row["user_id"];?>" onclick="msg()"><img src="images/remove.jpg" alt="" border=3 height=50 width=50></img></a></td>
</tr>
</table></td>
</tr>
</table><br>
</div>
<?php	   
 }//if
		    
}//while
}//if
if($found == 0)
{
?>
<table width="300" >
<tr>
<td width="100%"><?php echo "Not Founded" ?></td>
</tr>
</table>
<?php
}//if found
mysqli_close($conn);
}
?>
</div>


