<?php include 'header.php'; ?> 
<?php include "../_database/database.php"; ?>
<?php include "common.php" ;?>
<link rel="stylesheet" type="text/css" href="css/forum.css" >

<div id='show1'>
<style type="text/css">
#apDiv1 {
	position:absolute;
	top:20px;
	width:500px;
	height:60px;
	z-index:16;
	background-color: #CCCCCC;
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
	left: 350px;
	top: 7px;
	width: 118px;
	background: #787878;
    background-image: -webkit-linear-gradient(top, #787878, #4e5a61);
  background-image: -moz-linear-gradient(top, #787878, #4e5a61);
  background-image: -ms-linear-gradient(top, #787878, #4e5a61);
  background-image: -o-linear-gradient(top, #787878, #4e5a61);
  background-image: linear-gradient(to bottom, #787878, #4e5a61);
	height: 27px;
	color:#FFF;
	font-weight: bold;
	font-size: 12px;
	
}
.searchbtton:hover{
 background: #000000;
  background-image: -webkit-linear-gradient(top, #000000, #000000);
  background-image: -moz-linear-gradient(top, #000000, #000000);
  background-image: -ms-linear-gradient(top, #000000, #000000);
  background-image: -o-linear-gradient(top, #000000, #000000);
  background-image: linear-gradient(to bottom, #000000, #000000);
  text-decoration: none;
  cursor:hand;
}

.notfound {
	background-color: rgba(192,192,192,1);	
	position: absolute;
	top: 100px;
	width:100%;
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
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if ( isset( $_POST['button'] ))
{
$tbl_name="fquestions"; 
$colorchange=0;
$bgcolor="";
$found =0;
$sql = "SELECT * FROM $tbl_name ORDER BY id DESC";;
$result = mysqli_query($database, $sql);
$word =stripslashes($_POST['textfield']);
$word = str_replace(' ','',$word);
?>
<div id="apDiv1">
<div id="apDiv2">
  <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <p>
      <label for="textfield"></label>
      <input name="textfield" type="text" class="searchtext" id="textfield" required>
      <input name="button" type="submit" class="searchbtton" id="button" value="SEARCH">
    <p>&nbsp;</p>
  </form>
</div>
</div>
<div class="createtabel">
<table border="0" bordercolor="#666666">
<tr>
<td>
<table width="1100" height="107" align="center" cellpadding="3" cellspacing="0" border="0" >
<tr >
<td width="10%" align="center" bgcolor="#999"><strong>Remove</strong></td>
<td width="35%" align="center" bgcolor="#999"><strong>Discussion</strong></td>
<td width="15%" align="center" bgcolor="#999"><strong>Started by</strong></td>
<td width="15%" align="center" bgcolor="#999"><strong>Views</strong></td>
<td width="15%" align="center" bgcolor="#999"><strong>Replies</strong></td>
<td width="10%" align="center" bgcolor="#999"><strong>Date/Time</strong></td>
</tr>
<?php
//forum topic searching function
if (mysqli_num_rows($result) > 0) {
while($rows = mysqli_fetch_assoc($result)) {
       $string = $rows["topic"];
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
<td bgcolor="<?php echo $bgcolor?>" align="center"><a href= "remove.php?detail=<?php  echo "forum".",".$rows['id'];?>" onClick="msg()"><img src="images/rm.jpg" alt="" border=3 height=30 width=30></img></a></td>
<td bgcolor="<?php echo $bgcolor?>" align="left" ><a href="view_topic.php?id=<?php echo $rows['id']; ?>" target="_blank"><strong><?php echo $rows['topic']; ?></strong></a><BR></td>
<td bgcolor="<?php echo $bgcolor?>">
<table align="center" border="0" width="100%" height="100%" bgcolor="<?php echo $bgcolor?>">
<tr>
<td align="left" bgcolor="<?php echo $bgcolor	?>" width ="50%" height="100%"><?php echo $rows['user'];?></td>
</tr>
</table>
</td>
<td align="center" bgcolor="<?php echo $bgcolor	?>"><?php echo $rows['view']; ?></td>
<td align="center" bgcolor="<?php echo $bgcolor	?>"><?php echo $rows['reply']; ?></td>
<td align="center" bgcolor="<?php echo $bgcolor	?>"><?php echo $rows['datetime']; ?></td>
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
<table width="1000" bgcolor:"#cccccc">
<tr>
<td width="100%" align="center" bgcolor:"#cccccc"><strong>Not Founded</strong></td>
</tr>
</table>
</div>
<?php
}

mysqli_close($database);

}
}
else{
	//print forum table
$tbl_name="fquestions"; // Table name 
 
$sql="SELECT * FROM $tbl_name ORDER BY id DESC";
// OREDER BY id DESC is order result by descending
 
$result=mysqli_query($database,$sql);
$colorchange=0;
$bgcolor="";
?>
<div class="createtabel">
<table >
<tr>
<td>
<table width="1100" height="107" align="center" cellpadding="3"  cellspacing="0"  >
<tr>
<td width="10%" align="center" bgcolor="#999"><strong>Remove</strong></td>
<td width="35%" align="center" bgcolor="#999"><strong>Discussion</strong></td>
<td width="15%" align="center" bgcolor="#999"><strong>Started by</strong></td>
<td width="15%" align="center" bgcolor="#999"><strong>Views</strong></td>
<td width="15%" align="center" bgcolor="#999"><strong>Replies</strong></td>
<td width="10%" align="center" bgcolor="#999"><strong>Date/Time</strong></td>
</tr>
 
<?php
 
// Start looping table row
while($rows = mysqli_fetch_array($result)){
	$colorchange=$colorchange+1;
	if($colorchange%2==1)
	{
		$bgcolor="#fff";
	}
	else
	{
		$bgcolor="#EEE";}
?>
<tr>
<td bgcolor="<?php echo $bgcolor?>" align="center"><a href= "remove.php?detail=<?php  echo "forum".",".$rows['id'];?>" onClick="msg()"><img src="images/rm.jpg" alt="" border=3 height=30 width=30></img></a></td>
<td bgcolor="<?php echo $bgcolor?>" align="left" ><a href="view_topic.php?id=<?php echo $rows['id']; ?>" target="_blank" ><strong><?php echo $rows['topic']; ?></strong></a><BR></td>
<td bgcolor="<?php echo $bgcolor?>">
<table align="center" border="0" width="100%" height="100%" bgcolor="<?php echo $bgcolor?>">
<tr>
<td align="left" bgcolor="<?php echo $bgcolor	?>" width ="50%" height="100%"><?php echo $rows['user'];?></td>
</tr>
</table>
</td>
<td align="center" bgcolor="<?php echo $bgcolor	?>"><?php echo $rows['view']; ?></td>
<td align="center" bgcolor="<?php echo $bgcolor	?>"><?php echo $rows['reply']; ?></td>
<td align="center" bgcolor="<?php echo $bgcolor	?>"><?php echo $rows['datetime']; ?></td>
</tr>
 
<?php
// Exit looping and close connection 
}
mysqli_close($database);
?>
</table>
</td>
</tr>
</table>
</div>
<div id="apDiv1">
<div id="apDiv2">
  <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <p>
      <label for="textfield"></label>
      <input name="textfield" type="text" class="searchtext" id="textfield" required>
      <input name="button" type="submit" class="searchbtton" id="button" value="SEARCH">
 </p>
    <p>&nbsp;</p>
  </form>
</div>
</div>
<?php
}
?>
</body>
</div>
<style>
#show1{
	position:absolute;
	left:212px;
	top:79px;
	width:85%;
	height:<?php echo 200+($colorchange+1)*55; ?>;
	z-index:2;
	background-color: rgba(192,192,192,1);	
}
</style>