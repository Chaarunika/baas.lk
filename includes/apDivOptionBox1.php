
 <div id="apDivOptionBox1">
   <form id="form2" name="form2" method="post" action="spProfEdit.php">
     <p>
       <label for="optionalEmail">Optional Email</label>
       <input type="text" name="optionalEmail" id="optionalEmail" />
     </p>
     <p>
       <label for="primaryMobileNo">Primary Mobile No</label>
       <input type="text" name="primaryMobile" id="primaryMobile" onblur="return ValidateMobNumber('primaryMobile')"  required/>
     </p>
     <p>
       <label for="optionalMobile">Secondary Mobile No</label>
       <input type="text" name="optionalMobile" id="optionalMobile" onblur="return ValidateMobNumber('optionalMobile')"  />
     </p>
     <p>
       <input type="submit" name="saveContact" id="saveContact" value="Save" />
     </p>
    </form>
 </div>