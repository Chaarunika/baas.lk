.block label { display: inline-block; width: 140px; text-align: right; }





<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>

<?php
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo $error;
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            echo $message;
        }
    }
}
?>



    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
      <li class="active"><a href="#general" data-toggle="tab">General</a></li>
      <li><a href="#personal" data-toggle="tab">Personal</a></li>
	  <li><a href="#login" data-toggle="tab">Login</a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
		
        <div class="tab-pane fade in active" id="general">       
		
		<form action="components/update-profile-general.php" method="post" enctype="multipart/form-data" id="UploadForm">

                <div class="form-group float-label-control">                      
                    <label for="">First Name</label>
                    <input type="text" class="form-control" placeholder="<?php echo $rws['user_firstname'];?>" name="user_firstname" value="<?php echo $rws['user_firstname'];?>">
                </div>
                <div class="form-group float-label-control">  
                    <label for="">Last Name</label>
                    <input type="text" class="form-control" placeholder="<?php echo $rws['user_lastname'];?>" name="user_lastname" value="<?php echo $rws['user_lastname'];?>">
                </div>
                <div class="form-group float-label-control">
                    <label for="">Avatar</label>
                    <input name="ImageFile" type="file" id="uploadFile"/>
                    <div class="col-md-6">
                        <div class="shortpreview">
                            <label for="">Previous Avatar </label>
                            <br> 
                            <img src="userfiles/avatars/<?php echo $rws['user_avatar'];?>" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="shortpreview" id="uploadImagePreview">
                            <label for="">Current Uploaded Avatar </label>
                            <br> 
                            <div id="imagePreview"></div>
                        </div>
                    </div>
                </div>
          
		 <div class="submit">
		 
        <center>
            <button class="btn btn-primary ladda-button" data-style="zoom-in" type="submit"  id="SubmitButton" value="Upload" />Save Your Profile</button>
			</center>
		</div> 
		</form>

        </div>
		   
		
		
		
        <div class="tab-pane fade" id="personal">
		<form action="components/update-profile-personal.php" method="post" enctype="multipart/form-data" id="UploadForm">
		
            <div class="col-md-6">
                <div class="form-group float-label-control">
                    <label for="">Description</label>
                    <textarea class="form-control" placeholder="<?php echo $rwssp['description'];?>" rows="10" placeholder="<?php echo $rwssp['description'];?>" name="" value="<?php echo $rwssp['description'];?>"><?php echo $rwssp[''];?></textarea>
                </div>
            </div>
			
		<div class="submit">
        <center>
            <button class="btn btn-primary ladda-button" data-style="zoom-in" type="submit"  id="SubmitButton" value="Upload" />Save Your Profile</button>
			</center>
		</div>
			
		</form>	
        </div>
		
		
		
	    <div class="tab-pane fade" id="login">
            <div class="col-md-6">
			
			<hr/>
             <form method="post" action="edit.php" name="user_edit_form_name">
			<label for="user_name"><?php echo "New Username"; ?></label>
			<input id="user_name" type="text" name="user_name" pattern="[a-zA-Z0-9]{2,64}" required /> (<?php echo "Currently"; ?>: <?php echo htmlspecialchars($_SESSION['user_name']); ?>)
			<input type="submit" name="user_edit_submit_name" value="<?php echo "Change Username"; ?>" />
			</form>
			
			<hr/>
			
			<!-- edit form for user email / this form uses HTML5 attributes, like "required" and type="email" -->
			<form method="post" action="edit.php" name="user_edit_form_email">
				<br>
				<label for="user_email"><?php echo "New Email"; ?></label>
				<input id="user_email" type="email" name="user_email" required /> (<?php echo "Currently"; ?>: <?php echo htmlspecialchars($_SESSION['user_email']); ?>)
				<input type="submit" name="user_edit_submit_email" value="<?php echo "Change Email"; ?>" />
			</form><hr/>

			<!-- edit form for user's password / this form uses the HTML5 attribute "required" -->
			<form method="post" action="edit.php" name="user_edit_form_password">
				<label for="user_password_old"><?php echo "Old password"; ?></label>
				
				<input id="user_password_old" type="password" name="user_password_old" autocomplete="off" />
				<label for="user_password_new">  <?php echo " New password"; ?></label>
				<input id="user_password_new" type="password" name="user_password_new" autocomplete="off" />
				<label for="user_password_repeat"> <?php echo "New password repeat"; ?></label>
				<input id="user_password_repeat" type="password" name="user_password_repeat" autocomplete="off" />
<br>
				<input type="submit" name="user_edit_submit_password" value="<?php echo "Change password"; ?>" />
			</form><hr/>

			<!-- backlink -->

			<a href="index.php"><?php echo "Back to login"; ?></a>
			
			
			

			
			  
                
            </div>
			
        </div>
				
				
			
      
			
    </div>     
    <br>
 
</form>