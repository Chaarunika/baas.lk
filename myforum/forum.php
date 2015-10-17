</style>
<?php include 'myforumheader.php' ?>
<link href="forum.css" rel="stylesheet">
<link href="main.css" rel="stylesheet">
<style type="text/css">
.createtabel {
	position: absolute;
	left: 77px;
	top: 167px;
	width: 724px;
	height: 140px;
	z-index: 10;	
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
	left:914px;
	top:150px;
	width:379px;
	height:165px;
	z-index:5;
}
.image2 {
	position: absolute;
	left: 44px;
	width: 281px;
	top: 34px;
	height: 175px;
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
<td width="6%" align="center" bgcolor="#E6E6E6"><strong>Q.N</strong></td>
<td width="53%" align="center" bgcolor="#E6E6E6"><strong>Username</strong></td>
<td width="53%" align="center" bgcolor="#E6E6E6"><strong>User</strong></td>
<td width="100%" align="center" bgcolor="#E6E6E6"><strong>Topic</strong></td>
<td width="15%" align="center" bgcolor="#E6E6E6"><strong>Views</strong></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Replies</strong></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Date/Time</strong></td>
</tr>
 
<?php
 
// Start looping table row
while($rows = mysql_fetch_array($result)){
?>
<tr>
<td bgcolor="#FFFFFF"><?php echo $rows['id']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['user'];?></td>
<td align="center" bgcolor="#FFFFFF"><img src="../<?php 
if($rows['user_catagory']=="customer")
{
	echo "customer";
}
else
{
	echo "serviceprovider";
}
?>/userfiles/avatars/<?php 
echo $rows['userphoto'];
?>" alt="" border=3 height=50 width=50></img></td>
<td bgcolor="#FFFFFF"><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a><BR></td>
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
<div id="apDiv11">
  <input name="imageField" type="image" class="image" id="imageField2" src="forum.jpg">
</div>
<div id="apDiv12">
  <input name="imageField2" type="image" class="image2" id="imageField3" src="forum1.jpg">
</div>
</body>



