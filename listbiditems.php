<?php
include_once('header.php');
require_once("dbconnect.php");
require_once("checkstatus.php");
?>



<?php
$url1=$_SERVER['REQUEST_URI'];

header("Refresh: 1; URL=$url1");

?>




<html>
<head><title> List of bid items</title>

<link rel="stylesheet" type="text/css" href="css/header.css">
<style type="text/css">

#apDivContainer {
	position: absolute;
	left: 5px;
	top: 110px;
	width: 1500px;
	height: 600px;
	z-index: 1;
	background-color: #f0f0f0;
		
}

#bidtbl {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    
}

#bidtbl td, #bidtbl th {
    font-size: 1em;
    border: 4px solid #FFCC00;
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



<body>

<div id="apDivContainer">


<?php





$sql="select tblbiditems.biditemid, tblbiditems.biditem, tblbiditems.biddesc, tblbiditems.town, tblbiditems.closingtime, tblaccount.username  from tblbiditems natural join tblaccount ";
$result= mysql_query($sql) or die ("Error in  auction item: ".mysql_error());

echo "<ul>";

$out = "<table id='bidtbl' border='1' ><tr><th>Land Name</th><th  word-wrap: break-word; max-width: 150px;>Land descriptiom</th><th>Area</th><th>Remaining time</th>";
$out .= "<th>Highest Bid</th><th>Place a bid</th></tr>";

while($row=mysql_fetch_array($result)){

$date= strtotime($row['closingtime']);
$remaining = $date - time();
$days_remaining = floor($remaining / 86400);
$hours_remaining = floor(($remaining % 86400) / 3600);
$minutes_remaining = floor((($remaining % 86400) % 3600)/60);
$seconds_remaining = floor(((($remaining % 86400) % 3600)%60));




$itemid=$row['biditemid'];
$item=$row['biditem'];

$auctionby=$row['username'];






//echo"<li>$item auctioned off by $auctionby <a href='acceptbid.php?'>place bid</a></li>";



//table



   $query_1 = "SELECT max(bidprice) FROM auction.tblbidhistory WHERE biditemid = ";
   $query_1 .= "(SELECT biditemid FROM auction.tblbiditems WHERE biditem = '{$row['biditem']}') GROUP BY biditemid;";
   
   $result_1=mysql_query($query_1);
   $row_1=mysql_fetch_array($result_1);
   
   //echo $row_1['max(bidprice)'];

//while($row    = mysql_fetch_assoc($result)){


  
  $out .= "<tr style='height:75px'>";
  $out .= "<td style='width:200px'>" . $row['biditem'] . "</td>";
  $out .= "<td style='width:550px' >" . $row['biddesc'] . "</td>";
  $out .= "<td style='width:200px'>" .$row['town'] . "</td>";
  $out .= "<td style='width:200px'>" ."$days_remaining"." days" ." "."$hours_remaining"." hrs"." "."$minutes_remaining"." mins"." "."$seconds_remaining"." secs"."</td>";
  $out .= "<td style='width:200px'>" . $row_1['max(bidprice)'] .  "</td>";
  $out .= "<td>"."<a href=acceptbid.php?itemid=$itemid&item=$item> View & bid</a>"."</td>"; 
	
  $out .= "</tr>";
  }
$out .= "</table>";
echo"{$out}</ul>";

?>

</div>

</body>

</html>