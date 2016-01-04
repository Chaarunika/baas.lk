
  <div id="apDivOptionBox2">
    <form action="spProfEdit.php" method="post" enctype="multipart/form-data" name="form3" id="form3">
      <p>
        <label for="spCategory">Service Provider Category</label>
        <select name="spCategory" id="spCategory">
          <option <?php if($sp['category'] == "Architect and Designer") echo "selected"; ?> >Architect and Designer</option>
          <option <?php if($sp['category'] == "Builder") echo "selected"; ?> >Builder</option>
          <option <?php if($sp['category'] == "Consultancy Service") echo "selected"; ?> >Consultancy Service</option>
          <option <?php if($sp['category'] == "Contractor") echo "selected"; ?> >Contractor</option>
          <option <?php if($sp['category'] == "Electrician") echo "selected"; ?> >Electrician</option>
          <option <?php if($sp['category'] == "Mason") echo "selected"; ?> >Mason</option>
          <option <?php if($sp['category'] == "Material Supplier") echo "selected"; ?> >Material Supplier</option>
          <option <?php if($sp['category'] == "Real Estate Company") echo "selected"; ?> >Real Estate Company</option>
          <option <?php if($sp['category'] == "Technician") echo "selected"; ?> >Technician</option>
          <option <?php if($sp['category'] == "Carpenter") echo "selected"; ?> >Carpenter</option>
          <option <?php if($sp['category'] == "HandyMan") echo "selected"; ?> >HandyMan</option>
          <option <?php if($sp['category'] == "Painter") echo "selected"; ?> >Painter</option>
          <option <?php if($sp['category'] == "Plumber") echo "selected"; ?> >Plumber</option>          
        </select>
      </p>
      <p>
        <label for="shortDescription">A short Description about You</label>
        <textarea name="shortDescription" id="shortDescription" cols="45" rows="5"  required> <?php if(isset($sp['descr'])) echo $sp['descr']; ?> </textarea>
      </p>
      <p>
        <label for="workHistory">Work History and Experience Details</label>
        <textarea name="workHistory" id="workHistory" cols="45" rows="8" required> <?php if(isset($sp['descr'])) echo $sp['workInfo']; ?> </textarea>
      </p>
     
      <p>
       <input type="submit" name="saveInfo" id="saveInfo" value="Save Changes" />
     </p>
    </form>
  </div>