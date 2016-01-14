<?php include "header.php"; ?>
<?php include "common.php" ;?>
<?php include "../_database/database.php"; ?>
<!-- view job function -->
<div id='show1'>
<style type="text/css">
#apDiv1 {
	position:absolute;
	top:20px;
	width:500px;
	height:60px;
	z-index:16;
	background-color: #CCCCCC;
	border-radius: 20px;
	left: 509px;
}
#apDiv2 {
	position:absolute;
	left:0px;
	top:7px;
	width:500px;
	height:51px;
	z-index:17;
	background-color: #CCCCCC;
	border-radius:20px;
}
.searchtext {
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
.searchtext:focus{
	color:#000;
}
.searchbtton {
	position: absolute;
	left: 450px;
	top: 7px;
	width: 118px;
	background-color: #FC0;
	height: 27px;
	
}
.createtabel {
	position: absolute;
	left: 20px;
	top: 70px;
	width: 1182px;
	height: 140px;
	z-index: 15;
}

.notfound {
	background-color: #f2f2f2;
	position: absolute;
	left: 321px;
	top: 246px;
	width: 1071px;
	height: 169px;
	z-index: 100;
}
</style>

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
</head>



<body>
<!--
<div id="apDiv1">
<div id="apDiv2">


  <form id="form1" name="form1" method="post" action="">
    
    <p>
      <label for="textfield"></label>
      <input name="textfield" type="text" class="searchtext" id="textfield" required/>
      <input name="button" type="submit" class="searchbutton" id="button" value="SEARCH" />
    </p>
       <p>&nbsp;</p>
  </form>
</div>
</div>
-->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if ( isset( $_POST['button'] ))
{


$tbl_name="postjob2"; 
$colorchange=0;
$bgcolor="";


$found =0;
$sql = "SELECT * FROM $tbl_name ORDER BY job_id ";;
$result = mysqli_query($database, $sql);
$word =stripslashes($_POST['textfield']);
$word = str_replace(' ','',$word);
?>

<div class="createtabel">
<table border="0" bordercolor="#666666">
<tr>
<td>
<table width="1200" height="107" align="center" cellpadding="3" cellspacing="0" border="0" >
<tr >
<td width="8%"  align="center" bgcolor="#999"><strong>Remove</strong></td>
<td width="8%"  align="center" bgcolor="#999"><strong>Date/Time</strong></td>
<td width="10%"  align="center" bgcolor="#999"><strong>Job Type</strong></td>
<td width="30%"  align="center" bgcolor="#999"><strong>Description</strong></td>
<td width="9%"  align="center" bgcolor="#999"><strong>CName</strong></td>
<td width="7%"  align="center" bgcolor="#999"><strong>Area</strong></td>
<td width="20%"  align="center" bgcolor="#999"><strong>Address</strong></td>
<td width="8%"  align="center" bgcolor="#999"><strong>Tele.NO</strong></td>

</tr>

<?php
if (mysqli_num_rows($result) > 0) {
while($rows = mysqli_fetch_assoc($result)) {
       $string = $rows["job_type"].$rows["area"];
	   $string = str_replace(' ','',$string);
	   $string = strtolower($string);
	   if(strpos($string,strtolower($word))>-1) 
	   {	$found++;
		   $colorchange=$colorchange+1;
	if($colorchange%2==1)
	{
		$bgcolor="#fff";
	}
	else
	{
		$bgcolor="#EEE";
	}
?>
<tr>
<td bgcolor="<?php echo $bgcolor?>" align="center"><a href= "remove.php?detail=<?php  echo "job".",".$rows['job_id'];?>" onClick="msg()"><img src="images/rm.jpg" alt="" border=3 height=30 width=30></img></a></td>
<td bgcolor="<?php echo $bgcolor?>" align="left" ><strong><?php echo $rows['time']; ?></strong></a><BR></td>
<td align="center" bgcolor="<?php echo $bgcolor	?>"><?php echo $rows['job_type']; ?></td>
<td align="center" bgcolor="<?php echo $bgcolor	?>"><?php echo $rows['job_description']; ?></td>
<td align="center" bgcolor="<?php echo $bgcolor	?>"><?php echo $rows['username']; ?></td>
<td align="center" bgcolor="<?php echo $bgcolor	?>"><?php echo $rows['area']; ?></td>
<td align="center" bgcolor="<?php echo $bgcolor	?>"><?php echo $rows['address']; ?></td>
<td align="center" bgcolor="<?php echo $bgcolor	?>"><?php echo $rows['tel_num']; ?></td>
</tr>
	
 <?php       		   
 }
		    

}
}
?>
</table>
</td>
</tr>
</table>
</div>

<?php

if($found == 0)
{
?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="notfound">
<table width="1000" bgcolor:"#fff">
<tr>
<td width="100%" align="center" bgcolor:"#cccccc"><strong>Not Founded</strong></td>
</tr>
</table>
</div>
<?php
}
mysqli_close($database);
}}
else
{

$tbl_name="postjob2"; 
$colorchange=0;
$bgcolor="";


$found =0;
$sql = "SELECT * FROM $tbl_name ORDER BY job_id ";;
$result = mysqli_query($database, $sql);

?>

<div class="createtabel">
<table border="0" bordercolor="#666666">
<tr>
<td>
<table width="1100" height="107" align="center" cellpadding="3" cellspacing="0" border="0" >
<tr >
<td width="8%"  align="center" bgcolor="#999"><strong>Remove</strong></td>
<td width="8%"  align="center" bgcolor="#999"><strong>Date/Time</strong></td>
<td width="10%"  align="center" bgcolor="#999"><strong>Job Type</strong></td>
<td width="30%"  align="center" bgcolor="#999"><strong>Description</strong></td>
<td width="9%"  align="center" bgcolor="#999"><strong>CName</strong></td>
<td width="7%"  align="center" bgcolor="#999"><strong>Area</strong></td>
<td width="20%"  align="center" bgcolor="#999"><strong>Address</strong></td>
<td width="8%"  align="center" bgcolor="#999"><strong>Tele.NO</strong></td>

</tr>

<?php
if (mysqli_num_rows($result) > 0) {
while($rows = mysqli_fetch_assoc($result)) {
       		$found++;
		   $colorchange=$colorchange+1;
	if($colorchange%2==1)
	{
		$bgcolor="#fff";
	}
	else
	{
		$bgcolor="#EEE";
	}
?>
<tr>
<td bgcolor="<?php echo $bgcolor?>" align="center"><a href= "remove.php?detail=<?php  echo "job".",".$rows['job_id'];?>" onClick="msg()"><img src="images/rm.jpg" alt="" border=3 height=30 width=30></img></a></td>
<td bgcolor="<?php echo $bgcolor?>" align="left" ><strong><?php echo $rows['time']; ?></strong></a><BR></td>
<td align="center" bgcolor="<?php echo $bgcolor	?>"><?php echo $rows['job_type']; ?></td>
<td align="center" bgcolor="<?php echo $bgcolor	?>"><?php echo $rows['job_description']; ?></td>
<td align="center" bgcolor="<?php echo $bgcolor	?>"><?php echo $rows['username']; ?></td>
<td align="center" bgcolor="<?php echo $bgcolor	?>"><?php echo $rows['area']; ?></td>
<td align="center" bgcolor="<?php echo $bgcolor	?>"><?php echo $rows['address']; ?></td>
<td align="center" bgcolor="<?php echo $bgcolor	?>"><?php echo $rows['tel_num']; ?></td>
</tr>
	
 <?php       		   
 }
		    
}
}

?>
</table>
</td>
</tr>
</table>
</div>

<?php

if($found == 0)
{
?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="notfound">
<table width="1000" bgcolor:"#fff">
<tr>
<td width="100%" align="center" bgcolor:"#cccccc"><strong>Not Founded</strong></td>
</tr>
</table>
</div>
<?php
}
mysqli_close($database);
?>
</div>
<style>
#show1{
	position:absolute;
	left:212px;
	top:79px;
	width:85%;
	height:<?php echo 100+($colorchange+1)*50 ; ?>;
	z-index:2;
	background-color: rgba(192,192,192,1);	
}
</style>
