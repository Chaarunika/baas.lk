<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>baas.lk</title>
<style>
@import "http://fonts.googleapis.com/css?family=Fauna+One|Muli";
#mainm{

	
}
center,.area{
	font-family:'Fauna One',serif;	
}
#main{
	position: absolute;
	top :80px;
	width: 600px;
	height: 20px;
	background: rgba(255,255,255,0.5);
	float:right;
	font-family:'Fauna One',serif;	
}
#b1{
	width:1020px;
	background-color: #f8f8f8;
	padding-top: 10px;
	left: 10px;
	}
	
#b2{
	margin-top: 10px;
	width:500px;
	float:left;
	height: auto;
	background:#f8f8f8;
	border-style: solid;
	border-width: 1px;
	//background-color:#BA812C;

	}
#b3{
	margin-top: 310px;

	width:1020px;
	background: #f8f8f8;
	height: auto;

	/*border-bottom-style:dotted;
	border-top-style:dotted;*/
	}
#b4{
	margin-top: 10px;
	position: absolute;
	width:500px;
	background:#f8f8f8;
	margin-left:515px; 
	border-style: solid;
	border-width: 1px;

}
.find{
	font-family:'Fauna One',serif;
	//border-color:#F30;	
	border-radius: 3px;
	cursor:hand;
		}

#jobLogo{
	position: absolute;
	left: 1040px;
	top : 100px;
	width: 300px;
	background: #f8f8f8;
	border-radius:3px;
	border-width:1px;
	border-style:solid;
	font-family:'Fauna One',serif;
	
}
.area{
width:80%;
height:30px;
margin-top:5px;
border:none;
border-radius:3px;
padding:5px;
border-style: solid;
border-width: 1px;
border-color: rgba(240,240,1,1);
}
label1{
	font-size:25px;
}
label2{
	font-size:20px;
}
.find{
width:50%;
height:40px;
margin-top:15px;
margin-bottom:15px;
background-color:rgba(240,240,240,0.8);
border:1px solid rgba(0,0,0,0.2);
border-radius:3px;
font-family:'Fauna One',serif;
font-weight:500;
font-size:14px;
border-style: solid;
border-width: 1px;
}

</style>

<link rel="stylesheet" type="text/css" href="css/header.css">
</head>
<?php include 'header.php'; ?>
<body >

	<div id ="jobLogo"> 
		<center><h2><?php echo RECENTLYPOSTEDJOBS ; ?> </h2><center>
    	<?php
			$conn = new MySQLi("localhost","root","","baaslk");
			$query = "SELECT * FROM postjob2 ORDER BY job_id DESC LIMIT 4";
			$result2 = mysqli_query($conn, $query );
			$row = mysqli_fetch_assoc($result2);
	
			if($result2 -> num_rows >0){
			echo "------------------------------.<br>";
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
				echo "---------------------------";
				echo "<br><br>";
			}
		}
		?>
		</center>
	</div>

	<div id = "mainm">
		<div id="main">
			<div id = "b1">
				<center><label1><?php echo FINDJOBS ; ?></label1></center><br>
    		</div>
    		<div id="b2">
    			<form action="" method="POST">
    			<center><br><label2><?php echo SEARCHBYAREA ; ?> </label2>
    			<select name= "searchA" class="area"> 
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
    			<input type= "submit" name="findA" value="<?php echo SEARCH ; ?>" class = "find"></center>
    		</div>

        	<div id="b4">
    			<form action="" method="POST">
    			<center><br><label2><?php echo SEARCHBYCATAGORY ; ?> </label2>
    			<select name= "searchC" class="area"> 
	    		<option><?php echo ARCHI_DESIGN ?></option>
	            <option><?php echo BUILDER ?></option>
	            <option><?php echo CONSULTANCYSERVICE ?> </option>
	            <option><?php echo CONTRACTOR ?></option>
	            <option><?php echo ELECTRICIAN ?></option>
	            <option><?php echo MASON ?></option>
	            <option><?php echo MATERIAL ?> </option>
	            <option><?php echo REALESTATECOMPANY ?></option>
	            <option><?php echo TECHNICIAN ?> </option>
	            <option><?php echo CARPENTER ?></option>
	            <option><?php echo  HANDYMAN ?> </option>
	            <option><?php echo PAINTER ?></option>
	            <option><?php echo  PLUMBER ?></option>
    			</select>
    			<input type= "submit" name="findC" value="<?php echo SEARCH ; ?>" class = "find"></center>
    		</div>
    	</div>


			<div id = "b3"> <center>
				<?php
    			$conn = new MySQLi("localhost","root","","baaslk");
    				if($_SERVER["REQUEST_METHOD"]=="POST"){
    					if(isset($_POST["findA"])){
    						$area=$_POST['searchA'];
    						$sql = "SELECT *FROM postjob2 WHERE area = '$area' ORDER BY job_id DESC";
    					}
    					else if(isset($_POST["findC"])){
    						$type=$_POST['searchC'];
    						$sql = "SELECT *FROM postjob2 WHERE job_type = '$type' ORDER BY job_id DESC";
    					}
				    	$result = $conn->query($sql);
						if($result -> num_rows >0){
						echo "<br>";
						while($row = $result-> fetch_assoc()){
						//echo "Description : ";
						echo $row["job_description"];
						echo "<br>";
						echo CUSTOMERNAME ." : ";
						echo $row["username"];
						echo "<br>";
						echo ADDRESS." : ";
						echo $row["address"];
						echo "<br>";
						echo TP." : ";
						echo $row["tel_num"];
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
						echo "<br>";
						echo "<hr>";
						}
					}
					else{
						echo NOJOBSSEARCHAREA;
					}
				$conn -> close();
	//echo "Successfully";
    			}
    			?></center>
			</div>
</form>
</div>
</body>
</html>

