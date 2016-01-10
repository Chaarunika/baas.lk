<html>
<head>

<title>baas.lk</title>
<meta charset="UTF-8">

<script language="javascript" type="text/javascript" src="javascript/datetimepicker.js"></script>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">


<link rel="stylesheet" type="text/css" href="css/header.css">

<style type="text/css">

#addauctionMainContainer{
  position: absolute;
  top:100px;
  background-color: rgba(51,51,51,0.5);
}

#apDivBidAddCol2 {
  position:relative;
  width:500px;
  //height:700px;
  margin-bottom: 10px;
  z-index:1;
  left: 700px;
  padding: 20px;
  padding-bottom: 5px;
  background-color: #f0f0f0;
  //border-radius: 20px;
  //border:1px solid rgba(51,51,51,0.5);
  border: 1px solid rgba(240,240,1,1);
}

#apDivBidAddCol2 {
  position:relative;
  width:500px;
  //height:700px;
  margin-bottom: 10px;
  z-index:1;
  left: 700px;
  padding: 20px;
  padding-bottom: 5px;
  background-color: #f0f0f0;
  //border-radius: 20px;
  //border:1px solid rgba(51,51,51,0.5);
  border: 1px solid rgba(240,240,1,1);
}

.addAucSelectInput{
width:100%;
height:30px;
margin-top:10px;
border:none;
border-radius:3px;
padding:5px;
border-style: solid;
border-width: 1px;
border-color: rgba(240,240,1,1);
}
.addAucSelectText{
width:100%;
height:60px;
margin-top:10px;
border:none;
border-radius:3px;
padding:5px;
resize:none;
border-style: solid;
border-width: 1px;
border-color: rgba(240,240,1,1);

}


.addAucSelectButton{
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
.addAucSelectButton:hover{
  background-color:#a6a6a6;
}
.addAucSelect{
width:100%;
height:30px;
margin-top:5px;
border:none;
border-radius:3px;
padding:5px;
border-style: solid;
border-width: 1px;
border-color: rgba(240,240,1,1);
}

.fileUpload {
    position: relative;
    overflow: hidden;
    margin: 10px;
}
.fileUpload input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}


/* Display */

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

#addLandDisplayTable{
  position: absolute;
  left: 750px;
  top:200px;
}


</style>


</head>

<body>
<?php include ('header.php') ; ?>

<div id='addauctionMainContainer'>

<form action="addauctionitem.php" method="post" enctype="multipart/form-data" name="form1" id="form1">

    <div id='apDivBidAddCol2'>
          <label><?php echo ADDPICTURE ; ?></label><br>

    <input id="uploadFile" placeholder="<?php echo CHOOSEFILE ; ?>" style="width:50%;border: 1px solid rgba(240,240,1,1)" disabled="disabled" />
        <div class="fileUpload btn btn-primary">
          <span><?php echo UPLOAD ; ?></span>
          <input id="uploadBtn" name="fileField" type="file" class="upload" />
        </div>

    <script>
    document.getElementById("uploadBtn").onchange = function () {
      document.getElementById("uploadFile").value = this.value;
    };
    </script>
    <br>   

    <label><?php echo BIDCLOSINGTIME ; ?></label><br>
    <input placeholder="<?php echo SELECTDATEFROMTHECALENDAR ; ?>" name="closingtime" id="demo3" class="addAucSelectInput" style="width:50%"  readonly  required>
    <a href="javascript:NewCal('demo3','mmmddyyyy',true,12)">
        <img src="pics/cal.png" width="50" height="50" border="0" alt="Pick a date" style="margin-left:10px">
    </a><br><br>

    <label><?php echo MINIMUMBIDPRICE ; ?></label><br>
    <div class="input-group">
      <span class="input-group-addon" ><?php echo RS ; ?>.</span>
        <input type="number" name="minimumbid" required min=0 class="form-control" style="border: 1px solid rgba(240,240,1,1)"  aria-label="Amount (to the nearest dollar)">
      <span class="input-group-addon">.00</span>
    </div>
    </div>

    <div id="#apDivBidAddCol2" >
    <p style="text-align:center ;font-size:18px"><?php echo REALESTATEAUCTION ; ?> </p>
  

    <label><?php echo LANDNAME ; ?> </label><br>
    <input type="text" name="item" id="item" class="addAucSelectInput" required><br><br>

    <label><?php echo TOWN ; ?></label><br>
    <select name=town class="addAucSelect" >
      <option value=" <?php echo COLOMBO ; ?>"><?php echo COLOMBO ; ?></option>
      <option value=" <?php echo KANDY; ?>"><?php echo KANDY; ?></option>
      <option value=" <?php echo KURUNEGALA ; ?>"><?php echo KURUNEGALA ; ?></option>
      <option value=" <?php echo AMPARA ; ?>"><?php echo AMPARA ; ?></option>
      <option value=" <?php echo ANURA ; ?>"><?php echo ANURA ; ?></option>
      <option value=" <?php echo BADULLA ; ?>"><?php echo BADULLA ; ?></option>
      <option value=" <?php echo BATTICALOA ; ?>"><?php echo BATTICALOA ; ?></option>
      <option value=" <?php echo GALLE ; ?>"><?php echo GALLE ; ?></option>
      <option value=" <?php echo GAMPAHA ; ?>"><?php echo GAMPAHA ; ?></option>
      <option value=" <?php echo HAMBANTOTA ; ?>"><?php echo HAMBANTOTA ; ?></option>
      <option value=" <?php echo JAFFNA ; ?>"><?php echo JAFFNA ; ?></option>
      <option value=" <?php echo KALUTARA ; ?>"><?php echo KALUTARA ; ?></option>
      <option value=" <?php echo KEGALLE ; ?>"><?php echo KEGALLE ; ?></option>
      <option value=" <?php echo KILINOCHCHI ; ?>"><?php echo KILINOCHCHI ; ?></option>
      <option value="<?php echo MANNAR ; ?>"><?php echo MANNAR ; ?></option>
      <option value="<?php echo MATALE ; ?>"><?php echo MATALE ; ?></option>
      <option value="<?php echo MATARA ; ?>"><?php echo MATARA ; ?></option>
      <option value="<?php echo MONERAGALA ; ?>"><?php echo MONERAGALA ; ?></option>
      <option value="<?php echo MULLITIVU ; ?>"><?php echo MULLITIVU ; ?></option>
      <option value="<?php echo NUWARAELIYA ; ?>"><?php echo NUWARAELIYA ; ?></option>
      <option value="<?php echo POLONNARUWA ; ?>"><?php echo POLONNARUWA ; ?></option>
      <option value="<?php echo PUTTALAMA ; ?>"><?php echo PUTTALAMA ; ?></option>
      <option value="<?php echo RATNAPURA ; ?>"><?php echo RATNAPURA ; ?></option>
      <option value="<?php echo TRINCOMALEE ; ?>"><?php echo TRINCOMALEE ; ?></option>
      <option value="<?php echo TRINCOMALEE ; ?>"><?php echo VAVUNIYA ; ?></option>
    </select><br><br>

    <label><?php echo DESCRIPTION ; ?></label><br>
    <textarea name="description" id="description" class="addAucSelectText" cols="45" rows="5" style="font-family:Arial, sans-serif;" required></textarea><br><br>
   


    <input type="submit" name="button" id="button" class="addAucSelectButton" value="<?php echo SAVE ; ?>" style="font-family:Arial, sans-serif;"/>  

</div>

</form>
</div> <!--main container close -->

  <?php    
    require_once("_database/database.php");

    if(isset($_POST['item']))
    {

      $accountid=$_SESSION['userID'];
      $item=$_POST['item'];
      $description= $_POST['description'];
      $closingtime=$_POST['closingtime'];
      $town=$_POST['town'];
      $minimumbid=$_POST['minimumbid'];

      $img = $_FILES['fileField']['name'];
      $img_temp = $_FILES['fileField']['tmp_name'];
      $img_path = 'uploaded_img/' . $img;

      move_uploaded_file($_FILES['fileField']['tmp_name'],$img_path);

      $sql=" INSERT INTO baaslk.tblbiditems (accountno, biditem, biddesc, town, image_path, closingtime, minimumbid ) VALUES ($accountid ,'$item' , '$description' ,'$town','$img', '$closingtime' , '$minimumbid' )";
      $result = mysqli_query($database,$sql);
        
      if(!$result){
            die("Database query failed.");
          }
      else
        {
        include ('includes/addLandDisplay.php');
        }

      $mess= "Auction item $item sucessfully created";
    }
  ?>


</body>
</html>