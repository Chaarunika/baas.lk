
<html>
<head>
    <title>baas.lk</title>
    <meta charset="UTF-8">

<link rel="stylesheet" type="text/css" href="css/header.css">

<script language="javascript" type="text/javascript" src="javascript/datetimepicker.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/addauctionitem.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<style type="text/css">

#apDivBidContainer {
	position: relative;	
	width: 1200px;
	z-index: 1;
	//background-color:#f0f0f0;
		
}

#BidContainerAndAuctionAdd{
    position: absolute;
    left: 5%;
    top: 200px;
    width: 1200px;
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
	text-align: left;   
	word-wrap: break-word;
	//background-color: #F8F8F8;
    border-top: 1px solid #999999
}

#bidtbl th {
    font-size: 1.1em;
    text-align: left;
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

/* Button */

#custom-search-input{
    position: absolute;
    top: 100px;
    padding: 3px;
    border: solid 1px #E4E4E4;
    border-radius: 6px;
    background-color: #fff;
}

#custom-search-input input{
    border: 0;
    box-shadow: none;
}

#custom-search-input button{
    margin: 2px 0 0 0;
    background: none;
    box-shadow: none;
    border: 0;
    color: #666666;
    padding: 0 8px 0 10px;
    border-left: solid 1px #ccc;
}

#custom-search-input button:hover{
    border: 0;
    box-shadow: none;
    border-left: solid 1px #ccc;
}

#custom-search-input .glyphicon-search{
    font-size: 23px;
}


</style>

<!-- Bootstrap  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
    
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script>
$(document).ready(function(){
    $("#addauctionMainContainer").hide();
    $("#dropBidButton").click(function(){
        $("#addauctionMainContainer").slideToggle();
    });
});

</script>

</head>

<body>

    <?php 
    include_once('header.php'); 
    require_once("_database/database.php");
    $_SESSION['accountid'] = $_SESSION['userID'];
    ?>
<!--
<div id="apDivContainer2">	
	
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
</form>
	
</div>

-->


<form>
<div name="ccontainer" style="position:absolute;left:5%;width:500px">                 
    <div id="custom-search-input">
        <div class="input-group ">
            <input type="text" class="form-control input-lg"  placeholder="Search Auction" />
            <span class="input-group-btn">
                <button class="btn btn-info btn-lg" type="submit">
                    <i class="glyphicon glyphicon-search"></i>
                </button>
            </span>
        </div>
        <a href="#" id="dropBidButton" type="submit" class="btn btn-block btn-default">Add Auction <span class="glyphicon glyphicon-chevron-down"></span></a>
    </div>  
     
</div>
</form>

<div id="BidContainerAndAuctionAdd">

    <?php include_once('addauctionitem.php')?>

<div id="apDivBidContainer">
<?php


//$sql="SELECT * FROM tblbiditems,tblbidhistory INNER JOIN ON tblbiditems.biditemid = tblbidhistory.biditemid  " ;
if(!isset($_GET['orderState'])){
    $sql="SELECT * FROM tblbiditems " ;
}
else{
    $sql="SELECT * FROM tblbiditems ORDER BY ".$_GET['orderState']." ";
}

	
$result = mysqli_query($dbConnection,$sql);
    
	if (!$result) {
    echo mysqli_error();
	}	
		
	
	$out = "<table class='table table-striped' id='bidtbl'  width=100%  border='0' style='position:relative;border: 1px solid #999999' >
                <colgroup>
                <col span='1' style='width: 5%;'/>
                <col span='1' style='width: 15%;'/><col span='1' style='width: 20%;'/>
                <col span='1' style='width: 10%;'/><col span='1' style='width: 15%;'/>
                <col span='1' style='width: 10%;'/><col span='1' style='width: 10%;'/>
                </colgroup>
                <tr>
                    <th><a href=\"listbiditems.php?orderState=biditemid\">ID</a></th>
                    <th>Land Name</th>
                    <th  word-wrap: break-word;>Land descriptiom</th>
                    <th><a href=\"listbiditems.php?orderState=town\">Area</a></th>
                    <th><a href=\"listbiditems.php?orderState=closingtime\">Remaining time</a></th>
                    <th>Highest Bid</th>
                    <th>Place a bid</th>
                </tr>";

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

        $query_1 = "SELECT max(bidprice) FROM tblbidhistory WHERE biditemid =  '$itemid' ";       
        $result_1 = mysqli_query($dbConnection,$query_1);
           
            if (!$result_1) {
            echo mysqli_error();
          }
		  
              
        $row_1=mysqli_fetch_array($result_1); 
           
		if($remaining>0){ 
            $out .= "<tr style='height:75px'>";

                $out .= "<td>" . $row['biditemid'] . "</td>";
                $out .= "<td>" ;
                    
                    if(isset($row['image_path'])){
                        $bidImageUrl = 'uploaded_img/'.$row['image_path']; 

                        if($bidImageUrl == "uploaded_img/"){
                            $out .= "
                            <div name='bidPic'>
                            <img src='uploaded_img/default.jpg' height='50' width='50' >
                            </div>
                            ";
                        }      
                        else{
                            $out .= "
                            <div name='bidPic'>
                            <img src='".$bidImageUrl."' height='50' width='50'>
                            </div>
                            "; 
                        }     
                        
                    }
                    else{
                        $out .= "
                        
                        ";
                    }         
                
                $out .= " ".$row['biditem'] . "</td>";

                $out .= "<td >";
                    if(strlen($row['biddesc'] )>75){                       
                        $out .= substr($row['biddesc'],0,75);
                        $out .= "<a href='acceptbid.php?itemid=$itemid'>..read more</a>";
                    }
                    else{
                        
                        $out .= $row['biddesc'];

                    }
              
                 $out .= "</td>";
                $out .= "<td >".$row['town']."</td>";

                $out .= "<td>" ."$days_remaining"." Days" ." "."$hours_remaining"." Hrs"." "."$minutes_remaining"." Mins"." </td>";
                    if(isset($row_1['max(bidprice)'])){
                        $out .= "<td>Rs.". $row_1['max(bidprice)'] . ".00</td>";     
                    }
                    else{
                        $out .= "<td>No bids</td>";
                    }
                    
                $out .= "<td>"."<a href='acceptbid.php?itemid=$itemid'> View & bid</a>"."</td>";  
            $out .= "</tr>";
    	}

        }

        $out .= "</table>";
        echo $out;
?>

</div>
</div>
</body>
</html>