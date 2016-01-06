
<html>
<head>
    <title> List of bid items</title>
    <meta charset="UTF-8">

<link rel="stylesheet" type="text/css" href="css/header.css">
<style type="text/css">

#apDivContainer {
	position: absolute;
	left: 5px;
	top: 200px;
	width: 100%
	height: 600px;
	z-index: 1;
	//background-color:#f0f0f0;
		
}

#apDivContainer2 {
	position: absolute;
	left: 5px;
	top: 90px;
	width: 100%;
	z-index: 22;
	//background-color:#f0f0f0;;
		
}


#bidtbl {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
	 table-layout: fixed;
	 width: 100%;
    
}

#bidtbl td, #bidtbl th {
    font-size: 1em;
	text-align: center;
    border: 1px solid #999999;
    padding: 3px 7px 2px 7px;
	word-wrap: break-word;
	//background-color: #F8F8F8;
}

#bidtbl th {
    font-size: 1.1em;
    text-align: center;
    padding-top: 5px;
    padding-bottom: 4px;
    //background-color: #F8F8F8;
    color: #000000;
}

#bidtbl tr.alt td {
    color: #000000;
    //background-color: #;
}

.table-striped>tbody>tr:nth-child(odd)>td,
.table-striped>tbody>tr:nth-child(odd)>th {
	background-color: #f0f0f0;
}

</style>
</head>

<body>

    <?php 
    include_once('header.php'); 
    require_once("_database/database.php");
    $_SESSION['accountid'] = $_SESSION['userID'];
    ?>
<div id="apDivContainer2">

	<?php
	/*
	<center><h2> FIND BIDD </h2></center>
  
    <form action="" method="POST" >
    <center>
    
    Search Area <select name= "search" class="area"> 
	
   <option></option>
   <option>Colombo</option>
    <option>Kandy</option>
	<option>Galle</option>
	<option>Ampara</option>
    <option>Anuradhapura</option>
    <option>Badulla</option>
    <option>Batticaloa</option>
	 <option>Gampaha</option>
    <option>Hambantota</option>
    <option>Jaffna</option>
    <option>Kalutara</option>
    <option>Kegalle</option>
    <option>Kilinochchi</option>
    <option>Kurunegala</option>
    <option>Mannar</option>
    <option>Matale</option>
    <option>Matara</option>
    <option>Moneragala</option>
    <option>Mullaitivu</option>
    <option>Nuwara Eliya</option>
    <option>Polonnaruwa</option>
    <option>Puttalam</option>
    <option>Ratnapura</option>
    <option>Trincomalee</option>
    <option>Vavuniya</option>
	 <option>Colombo</option>
    </select>
   
   
	
    
    <input type= "submit" name="submit" value="FIND">
    </center>
	
	*/
	
	?> 
	
	<?php /*	<center><h2> FIND BIDD </h2></center>
  
    <form action="" method="POST" >
    <center>
    
    Bid ID <input name= "search" class="area" type="number"> 
	
 
   
   
	
    
    <input type= "submit" name="submit" value="FIND">
    </center>
	</form>
	*/
	
	?>
	
	

 <?php
 /*
 // $conn = new MySQLi("localhost","root","","baaslk");
  if($_SERVER["REQUEST_METHOD"]=="POST"){
		$sql2 = "SELECT *FROM tblbiditems WHERE town = '$_POST[search]'";
    //$result2 = $database->query($sql2);
	$result2 = mysqli_query($database,$sql2);
    if($result2){
	
	
		
	
	
    
    
    echo "<ul>";  

      while($row=mysqli_fetch_array($result2)){

        $date= strtotime($row['closingtime']);
        $remaining = $date - time();
        $days_remaining = floor($remaining / 86400);
        $hours_remaining = floor(($remaining % 86400) / 3600);
        $minutes_remaining = floor((($remaining % 86400) % 3600)/60);
        $seconds_remaining = floor(((($remaining % 86400) % 3600)%60));

        $itemid=$row['biditemid'];
        $item=$row['biditem'];
        $ownerid=$row['accountno'];

        $query_1 = "SELECT max(bidprice) FROM baaslk.tblbidhistory WHERE biditemid = ";
        $query_1 .= "(SELECT biditemid FROM baaslk.tblbiditems WHERE biditem = '{$row['biditem']}') GROUP BY biditemid;";
        $result_1 = mysqli_query($database,$query_1);
           
            if (false === $result2) {
            echo mysqli_error();
          }
		  
              
        $row_1=mysqli_fetch_array($result_1); 
           
        $out .= "<tr style='height:75px'>";
        $out .= "<td style='width:5%' 'background-color: black'>" . $row['biditemid'] . "</td>";
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
  }
  else{
  echo " Sorry, No bidds your searched area. ";
  }
$database -> close();
  //echo "Successfully";
}
*/
?>

	
</div>

<div id="apDivContainer">


<?php




/*
if($_SERVER["REQUEST_METHOD"]=="POST"){
$sql="SELECT baaslk.tblbiditems.biditemid, baaslk.tblbiditems.biditem,  baaslk.tblbiditems.accountno, baaslk.tblbiditems.biddesc, baaslk.tblbiditems.town, baaslk.tblbiditems.closingtime FROM baaslk.tblbiditems WHERE baaslk.tblbiditems.town = '$_POST[search]' " ;
									}
else{
$sql="SELECT baaslk.tblbiditems.biditemid, baaslk.tblbiditems.biditem,  baaslk.tblbiditems.accountno, baaslk.tblbiditems.biddesc, baaslk.tblbiditems.town, baaslk.tblbiditems.closingtime FROM baaslk.tblbiditems  " ;
	}
	
	\
	
	if($_SERVER["REQUEST_METHOD"]=="POST"){
$sql="SELECT baaslk.tblbiditems.biditemid, baaslk.tblbiditems.biditem,  baaslk.tblbiditems.accountno, baaslk.tblbiditems.biddesc, baaslk.tblbiditems.town, baaslk.tblbiditems.closingtime FROM baaslk.tblbiditems WHERE baaslk.tblbiditems.biditemid = '$_POST[search]' " ;
									}
else{
$sql="SELECT baaslk.tblbiditems.biditemid, baaslk.tblbiditems.biditem,  baaslk.tblbiditems.accountno, baaslk.tblbiditems.biddesc, baaslk.tblbiditems.town, baaslk.tblbiditems.closingtime FROM baaslk.tblbiditems  " ;
	}

	
	*/
	
$sql="SELECT baaslk.tblbiditems.biditemid, baaslk.tblbiditems.biditem,  baaslk.tblbiditems.accountno, baaslk.tblbiditems.biddesc, baaslk.tblbiditems.town, baaslk.tblbiditems.closingtime FROM baaslk.tblbiditems  " ;
	
$result = mysqli_query($database,$sql);
    
	if (false === $result) {
    echo mysqli_error();
	}	
	
	echo "<ul>";
	
	$out = "<table class='table table-striped' id='bidtbl'  width=100%  border='0' ><colgroup><col span='1' style='width: 5%;'/><col span='1' style='width: 15%;'/><col span='1' style='width: 20%;'/><col span='1' style='width: 10%;'/><col span='1' style='width: 15%;'/><col span='1' style='width: 10%;'/><col span='1' style='width: 10%;'/></colgroup><tr><th>ID</th><th>Land Name</th><th  word-wrap: break-word;>Land descriptiom</th><th>Area</th><th>Remaining time</th>";
$out .= "<th>Highest Bid</th><th>Place a bid</th></tr>";



$row=mysqli_fetch_array($result);

 
	
	
		
	
	
    
    
    //echo "<ul>";  

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

        $query_1 = "SELECT max(bidprice) FROM baaslk.tblbidhistory WHERE biditemid = ";
        $query_1 .= "(SELECT biditemid FROM baaslk.tblbiditems WHERE biditem = '{$row['biditem']}') GROUP BY biditemid;";
        $result_1 = mysqli_query($database,$query_1);
           
            if (false === $result) {
            echo mysqli_error();
          }
		  
              
        $row_1=mysqli_fetch_array($result_1); 
           
		 if($remaining>0){ 
        $out .= "<tr style='height:75px'>";
        $out .= "<td >" . $row['biditemid'] . "</td>";
        $out .= "<td  >" . $row['biditem'] . "</td>";
        $out .= "<td >" . $row['biddesc'] . "</td>";
        $out .= "<td >" .$row['town'] . "</td>";
        $out .= "<td>" ."$days_remaining"." Days" ." "."$hours_remaining"." Hrs"." "."$minutes_remaining"." Mins"." </td>";
        $out .= "<td>" ."Rs. ". $row_1['max(bidprice)'] .  "</td>";
        $out .= "<td>"."<a href=acceptbid.php?itemid=$itemid> View & bid</a>"."</td>";  
        $out .= "</tr>";
		}
        }

        $out .= "</table>";
        echo"{$out};
		}
 












</ul></table>; "


?>




</div>
</body>
</html>