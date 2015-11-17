<?php
include_once('header.php');
require_once("_database/database.php");
$_SESSION['accountid'] = $_SESSION['userID'];

?>



<?php
/*$url1=$_SERVER['REQUEST_URI'];

header("Refresh: 1; URL=$url1");*/

?>




<html>
<head><title> List of bid items</title>

<link rel="stylesheet" type="text/css" href="css/header.css">
<style type="text/css">



#apDivContainer {
	position: absolute;
	left: 5px;
	top: 200px;
	width: 100%
	height: 600px;
	z-index: 1;
	//background-color: #f0f0f0;
		
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




/*$area=$_POST['search'];*/
$sql="SELECT baaslk.tblbiditems.biditemid, baaslk.tblbiditems.biditem,  baaslk.tblbiditems.accountno, baaslk.tblbiditems.biddesc, baaslk.tblbiditems.town, baaslk.tblbiditems.closingtime FROM baaslk.tblbiditems ";

$result = mysqli_query($database,$sql);
    
    
if (false === $result) {
    echo mysqli_error();
}	

echo "<ul>";

$out = "<table id='bidtbl'  width=100%  border='0' ><tr><th>Land Name</th><th  word-wrap: break-word;>Land descriptiom</th><th>Area</th><th>Remaining time</th>";
$out .= "<th>Highest Bid</th><th>Place a bid</th></tr>";

while($row=mysqli_fetch_array($result)){

$date= strtotime($row['closingtime']);
$remaining = $date - time();
$days_remaining = floor($remaining / 86400);
$hours_remaining = floor(($remaining % 86400) / 3600);
$minutes_remaining = floor((($remaining % 86400) % 3600)/60);
$seconds_remaining = floor(((($remaining % 86400) % 3600)%60));




$itemid=$row['biditemid'];
$item=$row['biditem'];
$ownerid=$row['accountno'];

//$auctionby= $row['user_name'];






//echo"<li>$item auctioned off by $auctionby <a href='acceptbid.php?'>place bid</a></li>";



//table



   $query_1 = "SELECT max(bidprice) FROM baaslk.tblbidhistory WHERE biditemid = ";
   $query_1 .= "(SELECT biditemid FROM baaslk.tblbiditems WHERE biditem = '{$row['biditem']}') GROUP BY biditemid;";
   
   $result_1 = mysqli_query($database,$query_1);
   
   if (false === $result) {
    echo mysqli_error();
}
    
   /* if(!$result_1){
      die("Database query failed.");
    }  */  

   $row_1=mysqli_fetch_array($result_1); 
   
  // echo $row_1['max(bidprice)'];

//($row    = mysql_fetch_assoc($result)){


  
  $out .= "<tr style='height:75px'>";
  $out .= "<td style='width:10%' 'background-color: black'>" . $row['biditem'] . "</td>";
  $out .= "<td style='width:30%' >" . $row['biddesc'] . "</td>";
  $out .= "<td style='width:10%'>" .$row['town'] . "</td>";
  $out .= "<td style='width:15%'>" ."$days_remaining"." Days" ." "."$hours_remaining"." Hrs"." "."$minutes_remaining"." Mins"." "."$seconds_remaining"." Secs"."</td>";
  
  $out .= "<td style='width:10%'>" . $row_1['max(bidprice)'] .  "</td>";
  $out .= "<td style='width:10%'>"."<a href=acceptbid.php?itemid=$itemid> View & bid</a>"."</td>"; 	
  $out .= "</tr>";
  }
$out .= "</table>";
echo"{$out}</ul>";

?>

</div>

</body>

</html>