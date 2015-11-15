<!DOCTYPE html>
<html>
<head>
<style>
#mainm{
	position: absolute;
	width:950px;
	height:auto;
	//float:left;
	left: 100px;
	
}

#main{
	position: absolute;
	top :80px;
	width: 600px;
	height: 70px;
	background: rgba(255,255,255,0.5);
	float:right;
	font-family:Verdana, Geneva, sans-serif;	
	font-style:oblique;
	border-radius:20px;
}
#b1{
	width:600px;
	}
	
#b2{
	width:600px;
	float:left;
	background:rgba(51,51,51,0.2);
	//background-color:#BA812C;
	border-bottom-style:dotted;
	border-top-style:dotted;
	}
#b3{
	width:600px;
	background: rgba(255,255,255,0.5);
	/*border-bottom-style:dotted;
	border-top-style:dotted;*/
	}
#a4{
	width:600px;
	//background:#FF3;
	border-bottom-style:dotted;
	border-top-style:dotted;
	}
#a5{
	width:600px;
	//background:#FF3;
	border-bottom-style:dotted;
	border-top-style:dotted;
	}
#a6{
	width:600px;
	float:right;
	//background-color:#FF3;
	border-color:#900;
	border-bottom-style:dotted;
	border-top-style:dotted;
	border-left-style:dotted;
	}
.find{
	background-color:#F90;
	font:"Courier New", Courier, monospace;
	border-color:#F30;
	cursor:hand;
	
	}
.area{
	background-color:#FFA;
	/*font-style:oblique;*/
	border-radius : 20px;}
.find{
	font:"Courier New", Courier, monospace;
	//border-color:#F30;	
	border-radius: 20px;
	cursor:hand;
		}

#jobLogo{
	position: absolute;
	left: 1000px;
	top : 100px;
	background: rgba(255,255,255,0.5);
	border-radius:20px;
	border-width:3px;
	border-style:solid;
	
}

</style>

<link rel="stylesheet" type="text/css" href="css/header.css">
</head>
<body bgcolor="#f2f2f2">
<div id ="jobLogo"> 
<center>
    <h2> Recently Posted Jobs </h2>
    <center>
    <?php
	$conn = new MySQLi("localhost","root","","baaslk");
	$query = "SELECT * FROM postjob2 ORDER BY job_id DESC LIMIT 4";
	$result2 = mysqli_query($conn, $query );
	$row = mysqli_fetch_assoc($result2);
	
	if($result2 -> num_rows >0){
		echo "---------------------------------------------------------------------------------.<br>";
		while($row = $result2 -> fetch_assoc()){
			echo $row['job_description'];
			echo "<br>";
			echo "customer name : ";
			echo $row['username'];
			echo "<br>";
			echo "TP : ";
			echo $row['tel_num'];
			echo "<br>";
			echo "Address : ";
			echo $row['address'];
			echo "<br>";
			$t = preg_split("/(?<=\w)\b\s*/", $row["time"]);
			echo "Posted Date : ";
			echo $t[0];
			echo $t[1];
			echo $t[2];
			echo "<br>";
			echo "Posted Time : ";
			echo $t[3];
			echo $t[4];
			echo $t[5];
			echo "<br><br>";
			echo "---------------------------------------------------------------------------------";
			echo "<br><br>";
			}
		}
	?>
	</center>









</div>
<?php include 'header.php'; ?>
<div id = "mainm">
<div id="main">
	<div id = "b1">
	<center><h2> Find Jobs </h2></center>
    <br>
    </div>
    <div id="b2">
    <form action="" method="POST">
    <center>
    <br>
    Search Area <select name= "search" class="area"> 
    <option>Colombo</option>
    <option>Kandy</option>
    <option>Kurunegala</option>
    <option>Ampara</option>
    <option>Anuradhapura</option>
    <option>Badulla</option>
    <option>Batticaloa</option>
    <option>Galle</option>
    <option>Gampaha</option>
    <option>Hambantota</option>
    <option>Jaffna</option>
    <option>Kalutara</option>
    <option>Kegalle</option>
    <option>Kilinochchi</option>
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
    </select>
    
    <input type= "submit" name="find" value="FIND" class = "find">
    </center>
    </div>
    <div id = "b3"> <center>
    <?php
	$conn = new MySQLi("localhost","root","","baaslk");
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$area=$_POST['search'];
	$sql = "SELECT *FROM postjob2 WHERE area = '$area' ORDER BY job_id DESC";
	$result = $conn->query($sql);
if($result -> num_rows >0){
	echo "<br><br>";
	while($row = $result-> fetch_assoc()){
		echo "Description : ";
		echo $row["job_description"];
		echo "<br><br>";
		echo "Customer Name : ";
		echo $row["username"];
		echo "<br><br>";
		echo "Address : ";
		echo $row["address"];
		echo "<br><br>";
		echo "Tel No : ";
		echo $row["tel_num"];
		echo "<br><br>";
		$t = preg_split("/(?<=\w)\b\s*/", $row["time"]);
		echo "Posted Date : ";
		echo $t[0];
		echo $t[1];
		echo $t[2];
		echo "<br><br>";
		echo "Posted Time : ";
		echo $t[3];
		echo $t[4];
		echo $t[5];
		echo "<br><br>";
		echo "<hr>";
		}
}else{
	echo " Sorry, No jobs your searched area. ";
	}
$conn -> close();
	//echo "Successfully";

}
?>


</center>
</div>
    </form>
    
    
    </div>
</div>
</div>
</body>
</html>

