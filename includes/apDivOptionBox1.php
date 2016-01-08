
 <div id="apDivOptionBox1">
   <form id="form2" name="form2" method="post" action="spProfEdit.php">
     <p>
       <label for="optionalEmail"><?php echo OPTIONALEMAIL ; ?></label>
       <input type="text" name="optionalEmail" id="optionalEmail" <?php if(isset($sp['opEmail'])) echo "value='".$sp['opEmail']."'"; ?> />
     </p>
     <p>
       <label for="primaryMobileNo"><?php echo PRIMARYMOBILENUMBER ; ?>*</label>
       <input type="text" name="primaryMobile" id="primaryMobile" onblur="return ValidateMobNumber('primaryMobile')" <?php if(isset($sp['contactNo'])) echo "value=".$sp['contactNo']; ?> required/>
     </p>
     <p>
       <label for="optionalMobile"><?php echo SECONDARYMOBILENUMBER ; ?></label>
       <input type="text" name="optionalMobile" id="optionalMobile" onblur="return ValidateMobNumber('optionalMobile')"  <?php if(isset($sp['opContactNo'])) echo "value=".$sp['opContactNo']; ?> />
     </p>
     <p>
       <input type="submit" name="saveContact" id="saveContact" value="<?php echo SAVE ; ?>" />
     </p>
    </form>
 </div>