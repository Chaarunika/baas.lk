<?php include "header.php" ;?>
<?php include '../_database/database.php'; ?>
<?php include "common.php" ;?>

<div id='show1'>
<style type="text/css">
#capDiv1 {
	position:absolute;
	top:20px;
	width:500px;
	height:60px;
	z-index:16;
	background-color: #CCCCCC;
	left: 509px;
}
#capDiv2 {
	position:absolute;
	left:0px;
	top:7px;
	width:500px;
	height:51px;
	z-index:17;
	background-color: #CCCCCC;
}
#cpublish {
	position:absolute;
	left:28px;
	top:151px;
	width:100%;
	height:1300px;
	z-index:2;
	font-weight: bold;
}
.csearchtext {
	position: absolute;
	border-width:3px;
	border-style: inset;
	background-color:#fff;
	left: 13px;
	font-size:14px;
	font-family:"Arial Black", Gadget, sans-serif;
	top: 6px;
	width: 319px;
	height: 28px;
}
.csearchtext:focus{
	color:#000;
}
.csearchbutton {
	position: absolute;
	left: 350px;
	top: 7px;
	width: 118px;
	background-color: #FF9900;
	height: 27px;
	font-weight: bold;
	font-size: 12px;
	
}
</style><body>
<div id="capDiv1">
<div id="capDiv2">
  <form id="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?> ">
    <p>&nbsp;</p>
    <p>
      <label for="textfield"></label>
      <input name="ctextfield" type="text" class="csearchtext" id="ctextfield" required/>
      <input name="cbutton" type="submit" class="csearchbutton" id="cbutton" value="SEARCH" />
    </p>
  </form>
</div>
</div>
<div id="cpublish">
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
if ( isset($_POST['cbutton']))
{
$cfound =0;
$sql = "SELECT * FROM users CROSS JOIN customer WHERE users.user_id=customer.user_id";
$result = mysqli_query($database, $sql);
$word =stripslashes($_POST['ctextfield']);
$word = str_replace(' ','',$word);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
       $string = $row['user_name'].$row['area'];	   
	   $line = strtolower($string);
	   if(strpos($line,strtolower($word))>-1) 
	   {	++$cfound;
	   		   
	   		

?>
<style type="text/css">
#ap<?php echo $cfound; ?>
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
<div id="ap<?php echo $cfound; ?>">
<table width="95%" height="100%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#F8F7F1" >
<tr>
<td><table width="100%" height="100%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#F8F7F1">
<tr><td width="100%" bgcolor="#F8F7F1"><table><tr>
<td width="25%" bgcolor="#F8F7F1"><img src="..\<?php echo $row['user_avatar'];?>" alt="" border=2 height=30 width=30></img></td>
<td width="75%"bgcolor="#F8F7F1" align="right"><a href= "profileCustomer.php?user=<?php echo $row["user_id"];?>" target="_blank" >View Profile</a></td>
</tr>
</table>
</td>
<tr>
<td width="75%" bgcolor="#F8F7F1"><strong><?php echo $row['user_name']." || ".$row['area']; ?></strong></td>
</tr>
<tr>
<td width="75%" bgcolor="#F8F7F1" align="right"><a href= "remove.php?detail=<?php  echo "customer".",".$row["customer_id"].",".$row["user_id"];?>" onClick="msg()"><img src="images/remove.jpg" alt="" border=2 height=30 width=30></img></a></td>
</tr>
</table></td>
</tr>
</table><br>
</div>
<?php	   
 }//if
		    
}//while
}//if
if($cfound == 0)
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
else{
$cfound =0;
$sql = "SELECT * FROM users CROSS JOIN customer WHERE users.user_id=customer.user_id";
$result = mysqli_query($database, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      	  	++$cfound;
	   		   
?>
<style type="text/css">
#ap<?php echo $cfound; ?>
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

</style>

<div id="ap<?php echo $cfound; ?>">
<table width="95%" height="100%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#F8F7F1" >
<tr>
<td><table width="100%" height="100%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#F8F7F1">
<tr><td width="100%" bgcolor="#F8F7F1"><table><tr>
<td width="25%" bgcolor="#F8F7F1"><img src="..\<?php echo $row['user_avatar'];?>" alt="" border=2 height=30 width=30></img></td>
<td width="75%"bgcolor="#F8F7F1" align="right"><a href= "profileCustomer.php?user=<?php echo $row["user_id"];?>" target="_blank" >View Profile</a></td>
</tr>
</table>
</td>
<tr>
<td width="75%" bgcolor="#F8F7F1"><strong><?php echo $row['user_name']." || ".$row['area']; ?></strong></td>
</tr>
<tr>
<td width="75%" bgcolor="#F8F7F1" align="right"><a href= "remove.php?detail=<?php  echo "customer".",".$row["customer_id"].",".$row["user_id"];?>" onClick="msg()"><img src="images/remove.jpg" alt="" border=2 height=30 width=30></img></a></td>
</tr>
</table></td>
</tr>
</table><br>
</div>
<?php	   
		    
}//while
}//if
if($cfound == 0)
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
?>
</div>
</body>
</div>

<style>
#show1{
	position:absolute;
	left:212px;
	top:79px;
	width:85%;
	height:<?php echo 140+ ($cfound+1)*180 ;?>;
	z-index:2;
	background-color: rgba(192,192,192,1);	
}
</style>