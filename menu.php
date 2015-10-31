<html>
<head>
<title>menu</title>


<link rel="stylesheet" type="text/css" href="css/header.css">
<style type="text/css">


#apDiv1 {
	position:absolute;
	width:460px;
	height:400px;
	z-index:1;
	left: 50px;
	top: 190px;
}
#apDiv2 {
	position:absolute;
	width:460px;
	height:400px;
	z-index:2;
	left: 550px;
	top: 186px;
}
#apDiv3 {
	position:absolute;
	width:460px;
	height:400px;
	z-index:3;
	top: 285px;
	left: 1030px;
}



</style>


</head>

<body>
<?php include 'header.php'?>

$_SESSION['loginstatus'] ='true';
$_SESSION['accountid'] = $_SESSION['userID'];

<h2>&nbsp; </h2>
<div id="apDiv1"><a href="addauctionitem.php"><img src="pics/Bookmark-add.png" width="400" height="360" alt="add to auction"></a><pre style="font-family:verdana;
	font-size: 40px;
	color: #213266;
	font-weight:bold;"><strong>	Add a land
      to the auction</strong></pre></div>

<div id="apDiv2"><a href="listauctionitems.php"><img src="pics/Remove-item-icon.png" width="400" height="360" alt="delete items"></a><pre style="font-family:verdana;
	font-size: 40px;
	color: #213266;
	font-weight:bold;"><strong> Remove a land
from the auction</strong></pre></div>

<div id="apDiv3"><a href="listbiditems.php"><img src="pics/icon175x175.jpeg" width="300" height="260"></a><pre style="font-family:verdana;
	font-size: 40px;
	color: #213266;
	font-weight:bold;">View current
     bid list</pre></div>






</body>
</html>