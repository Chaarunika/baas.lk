<?php include 'homeheader.php';?>
<link href="header.css" rel="stylesheet">
<style type="text/css">
#apDiv1 {
	position:absolute;
	left:-1px;
	top:127px;
	width:1368px;
	height:108px;
	z-index:1;
	color: #666;
	background-color: #999999;
}
.A-Zsearch {
	position: absolute;
	left: 5px;
	top: 2px;
	width: 274px;
	height: 35px;
	color: #000;
	font-weight: bold;
	background-color: #FC0;
}

#apDiv2 {
	position:absolute;
	left:94px;
	top:7px;
	width:1123px;
	height:43px;
	z-index:2;
}
.serachbar {
	position: absolute;
	left: 7px;
	top: 9px;
	width: 319px;
	height: 28px;
}
.serachbutton {
	position: absolute;
	left: 340px;
	top: 10px;
	width: 151px;
	font-weight: bold;
	font-size: 18px;
	background-color: #FC0;
}
#apDiv3 {
	position:absolute;
	left:197px;
	top:66px;
	width:293px;
	height:36px;
	z-index:3;
}
#apDiv4 {
	position:absolute;
	left:246px;
	top:297px;
	width:1068px;
	height:716px;
	z-index:2;
}
#apDiv5 {
	position:absolute;
	left:65px;
	top:66px;
	width:125px;
	height:36px;
	z-index:3;
	font-weight: bold;
	font-size: 18px;
	color: #000;
}
</style>
<div id="apDiv1">
 <div id="apDiv2">
  <form id="form2" name="form2" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input name="search" type="text" class="serachbar" id="textfield" />
    <input name="searchuser" type="submit" class="serachbutton" id="button2" value="Search User" />
  </form> 
</div>
<div id="apDiv5">Advance search</div>
<div id="apDiv3">
	<form id="form3" name="form2" method="post" action="A-Zsearch.php">
  <input name="searchaz" type="submit" class="A-Zsearch" id="button" value="A-Z Search" />
   </form>
</div>
  
</div>



<div id="apDiv4">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
if ( isset( $_POST['searchuser'] ))
{
include 'searchserviceprovider.php';
}
}
?></div>

