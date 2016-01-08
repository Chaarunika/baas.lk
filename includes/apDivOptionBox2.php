
  <div id="apDivOptionBox2">
    <form action="spProfEdit.php" method="post" enctype="multipart/form-data" name="form3" id="form3">
      <p>
        <label for="spCategory"><?php echo SERVICEPROVIDERCATEGORY ; ?></label>
        <select name="spCategory" id="spCategory">
          <option <?php if($sp['category'] == "Architect and Designer") echo "selected"; ?> ><?php echo ARCHI_DESIGN ?></option>
          <option <?php if($sp['category'] == "Builder") echo "selected"; ?> ><?php echo BUILDER ?></option>
          <option <?php if($sp['category'] == "Consultancy Service") echo "selected"; ?> ><?php echo CONSULTANCYSERVICE ?></option>
          <option <?php if($sp['category'] == "Contractor") echo "selected"; ?> ><?php echo CONTRACTOR ?></option>
          <option <?php if($sp['category'] == "Electrician") echo "selected"; ?> ><?php echo ELECTRICIAN ?></option>
          <option <?php if($sp['category'] == "Mason") echo "selected"; ?> ><?php echo MASON ?></option>
          <option <?php if($sp['category'] == "Material Supplier") echo "selected"; ?> ><?php echo MATERIAL ?></option>
          <option <?php if($sp['category'] == "Real Estate Company") echo "selected"; ?> ><?php echo REALESTATECOMPANY ?></option>
          <option <?php if($sp['category'] == "Technician") echo "selected"; ?> ><?php echo TECHNICIAN ?></option>
          <option <?php if($sp['category'] == "Carpenter") echo "selected"; ?> ><?php echo CARPENTER ?></option>
          <option <?php if($sp['category'] == "HandyMan") echo "selected"; ?> ><?php echo  HANDYMAN ?></option>
          <option <?php if($sp['category'] == "Painter") echo "selected"; ?> ><?php echo PAINTER ?></option>
          <option <?php if($sp['category'] == "Plumber") echo "selected"; ?> ><?php echo  PLUMBER ?></option>          
        </select>
      </p>
      <p>
        <label for="shortDescription"><?php echo ASHORTDESCRIPTIONABOUTYOU ; ?></label>
        <textarea name="shortDescription" id="shortDescription" cols="45" rows="5"  required> <?php if(isset($sp['descr'])) echo $sp['descr']; ?> </textarea>
      </p>
      <p>
        <label for="workHistory"><?php echo WORKHISTORYANDEXPERIENCEDETAILS ; ?></label>
        <textarea name="workHistory" id="workHistory" cols="45" rows="8" required> <?php if(isset($sp['descr'])) echo $sp['workInfo']; ?> </textarea>
      </p>
     
      <p>
       <input type="submit" name="saveInfo" id="saveInfo" value="<?php echo SAVE ; ?>" />
     </p>
    </form>
  </div>