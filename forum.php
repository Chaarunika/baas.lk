<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="css/header.css">
<meta charset="UTF-8">
<title>baas.lk</title>
<style type="text/css">
@import "http://fonts.googleapis.com/css?family=Fauna+One|Muli";
#apDiv1 {
	position:absolute;
	top:90px;
	left:5px;
	width:516px;
	height:60px;
	z-index:16;
	background: #bdbdbd;
  background-image: -webkit-linear-gradient(top, #bdbdbd, #bdbdbd);
  background-image: -moz-linear-gradient(top, #bdbdbd, #bdbdbd);
  background-image: -ms-linear-gradient(top, #bdbdbd, #bdbdbd);
  background-image: -o-linear-gradient(top, #bdbdbd, #bdbdbd);
  background-image: linear-gradient(to bottom, #bdbdbd, #bdbdbd);
	border-radius: 5px;
}

table{
	font-size:14px;
	font-family:'Fauna One',serif
}
.createtabel {
	position: absolute;
	left: 10px;
	top: 200px;
	width: 70%;
	height: 140px;
	z-index: 15;
}

.notfound {
	background-color: #fff;
	position: absolute;
	left: 3px;
	top:1px;
	width: 900px;
	height: 120px;
	z-index: 2;
}
#apDiv2 {
	position:absolute;
	right:5px;
	top:16px;
	width:480px;
	height:62px;
	z-index:17;
	border-radius:20px;
	
}
.searchtext {
	position: absolute;
	border-width:3px;
	border-style: inset;
	background-color:#fff;
	left: 8px;
	font-size:15px;
	font-family: 'Fauna One',serif;
	top: 1px;
	width: 319px;
	height: 20px;
}
.searchtext:focus{
	color:#000;
}
#searchbtton {
	position: absolute;
	left: 354px;
	top: 1px;
	width: 118px;
	font-family:'Fauna One',serif;
/*	background: #dae2f0;
  background-image: -webkit-linear-gradient(top, #dae2f0, #999999);
  background-image: -moz-linear-gradient(top, #dae2f0, #999999);
  background-image: -ms-linear-gradient(top, #dae2f0, #999999);
  background-image: -o-linear-gradient(top, #dae2f0, #999999);
  background-image: linear-gradient(to bottom, #dae2f0, #999999);

	height: 33px;
	border-style:outset;
	border-width:3px;
	cursor:hand;
	font-weight: bold;
	color:#fff;
*/	 
}
/*
#searchbtton:hover{
	
 background: #000000;
  background-image: -webkit-linear-gradient(top, #000000, #000000);
  background-image: -moz-linear-gradient(top, #000000, #000000);
  background-image: -ms-linear-gradient(top, #000000, #000000);
  background-image: -o-linear-gradient(top, #000000, #000000);
  background-image: linear-gradient(to bottom, #000000, #000000);
  text-decoration: none;
 
}
*/
#newdiscuss
 {
  background: #74787a;
  background-image: -webkit-linear-gradient(top, #74787a, #2a3033);
  background-image: -moz-linear-gradient(top, #74787a, #2a3033);
  background-image: -ms-linear-gradient(top, #74787a, #2a3033);
  background-image: -o-linear-gradient(top, #74787a, #2a3033);
  background-image: linear-gradient(to bottom, #74787a, #2a3033);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  font-family: 'Fauna One',serif;
  color: #ffffff;
  font-size: 14px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
}

#newdiscuss:hover {
  background: #000000;
  background-image: -webkit-linear-gradient(top, #000000, #212629);
  background-image: -moz-linear-gradient(top, #000000, #212629);
  background-image: -ms-linear-gradient(top, #000000, #212629);
  background-image: -o-linear-gradient(top, #000000, #212629);
  background-image: linear-gradient(to bottom, #000000, #212629);
  text-decoration: none;
}

#apDivQuestionBox {
	position: absolute;
	left: 70%;
	top: 200px;
	width: 29%;
	height: 350px;
	z-index: 1;
	background-color: #f0f0f0;
	border-radius: 5px;
	border:1px solid rgba(51,51,51,0.5);
}
#apDivQuestionTitle {
	position: absolute;
	left: 16px;
	top: 18px;
	width: 350px;
	z-index: 2;
}

#apDivQustionForum {
	position: absolute;
	left: 19px;
	top: 60px;
	width: 100%;
	height: 147px;
	z-index: 2;
}
.post{
width:100%;
height:40px;
margin-top:15px;
margin-bottom:15px;
background-color:rgba(240,240,240,0.8);
border:1px solid rgba(0,0,0,0.2);
border-radius:3px;
font-family: 'Fauna One',serif;
font-weight:500;
font-size:14px;
border-style: solid;
border-width: 1px;
}
.post:hover{
	background-color:#a6a6a6;
}
.faqText{
width:100%;
height:60px;
margin-top:10px;
border:none;
border-radius:3px;
padding:5px;
resize:none;
border-style: solid;
border-width: 1px;
border-color: rgba(240,240,1,1);

}
.faqText1{
width:100%;
height:60px;
margin-top:10px;
border:none;
border-radius:3px;
padding:5px;
resize:none;
border-style: solid;
border-width: 1px;
border-color: rgba(240,240,1,1);

}
.createtabel2 {
	position: absolute;
	left: 200px;
	top: 250px;
	width: 900px;
	height: 140px;
	z-index: 15;
}

</style>


</head>

<body >
<?php include 'header.php'; ?> 
<div id="apDiv1">
<div id="apDiv2">
  <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <p>
      <label for="textfield"></label>
      <input name="textfield" type="text" class="searchtext" id="textfield" required>
      <input name="button" type="submit" class="searchbtton" id="searchbtton" value=" <?php echo SUBMIT_SEARCH ; ?> ">
  </p>
    
  </form>
</div>
</div>




<?php
// forum search function

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if ( isset( $_POST['button'] ))
{
	include "_database/database.php";
$colorchange=0;
$bgcolor="";

$tbl_name="fquestions"; 
$found =0;
$sql = "SELECT * FROM $tbl_name ORDER BY id DESC";;
$result = mysqli_query($database,$sql);
$word =stripslashes($_POST['textfield']);
$word = str_replace(' ','',$word);
?>
<p>&nbsp;</p>
<h2> Searching Result </h2>
<div class="createtabel2">
<table border="0" bordercolor="#666666">
<tr>
<td>
<table width="900" height="107" align="center" cellpadding="3" cellspacing="0" border="0" >
<tr>
<td width="45%" align="center" bgcolor="#999"><?php echo DISCUSSION ; ?></td>
<td width="20%" align="center" bgcolor="#999"><?php echo STARTEDBY ; ?></td>
<td width="10%" align="center" bgcolor="#999"><?php echo VIEWS ; ?></td>
<td width="10%" align="center" bgcolor="#999"><?php echo REPLIES ; ?></td>
<td width="15%" align="center" bgcolor="#999"><?php echo DATEANDTIME ; ?></td>
</tr>
<?php
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
<td bgcolor="<?php echo $bgcolor?>" align="left" ><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a><BR></td>
<td bgcolor="<?php echo $bgcolor?>">
<table align="center" border="0" width="100%" height="100%" bgcolor="<?php echo $bgcolor?>">
<tr>
<td align="center" bgcolor="<?php echo $bgcolor	?>" width ="50%" height="100%"><img src="<?php 
echo $rows['userphoto'];
?>" alt="" border=3 height=30 width=30></img></td>
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

<?php

if($found == 0)
{
?>

<div class="notfound">
<table width="900" bgcolor:"#fff">
<tr>
<td width="100%" align="center" bgcolor:"#fff">
  <p><?php echo NOTFOUND ; ?></p></td>
</tr>
</table>
</div>
<?php
}

mysqli_close($database);

}
}
else{
	
	// defualt forum

	include "_database/database.php";
 
$tbl_name="fquestions";
$sql="SELECT * FROM $tbl_name ORDER BY id DESC";

 
$result=mysqli_query($database,$sql);
$colorchange=0;
$bgcolor="";
?>
<div class="createtabel">
<table border="0" bordercolor="#666666">
<tr>
<td>
<table width="900" height="107" align="center" cellpadding="3" cellspacing="0" border="0" >
<tr>
<td width="45%" align="center" bgcolor="#999"><?php echo DISCUSSION ; ?></td>
<td width="20%" align="center" bgcolor="#999"><?php echo STARTEDBY ; ?></td>
<td width="10%" align="center" bgcolor="#999"><?php echo VIEWS ; ?></td>
<td width="10%" align="center" bgcolor="#999"><?php echo REPLIES ; ?></td>
<td width="15%" align="center" bgcolor="#999"><?php echo DATEANDTIME ; ?></td>
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
<td bgcolor="<?php echo $bgcolor?>" align="left" ><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a><BR></td>
<td bgcolor="<?php echo $bgcolor?>">
<table align="center" border="0" width="100%" height="100%" bgcolor="<?php echo $bgcolor?>">
<tr>
<td align="center" bgcolor="<?php echo $bgcolor	?>" width ="50%" height="100%"><img src="<?php 
echo $rows['userphoto'];
?>" alt="" border=1  height=30 width=30></img></td>
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
<div id="apDivQuestionBox">

<div id="apDivQuestionTitle">
  <p style="font-size:18px"><?php echo ADDNEWTOPIC ; ?></p>
</div>

<div id="apDivQustionForum">
  <form id="form1" name="form1" method="post" action="add_new_topic.php">
      <table><tr><td>
      <?php echo TOPIC ; ?></td></tr>
      <tr><td>
      <textarea name="topic" id="question" class="faqText" placeholder="topic" cols="40" rows="2" required></textarea>
      </td></tr><tr><td>
      <?php echo DETAIL ; ?>
      </td></tr><tr><td>
      <textarea name="detail" id="question1" class="faqText1" placeholder="details" cols="45" rows="5" required></textarea>
   	</td></tr><tr><td>
   
      <input type="submit" class="post" name="qBtn" id="qBtn" value="<?php echo POST ; ?>" />
   </td></tr><table>
  </form>
</div>

</div>
<?php
}
?>



</body>
</html>
