
  <div id="apDivOptionBox2">
    <form action="spProfEdit.php" method="post" enctype="multipart/form-data" name="form3" id="form3">
      <p>
        <label for="spCategory">Service Provider Category</label>
        <select name="spCategory" id="spCategory">
          <option>Architect and Designer</option>
          <option>Builder</option>
          <option>Consultancy Service</option>
          <option>Contractor</option>
          <option>Electrician</option>
          <option>Mason</option>
          <option>Material Supplier</option>
          <option>Real Estate Company</option>
          <option>Technician</option>
          <option>Carpenter</option>
          <option>HandyMan</option>
          <option>Painter</option>
          <option>Plumber</option>          
        </select>
      </p>
      <p>
        <label for="shortDescription">A short Description about You</label>
        <textarea name="shortDescription" id="shortDescription" cols="45" rows="5" required></textarea>
      </p>
      <p>
        <label for="workHistory">Work History and Experience Details</label>
        <textarea name="workHistory" id="workHistory" cols="45" rows="8" required></textarea>
      </p>
     
      <p>
       <input type="submit" name="saveInfo" id="saveInfo" value="Save Changes" />
     </p>
    </form>
  </div>