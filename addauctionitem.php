

<div id='addauctionMainContainer'>

<form action="listbiditems.php" method="post" enctype="multipart/form-data" name="form1" id="form1">

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

    <label><?php echo MINIMUMBIDPRICE ; ?></label><br>
    <div class="input-group">
      <span class="input-group-addon" ><?php echo RS ; ?>.</span>
        <input type="number" placeholder="" name="minimumbid" required min=0 class="form-control" style="border: 1px solid rgba(240,240,1,1)"  aria-label="Amount (to the nearest dollar)">
      <span class="input-group-addon">.00</span>

    </div>

     <label><?php echo "Contact No." ; ?></label><br>
    <div class="input-group">
  
        <input placeholder="" name="minimumbid"  class="form-control" style="border: 1px solid rgba(240,240,1,1)"  aria-label="Amount (to the nearest dollar)">


    </div>

    <input type="submit" name="button" id="button" class="addAucSelectButton" value="<?php echo SAVE ; ?>" style="font-family:Arial, sans-serif;"/>  

  </div>

    <div id="apDivBidAddCol1" ><b>
    <!-- <p style="text-align:center ;font-size:18px"><?php echo REALESTATEAUCTION ; ?> </p></b> -->
  

    <label><?php echo LANDNAME ; ?> </label><br>
    <input type="text" name="item" placeholder="name" id="item" class="addAucSelectInput" required><br><br>

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
    <textarea name="description" id="description" placeholder="description" class="addAucSelectText" cols="45" rows="5" style="font-family:Arial, sans-serif;" required></textarea><br><br>
   


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
        //include ('includes/addLandDisplay.php');
        }

      $mess= "Auction item $item sucessfully created";
    }
  ?>

