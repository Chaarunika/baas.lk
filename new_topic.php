<head>
<link href="forum.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/header.css">
<?php include 'header.php' ?>


<style type="text/css">
.createtabel {
	position: absolute;
	left: 139px;
	top: 165px;
	width: 971px;
	height: 140px;
	z-index :10;
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
</style>
</head>

<body>


<body>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="createtabel">
<table width="800" border="2" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
  <tr>
<form id="form1" name="form1" method="post" action="add_new_topic.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3" bgcolor="#E6E6E6"><strong>Create New Topic</strong> </td>
</tr>
<tr><td></td><tr>
<tr>
<td width="14%"><strong>Topic</strong></td>
<td width="2%">:</td>
<td width="84%"><input name="topic" type="text" id="topic" size="70%" / required></td>
</tr>
<tr><td></td><tr>
<tr><td></td><tr>
<tr>
<td valign="top"><strong>Detail</strong></td>
<td valign="top">:</td>
<td><textarea name="detail" cols="75%" rows="10" id="detail" required></textarea></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Submit" /> 
</td>
</tr>
</table>
</td>
</form>
</tr>
</table>
</div>
</body>
</html>