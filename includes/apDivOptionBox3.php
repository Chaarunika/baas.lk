<div id="apDivOptionBox3">
	  
	   <form id="form4" name="form4" method="post" action="spProfEdit.php">
     <p>
       <label for="oldPassword"><?php echo OLDPASSWORD ; ?></label>
       <input type="password"  name="oldPassword" id="oldPassword" autocomplete="off" required/>
     </p>
     <p>
       <label for="newPassword"><?php echo NEWPASSWORD ; ?></label>
       <input type="password"  name="newPassword" id="newPassword" autocomplete="off" required/>
     </p>
     <p>
       <label for="confirmPassword"><?php echo CONFIRMPASSWORD ; ?></label>

       <input type="password" name="confirmPassword" id="confirmPassword" autocomplete="off" required/>
     </p>
     <p>
       <input type="submit" name="password" id="password" value="<?php echo CHANGE ; ?>" />
     </p>
   </form>    
  </div>