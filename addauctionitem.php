<!DOCTYPE html >

<html>
<head><title>baas.lk</title>

<script language="javascript" type="text/javascript" src="javascript/datetimepicker.js"></script>
<link rel="stylesheet" type="text/css" href="css/header.css">

<style type="text/css">

#apDiv2 {
	position:absolute;
	width:511px;
	height:84px;
	z-index:1;
	left: 507px;
	top: 116px;
}
#apDiv3 {
	position:absolute;
	width:597px;
	height:115px;
	z-index:2;
	left: 506px;
	top: 325px;
}


 h2{ font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    
	font-size: 40px;
	color: #213266;
	font-weight:bold;}
	
	
	
#bidtbl {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    
}

#bidtbl td, #bidtbl th { height: 50px;


	color: #213266;
    font-size: 1em;
    border: 5px solid #FFBF00;
    padding: 3px 7px 2px 7px;
}

#bidtbl th {
    font-size: 1.1em;
    text-align: left;
    padding-top: 5px;
    padding-bottom: 4px;
    background-color: #FFBF00;
    color: #ffffff;
}

#bidtbl tr.alt td {
	
    color: #000000;
    background-color: #;
}



</style>
</head>
<body style="background-color:#F5DA81">

<?php
include ('header.php') ;



?>


<div id="apDiv2" >
<h2>Adding Land</h2>
<p >Please add the details about the land that you wish to sell</p>
</div>


<div id="apDiv3">
<form id="form1" name="form1" method="post" action="addauctionprocess.php">

<table id="bidtbl"  >

<tr>
<td width="550">Land Name</td>
<td width="500"><input type="text" name="item" id="item" maxlength="8000"></td>

</tr>




<tr>
<td valign="top">Description</td>
<td><textarea name="description" id="description" cols="45" rows="5"></textarea> </td>
</tr>

<tr><td width="550">Town</td>
<td width="550"><input type="text" name="town" id="item" maxlength="8000"></td>
</tr>



<tr><td>Add Picture</td>
<td><input  name="uploadedimage" enctype="multipart/form=data" class="element file" type="file"/></td>
</tr>






<tr><td>Bid Closing Time</td>
<td> <input name="closingtime" id="demo3" size="25" width="100">
<a href="javascript:NewCal('demo3','mmmddyyyy',true,12)"><img src="cal.gif" width="50" height="50" border="0" alt="Pick a date"></a></td>
<!--<td>&nbsp;</td>-->
</tr>


<tr><td>&nbsp;</td>
<td><input type="submit" name="button" id="button" value="submit"/></td>
</tr>

</table>



</form>



</div>

</body>


</html>