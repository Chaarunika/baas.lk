<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>baas.lk</title>
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

	}
#a5{
	width:600px;
	//background:#FF3;

	}
#a6{
	width:600px;
	float:right;
	//background-color:#FF3;
	border-color:#900;

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

<body >

	<?php include 'header.php'; ?>
<div id ="jobLogo"> 
<center>
    <h2><?php echo RECENTLYPOSTEDJOBS ; ?> </h2>
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
			echo CUSTOMERNAME." : ";
			echo $row['username'];
			echo "<br>";
			echo TP." : ";
			echo $row['tel_num'];
			echo "<br>";
			echo ADDRESS." : ";
			echo $row['address'];
			echo "<br>";
			$t = preg_split("/(?<=\w)\b\s*/", $row["time"]);
			echo POSTEDDATE ." : ";
			echo $t[0];
			echo $t[1];
			echo $t[2];
			echo "<br>";
			echo POSTEDTIME." : ";
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

<div id = "mainm">
<div id="main">
	<div id = "b1">
	<center><h2><?php echo FINDJOBS ; ?> </h2></center>
    <br>
    </div>
    <div id="b2">
    <form action="" method="POST">
    <center>
    <br>
    <?php echo SEARCHBYAREA ; ?> <select name= "search" class="area"> 
    		<option><?php echo COLOMBO ; ?></option>
            <option><?php echo KANDY; ?></option>
            <option><?php echo KURUNEGALA ; ?></option>
            <option><?php echo AMPARA ; ?></option>
            <option><?php echo ANURA ; ?></option>
            <option><?php echo BADULLA ; ?></option>
            <option><?php echo BATTICALOA ; ?></option>
            <option><?php echo GALLE ; ?></option>
            <option><?php echo GAMPAHA ; ?></option>
            <option><?php echo HAMBANTOTA ; ?></option>
            <option><?php echo JAFFNA ; ?></option>
            <option><?php echo KALUTARA ; ?></option>
            <option><?php echo KEGALLE ; ?></option>
            <option><?php echo KILINOCHCHI ; ?></option>
            <option><?php echo MANNAR ; ?></option>
            <option><?php echo MATALE ; ?></option>
            <option><?php echo MATARA ; ?></option>
            <option><?php echo MONERAGALA ; ?></option>
            <option><?php echo MULLITIVU ; ?></option>
            <option><?php echo NUWARAELIYA ; ?></option>
            <option><?php echo POLONNARUWA ; ?></option>
            <option><?php echo PUTTALAMA ; ?></option>
            <option><?php echo RATNAPURA ; ?></option>
            <option><?php echo TRINCOMALEE ; ?></option>
            <option><?php echo VAVUNIYA ; ?></option>
    </select>
    
    <input type= "submit" name="find" value="<?php echo SEARCH ; ?>" class = "find">
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
		//echo "Description : ";
		echo $row["job_description"];
		echo "<br><br>";
		echo CUSTOMERNAME ." : ";
		echo $row["username"];
		echo "<br><br>";
		echo ADDRESS." : ";
		echo $row["address"];
		echo "<br><br>";
		echo TP." : ";
		echo $row["tel_num"];
		echo "<br><br>";
		$t = preg_split("/(?<=\w)\b\s*/", $row["time"]);
		echo POSTEDDATE." : ";
		echo $t[0];
		echo $t[1];
		echo $t[2];
		echo "<br><br>";
		echo POSTEDTIME." : ";
		echo $t[3];
		echo $t[4];
		echo $t[5];
		echo "<br><br>";
		echo "<hr>";
		}
}else{
	echo NOJOBSSEARCHAREA;
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

