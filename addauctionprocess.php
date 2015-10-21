

<?php include_once ('header.php')?>

<?php


require_once("dbconnect.php");
require_once("checkstatus.php");


$accountid=$_SESSION['userID'];
$item=$_POST['item'];
$description=$_POST['description'];
$closingtime=$_POST['closingtime'];
$town=$_POST['town'];

//$imagename=$_POST['uploadedimage'];
 //$target_path = "images/".$imagename;


 /*function GetImageExtension($imagetype)
     {
       if(empty($imagetype)) return false;

       switch($imagetype)
       {
          case 'image/bmp': return '.bmp';
           case 'image/gif': return '.gif';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;
       }
     }

*/

/*if (!empty($_FILES["uploadedimage"]["name"])) {
    $file_name=$_FILES["uploadedimage"]["name"];
    $temp_name=$_FILES["uploadedimage"]["tmp_name"];
    $imgtype=$_FILES["uploadedimage"]["type"];
    $ext= GetImageExtension($imgtype);*/
	
 
   
  //echo $imagename;
  
 /* if(move_uploaded_file($imagename, $target_path)) {*/

 

  
 

    




    $sql="insert into tblbiditems (accountid, biditem, biddesc, town, closingtime ) values ('$accountid' , '$item' , '$description' ,'$town', '$closingtime' )";
    $result=mysql_query($sql) or die("Error in adding: ".mysql_error());
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


</style>






</head>
<body>


<?php
	   
	   
	   
echo"<div id='apDiv2'>.<h2>$mess.<h2><table id='bidtbl' >
<tr height='100'><th width='200'>Land Name</th><th width='400'>$item</th></tr>
		<tr height='100'><th width='200'>Land Description</th><th word-wrap: break-word;
max-width: 150px;>$description</th></tr>
		 <tr height='100'><th>Closing Time</th><th>$closingtime</th></tr>
		 
		 
	<p> <a href=menu.php>menu</a></p>
		 
		 </div>";
		 
		 ?>
		 



		 
	   
	   
	   


</body>
</html>

