<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include ('_database/database.php');
$sql = "SELECT user_avatar FROM users where user_name='$_SESSION[username]' ";
$result = mysqli_query($dbConnection,$sql) or die(mysqli_error($dbConnection)); 
$rws = mysqli_fetch_array($result);

$foldername = "Gallery/galleryUploads/".$_SESSION['username']."/";
?>


<div id="galleryAddBox">
	
  <form  id="uploadform0" enctype="multipart/form-data" method="post" action="upload.php">
    <div id= "ProfPicChange"  class= "picChange">
      <div class="avatar-zone" 
        style="background-image:url(
        <?php 
          $target_file = $foldername."0.jpg";
          if (file_exists($target_file)){
            echo $foldername."0.jpg" ; 
          } 
          else{
            echo $rws['user_avatar'];
          } 
        ?>
        )" 
      >   
      </div>  
      <input type="hidden" name="galleryNum" value="0">   
      <input type="file" name="fileToUpload" id="fileToUpload" class="upload_btn" onchange="document.getElementById('uploadform0').submit();" />
      <div class="overlay-layer" >Upload</div>
    </div>
  </form>
	

   
  <div id="workPhotos">
  		
  <form  id="uploadform1" enctype="multipart/form-data" method="post" action="upload.php">
    <div id="workPhoto1" class= "picChange">
      <div class="avatar-zone" 
        style="background-image:url(
        <?php 
          $target_file = $foldername."1.jpg";
          if (file_exists($target_file)){
            echo $foldername."1.jpg" ; 
          } 
          else{
            echo "Gallery/galleryUploads/default.gif";
          } 
        ?>
        )" 
      >   
      </div>  
      <input type="hidden" name="galleryNum" value="1">      
      <input type="file" name="fileToUpload" id="fileToUpload" class="upload_btn" onchange="document.getElementById('uploadform1').submit();" />
      <div class="overlay-layer">Upload</div>
    </div>
  </form>

  <form  id="uploadform2" enctype="multipart/form-data" method="post" action="upload.php">
    <div id="workPhoto2" class= "picChange">
      <div class="avatar-zone" 
        style="background-image:url(
        <?php 
          $target_file = $foldername."2.jpg";
          if (file_exists($target_file)){
            echo $foldername."2.jpg" ; 
          } 
          else{
            echo "Gallery/galleryUploads/default.gif";
          } 
        ?>
        )" 
      >   
      </div>  
      <input type="hidden" name="galleryNum" value="2">   
      <input type="file" name="fileToUpload" id="fileToUpload" class="upload_btn" onchange="document.getElementById('uploadform2').submit();" />
      <div class="overlay-layer">Upload</div>
    </div>
  </form>

  <form  id="uploadform3" enctype="multipart/form-data" method="post" action="upload.php">
    <div id="workPhoto3" class= "picChange">
      <div class="avatar-zone" 
        style="background-image:url(
        <?php 
          $target_file = $foldername."3.jpg";
          if (file_exists($target_file)){
            echo $foldername."3.jpg" ; 
          } 
          else{
            echo "Gallery/galleryUploads/default.gif";
          } 
        ?>
        )" 
      >   
      </div>  
      <input type="hidden" name="galleryNum" value="3">   
      <input type="file" name="fileToUpload" id="fileToUpload" class="upload_btn" onchange="document.getElementById('uploadform3').submit();" />
      <div class="overlay-layer">Upload</div>
    </div>
  </form>

  <form  id="uploadform4" enctype="multipart/form-data" method="post" action="upload.php">
    <div id="workPhoto4" class= "picChange">
      <div class="avatar-zone" 
        style="background-image:url(
        <?php 
          $target_file = $foldername."4.jpg";
          if (file_exists($target_file)){
            echo $foldername."4.jpg" ; 
          } 
          else{
            echo "Gallery/galleryUploads/default.gif";
          } 
        ?>
        )" 
      >   
      </div>  
      <input type="hidden" name="galleryNum" value="4">   
      <input type="file" name="fileToUpload" id="fileToUpload" class="upload_btn" onchange="document.getElementById('uploadform4').submit();" />
      <div class="overlay-layer">Upload</div>
    </div>
  </form>


  <form  id="uploadform5" enctype="multipart/form-data" method="post" action="upload.php">
    <div id="workPhoto5" class= "picChange">
      <div class="avatar-zone" 
        style="background-image:url(
        <?php 
          $target_file = $foldername."5.jpg";
          if (file_exists($target_file)){
            echo $foldername."5.jpg" ; 
          } 
          else{
            echo "Gallery/galleryUploads/default.gif";
          } 
        ?>
        )" 
      >   
      </div>  
      <input type="hidden" name="galleryNum" value="5">   
      <input type="file" name="fileToUpload" id="fileToUpload" class="upload_btn" onchange="document.getElementById('uploadform5').submit();" />
      <div class="overlay-layer">Upload</div>
    </div>
  </form>

  <form  id="uploadform6" enctype="multipart/form-data" method="post" action="upload.php">
    <div id="workPhoto6" class= "picChange">
      <div class="avatar-zone" 
        style="background-image:url(
        <?php 
          $target_file = $foldername."6.jpg";
          if (file_exists($target_file)){
            echo $foldername."6.jpg" ; 
          } 
          else{
            echo "Gallery/galleryUploads/default.gif";
          } 
        ?>
        )" 
      >   
      </div>  
      <input type="hidden" name="galleryNum" value="6">   
      <input type="file" name="fileToUpload" id="fileToUpload" class="upload_btn" onchange="document.getElementById('uploadform6').submit();" />
      <div class="overlay-layer">Upload</div>
    </div>
  </form>

  <form  id="uploadform7" enctype="multipart/form-data" method="post" action="upload.php">
    <div id="workPhoto7" class= "picChange">
      <div class="avatar-zone" 
        style="background-image:url(
        <?php 
          $target_file = $foldername."7.jpg";
          if (file_exists($target_file)){
            echo $foldername."7.jpg" ; 
          } 
          else{
            echo "Gallery/galleryUploads/default.gif";
          } 
        ?>
        )" 
      >   
      </div>  
      <input type="hidden" name="galleryNum" value="7">   
      <input type="file" name="fileToUpload" id="fileToUpload" class="upload_btn" onchange="document.getElementById('uploadform7').submit();" />
      <div class="overlay-layer">Upload</div>
    </div>
  </form>

  <form  id="uploadform8" enctype="multipart/form-data" method="post" action="upload.php">
    <div id="workPhoto8" class= "picChange">
      <div class="avatar-zone" 
        style="background-image:url(
        <?php 
          $target_file = $foldername."8.jpg";
          if (file_exists($target_file)){
            echo $foldername."8.jpg" ; 
          } 
          else{
            echo "Gallery/galleryUploads/default.gif";
          } 
        ?>
        )" 
      >   
      </div>  
      <input type="hidden" name="galleryNum" value="8">   
      <input type="file" name="fileToUpload" id="fileToUpload" class="upload_btn" onchange="document.getElementById('uploadform8').submit();" />
      <div class="overlay-layer">Upload</div>
    </div>
  </form>

  <form  id="uploadform9" enctype="multipart/form-data" method="post" action="upload.php">
    <div id="workPhoto9" class= "picChange">
      <div class="avatar-zone" 
        style="background-image:url(
        <?php 
          $target_file = $foldername."9.jpg";
          if (file_exists($target_file)){
            echo $foldername."9.jpg" ; 
          } 
          else{
            echo "Gallery/galleryUploads/default.gif";
          } 
        ?>
        )" 
      >   
      </div>  
      <input type="hidden" name="galleryNum" value="9">   
      <input type="file" name="fileToUpload" id="fileToUpload" class="upload_btn" onchange="document.getElementById('uploadform9').submit();" />
      <div class="overlay-layer">Upload</div>
    </div>
  </form>
      	
 
      
    
        
  </div>

</div>
