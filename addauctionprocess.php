<link rel="stylesheet" type="text/css" href="css/header.css">
<?php include_once ('header.php')?>

<?php


require_once("_database/database.php");


$accountid=$_SESSION['userID'];
$item=$_POST['item'];
$description= ($_POST['description']);
$closingtime=$_POST['closingtime'];
$town=$_POST['town'];

$img = $_FILES['fileField']['name'];
$img_temp = $_FILES['fileField']['tmp_name'];
$img_path = 'uploaded_img/' . $img;

move_uploaded_file($_FILES['fileField']['tmp_name'],$img_path);



    $sql=" INSERT INTO baaslk.tblbiditems (accountno, biditem, biddesc, town, image_path, closingtime ) VALUES ($accountid , '".$item."' , '".$description."' ,'".$town."','".$img."', '".$closingtime."' )";
    
    $result = mysqli_query($database,$sql);
	
	
    
    if(!$result){
      die("Database query failed.");
    }
	
	else
	{
		
		echo ($result);
			
	}

    $mess= "Auction item $item sucessfully created";

    /*}else{

 

   exit("Error While uploading image on the server");}

*/

?>
<html>
<head>
<title>auction process</title>


<link rel="stylesheet" type="text/css" href="css/header.css">
<style type="text/css">
#apDiv2 {
	position:absolute;
	width:600px;
	height:600px;
	z-index:2;
	left: 450px;
	top: 186px;
}

h2{ font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    
	font-size: 40px;
	color: #213266;
	font-weight:bold;}
	
	#bidtbl {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    
}

#bidtbl td, #bidtbl th { height: 50px;


	color: #213266;
    font-size: 1.5em;
    border: 5px solid #990000;
    padding: 3px 7px 2px 7px;
}

#bidtbl th {
    font-size: 1.5em;
    text-align: left;
    padding-top: 5px;
    padding-bottom: 4px;
    background-color: #FFBF00;
    color: #ffffff;
}

.tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;border-width:1px;border-style:solid;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
.tg .tg-yw4l{vertical-align:top}
.tg .tg-b7b8{background-color:#f9f9f9;vertical-align:top}



</style>

</head>
<body>


<?php  
	   
	   
/*echo"<div id='apDiv2'>.<h2>$mess.<h2><table id='bidtbl' >
<tr height='100'><th width='200'>Land Name</th><th width='400'>$item</th></tr>
		<tr height='100'><th width='200'>Land Description</th><th word-wrap: break-word;
max-width: 150px;>$description</th></tr>
		 <tr height='100'><th>Closing Time</th><th>$closingtime</th></tr>
		 
		 
	<p> <a href=menu.php>menu</a></p>
		 
		 </div>";*/
		 
		 ?>

<div id="apDiv2">
<table width="500" class="tg" style='border-width:0px'>
  <tr>
    <th class="tg-031e" colspan="2">Auction Item Details</th>
  </tr>
  <tr>
    <td class="tg-b7b8">Land Name</td>
    <td class="tg-b7b8"><?php echo "$item" ; ?></td>
    
    </tr>
  <tr>
    <td class="tg-yw4l">Description</td>
    <td class="tg-yw4l"><?php echo "$description" ; ?></td>
    
    </tr>
  <tr>
    <td class="tg-yw4l">Closing Date</td>
    <td class="tg-yw4l"><?php echo "$closingtime" ; ?></td>
   
  </tr>
  


  </table>		
</div>  



		 
	   
	   
	   


</body>
</html>

