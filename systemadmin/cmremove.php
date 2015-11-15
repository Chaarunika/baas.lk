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
	left:-3px;
	top:-86px;
	width:560px;
	height:80px;
	z-index:2;
	border-radius: 20px;
	background-color:#CCC;
	font-weight: bold;
}
#publish {
	position:absolute;
	left:28px;
	top:151px;
	width:100%;
	height:1300px;
	z-index:2;
	font-weight: bold;
}
.searchtext {
	position: absolute;
	border-width:3px;
	border-style: inset;
	background-color:#000;
	left: 96px;
	font-size:16px;
	font-family:"Arial Black", Gadget, sans-serif;
	top: 11px;
	width: 319px;
	height: 33px;
}
.searchtext:focus{
	color:#FFF;
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
<body bgcolor="#f2f2f2">
<div id="apDiv1">
<div id="apDiv2">
  <form id="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?> ">
    <p>SEARCH CM</p>
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
$word = str_replace(' ','',$word);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
       $string = $row['user_name'].$row['area'];	   
	   $line = strtolower($string);
	   if(strpos($line,strtolower($word))>-1) 
	   {	++$found;
	   		   
	   		

?>
<style type="text/css">
#ap<?php echo $found; ?>
{
	position:absolute;
	left:180px;
	top:<?php echo 190*$found?>px;
	width:1000px;
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
<table width="950" height="100%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#F8F7F1" >
<tr>
<td><table width="100%" height="100%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#F8F7F1">
<tr><td width="100%" bgcolor="#F8F7F1"><table><tr>
<td width="25%" bgcolor="#F8F7F1"><img src="\BAAS_LK\<?php echo $row['user_avatar'];?>" alt="" border=3 height=30 width=30></img></td>
<td width="75%"bgcolor="#F8F7F1" align="right"><a href= "/BAAS_LK/systemadmin/profileCustomer.php?user=<?php echo $row["user_id"];?>" target="_blank" >View Profile</a></td>
</tr>
</table>
</td>
<tr>
<td width="75%" bgcolor="#F8F7F1"><strong><?php echo $row['user_name']." || ".$row['area']; ?></strong></td>
</tr>
<tr>
<td width="75%" bgcolor="#F8F7F1" align="right"><a href= "remove.php?detail=<?php  echo "customer".",".$row["customer_id"].",".$row["user_id"];?>" onClick="msg()"><img src="images/remove.jpg" alt="" border=3 height=50 width=50></img></a></td>
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
mysqli_close($conn);
}
?>
</div>
</body>
