<!HTML DOCTYPE>
<html>
<head>
<style>
#main1{
	width:1000px;
	float:left;
}
#main2{
	width:720px;
	/*background-color:#A0A0A4;*/
	float:right;
	
}
#main3{
	width:350px;
	background: linear-gradient(to bottom, rgba(0,0,0,0.65) 0%,rgba(0,0,0,0) 100%);
	
	float:left;
	border-radius:20px;
}
#main4{
	width:350px;
	background: linear-gradient(to bottom, rgba(0,0,0,0) 1%,rgba(0,0,0,0) 18%,rgba(0,0,0,0.22) 41%,rgba(0,0,0,0.65) 87%);
	float:right;
	border-radius:20px;
}
.find{
	border-radius:20px;
	border-bottom-color:#FF7F00;
	border-left-color:#FFBF00;
	border-right-color:#FF9F00;
}
.area{
	border-radius:20px;
}
</style>
</head>
<body>
<div id = "main1">
<div id = "main2">
	<div id = "main3">
    <center>
    <h2> Recently Posted Jobs </h2>
    <center>
    <?php
	$query = "SELECT * FROM postjob2 ORDER BY time DESC LIMIT 4";
	$result2 = mysqli_query($conn, $query );
	$row = mysqli_fetch_array($result2,MYSQL_ASSOC);
	
	if($result2 -> num_rows >0){
		while($row = $result2 -> fetch_assoc()){
			echo $row['job_description'];
			echo "<br>";
			echo TP ." : ";
			echo $row['tel_num'];
			echo "<br>";
			echo ADDRESS ." : ";
			echo $row['address'];
			echo "<br>";
			$t = preg_split("/(?<=\w)\b\s*/", $row["time"]);
			echo POSTEDDATE." : ";
			echo $t[0];
			echo $t[1];
			echo $t[2];
			echo "<br>";
			echo POSTEDTIME." : ";
			echo $t[3];
			echo $t[4];
			echo $t[5];
			echo "<br><br>";
			echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~";
			echo "<br><br>";
			}
		}
	?>
	</center>
	</div>
	
	<div id = "main4">
    <center>
	<h2> Find Jobs </h2>
    </center>
	<center>
    <form action=" " method="POST">
    <br>
    Search Area <select name= "search" class="area" > 
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
    <br>
    <center>
    <?php
	$conn = new MySQLi("localhost","root","","bass1");
	if($_SERVER["REQUEST_METHOD"]=="POST"){
	$sql = "SELECT *FROM postjob2 WHERE area = '$_POST[search]'";
	$result = $conn->query($sql);
	if($result -> num_rows >0){
		echo "<br>";
		while($row = $result-> fetch_assoc()){
		//echo "Description : ";
		echo $row["job_description"];
		echo "<br>";
		echo "Address : ";
		echo $row["address"];
		echo "<br>";
		echo "Tel No : ";
		echo $row["tel_num"];
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
		echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~";
		}
	}else{
	echo " Sorry, No jobs your searched area. ";
	}
$conn -> close();
	//echo "Successfully";
}
?>
</form>
    
    </center>
	</div>
</div>
</div>
</body>
</html>