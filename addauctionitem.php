<!DOCTYPE html >

<html>
<head><title>baas.lk</title>

<script language="javascript" type="text/javascript" src="javascript/datetimepicker.js"></script>
<link rel="stylesheet" type="text/css" href="css/header.css">

<style type="text/css">

#apDiv1 {
	position:absolute;
	width:750px;
	height:700px;
	z-index:1;
	left: 25%;
	top: 116px;
	
	background-color: #f0f0f0;
	border-radius: 20px;
	border:1px solid rgba(51,51,51,0.5)
}


#apDiv2 {
	position:absolute;
	width:511px;
	height:84px;
	z-index:2;
	left: 507px;
	top: 116px;
}
#apDiv3 {
	position:absolute;
	width:597px;
	height:115px;
	z-index:3;
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

p{ font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    font-size: 20px;
	color: #213266;
	font-weight:bold;}



</style>
</head>
<body>

<?php
include ('header.php') ;



?>

<div id="apDiv1" >

<h2>Adding Land</h2>
<p >Please add the details about the land that you wish to sell...</p>




<form id="form1" name="form1" method="post" action="addauctionprocess.php">

<table id="bidtbl"  >

<tr>
<td ><p>Land Name</p></td>
<td ><input type="text" name="item" id="item" style="width:280px"></td>

</tr>




<tr>
<td valign="top"><p>Description</p></td>
<td><textarea name="description" id="description" cols="45" rows="10"></textarea> </td>
</tr>

<tr><td><p>Town</p></td>
<td><select name=Town>


  <option value="Colombo">Colombo</option>
  <option value="Kandy">Kandy</option>
  <option value="Galle">Galle</option>
  <option value="Ampara">Ampara</option>
  <option value="Anuradhapura">Anuradhapura</option>
  <option value="Badulla">Badulla</option>
  <option value="Batticaloa">Batticaloa</option>
  <option value="Gampaha">Gampaha</option>
  <option value="Hambantota">Hambantota</option>
  <option value="Jaffna">Jaffna</option>
  <option value="Kalutara">Kalutara</option>
  <option value="Kegalle">Kegalle</option>
  <option value="Kilinochchi">Kilinochchi</option>
  <option value="Kurunegala">Kurunegala</option>
  <option value="Mannar">Mannar</option>
  <option value="Matale">Matale</option>
  <option value="Matara">Matara</option>
  <option value="Moneragala">Moneragala</option>
  <option value="Mullativu">Mullativu</option>
  <option value="Nuwara Eliya">Nuwara Eliya</option>
  <option value="Polonnaruwa">Polonnaruwa</option>
  <option value="Puttalam">Puttalam</option>
  <option value="Ratnapura">Ratnapura</option>
  <option value="Trincomalee">Trincomalee</option>
  <option value="Vavuniya">Vavuniya</option>
  

</select>

</td>
</tr>



<tr><td><p>Add Picture</p></td>
<td><input  name="uploadedimage" enctype="multipart/form=data" class="element file" type="file"/></td>
</tr>






<tr><td><p>Bid Closing Time</p></td>
<td> <input name="closingtime" id="demo3" size="25" width="280">
<a href="javascript:NewCal('demo3','mmmddyyyy',true,12)"><img src="pics/cal.gif" width="50" height="50" border="0" alt="Pick a date"></a></td>
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