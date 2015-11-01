<!HTML DOCTYPE>
<html>
<head>
<style>
#mainm{
	width:950px;
	height:auto;
	float:left}

#main{
	width: 600px;
	height: 1000px;
	background:#FC3;
	float:right;
	font-family:Verdana, Geneva, sans-serif;
	border-bottom-style:dotted;
	border-left-style:dotted;
	border-right-style:dotted;
	border-top-style:dotted;
	font-style:oblique;
	border-radius:20px;
}
#b1{
	width:600px;
	}
	
#b2{
	width:600px;
	float:left;
	background:#FF3;
	background-color:#BA812C;
	border-bottom-style:dotted;
	border-top-style:dotted;
	}
#b3{
	width:600px;
	background:#FF3;
	/*border-bottom-style:dotted;
	border-top-style:dotted;*/
	}
#a4{
	width:600px;
	background:#FF3;
	border-bottom-style:dotted;
	border-top-style:dotted;
	}
#a5{
	width:600px;
	background:#FF3;
	border-bottom-style:dotted;
	border-top-style:dotted;
	}
#a6{
	width:600px;
	float:right;
	background-color:#FF3;
	border-color:#900;
	border-bottom-style:dotted;
	border-top-style:dotted;
	border-left-style:dotted;
	}
.find{
	background-color:#F90;
	font:"Courier New", Courier, monospace;
	border-color:#F30;	
	}
.area{
	background-color:#FFA;
	/*font-style:oblique;*/
	border-radius : 20px;}
.find{
	font:"Courier New", Courier, monospace;
	border-color:#F30;	
	border-radius: 20px;}
</style>

<head>
<body>

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
	$conn = new MySQLi("localhost","root","","bass1");
if($_SERVER["REQUEST_METHOD"]=="POST"){

	$sql = "SELECT *FROM postjob2 WHERE area = '$_POST[search]'";
	$result = $conn->query($sql);
if($result -> num_rows >0){
	echo "<br><br>";
	while($row = $result-> fetch_assoc()){
		echo "Description : ";
		echo $row["job_description"];
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
		}
}else{
	echo " Sorry, No jobs your searched area. ";
	}
$conn -> close();
	//echo "Successfully";

}
?>
<?php
$query = "SELECT * FROM postjob2 ORDER BY time DESC LIMIT 5";
$result2 = mysqli_query($conn, $query );
$row = mysqli_fetch_array($result2,MYSQL_ASSOC);

if($result2 -> num_rows >0){
	while($row = $result2 -> fetch_assoc()){
		echo $row['job_description'];
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
		echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~";
		echo "<br><br>";
		
		}
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

