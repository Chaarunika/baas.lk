<head>
<?php include 'myforumheader.php'; ?> 
<link href="forum.css" rel="stylesheet">
<link href="main.css" rel="stylesheet">
<style type="text/css">
.createtabel {
	position: absolute;
	left: 282px;
	top: 260px;
	width: 724px;
	height: 140px;
	z-index: 15;
}
#apDiv11 {
	position:absolute;
	left:765px;
	top:333px;
	width:579px;
	height:284px;
	z-index:4;
}
.image {
	position: absolute;
	width: 457px;
	height: 238px;
	left: 114px;
	top: 44px;
}
#apDiv12 {
	position:absolute;
	left:-39px;
	top:217px;
	width:313px;
	height:165px;
	z-index:5;
}
.image2 {
	position: absolute;
	left: 44px;
	width: 202px;
	top: 34px;
	height: 140px;
}
createtopic {
	font-size: 24px;
}
createtopic {
	font-size: 36px;
}
createtopic {
	color: #F00;
}
.createtopic {
	font-size: 24px;
	color: #F00;
}
.whole {
	position: absolute;
	left: 0px;
	top: 206px;
	width: 1390px;
	height: 513px;
}
</style>
</head>

<body>

<?php
 
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="baaslk"; // Database name 
$tbl_name="fquestions"; // Table name 
 
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
 
$sql="SELECT * FROM $tbl_name ORDER BY id DESC";
// OREDER BY id DESC is order result by descending
 
$result=mysql_query($sql);
?>
<div class="createtabel">
<table width="90%" height="107" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td colspan="7" align="right" bgcolor="#00FFFF"><a href="new_topic.php" class="createtopic"><strong>Create New Topic</strong> </a></td>
</tr>
<tr>
<td width="100%" align="center" bgcolor="#E6E6E6"><strong>Topic</strong></td>
<td width="53%" align="center" bgcolor="#E6E6E6"><strong>Username</strong></td>
<td width="15%" align="center" bgcolor="#E6E6E6"><strong>Views</strong></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Replies</strong></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Date/Time</strong></td>
</tr>
 
<?php
 
// Start looping table row
while($rows = mysql_fetch_array($result)){
?>
<tr>
<td bgcolor="#FFFFFF" align="center"><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><strong><?php echo $rows['topic']; ?></strong></a><BR></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['user'];?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['view']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['reply']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>
</tr>
 
<?php
// Exit looping and close connection 
}
mysql_close();
?>
</table>
</div>
<div id="apDiv12">
  <input name="imageField2" type="image" class="image2" id="imageField3" src="forum1.jpg">
</div>
<style type="text/css">
#search {
	position:absolute;
	left:25px;
	top:7px;
	width:579px;
	height:49px;
	z-index:2;
	background-color: #999999;
}

.search {
	position: absolute;
	width: 337px;
	left: 7px;
	top: 15px;
}
#big {
	position:absolute;
	left:358px;
	top:15px;
	width:171px;
	height:36px;
	z-index:2;
}
.submint {
	position: absolute;
	left: 381px;
	top: 13px;
	font-weight: bolder;
	background-color: #FC0;
	z-index:2;
	width: 114px;
}
#searchfield {
	position:absolute;
	left:7px;
	top:241px;
	width:1383px;
	height:483px;
	z-index:2;
}
#searchfield {
	position:absolute;
	left:6px;
	top:217px;
	width:1474px;
	height:563px;
	z-index:11;
	color: #D6D6D6;
}
</style>
<div id="big" style="position:absolute; left:3px; top:138px; width:1396px; height:62px; z-index:10; background-color: #999999; layer-background-color: #999999; border: 1px none #000000;">
<div id="search">
  <form id="form6" name="form6" method="post" action="search.php">
    <label for="textfield"></label> 
    <input name="textfield" type="text" class="search" id="textfield" />
 	 <input name="search" type="submit" class="submint" id="button" value="Search Topic" />
   </form>
</div>
</div>





