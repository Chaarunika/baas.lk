<div id="searchBox">

  <div class="Dropdn" id="apDivSearchBar">
    <label for="SearchBar"></label>
    <label for="Area"></label>
    
    <form name="formSearch" method="post" action="searchSP.php">
      
      <input name="SearchBar" type="text" class="SearchBar" id="SearchBar" <?php if(isset($_SESSION['tempSearchTerm'] )) { echo "value =\"".$_SESSION['tempSearchTerm']."\" " ; } else{ echo "value= \"\" ";} ?> >   
      <p class="check">     
        <label>
        <input type="checkbox" name="CheckboxGroup1" value="checkbox" id="CheckboxGroup1_0">
        Order By Rating</label><br><br>

        <!--
        <label>
        <input type="checkbox" name="CheckboxGroup1" value="checkbox" id="CheckboxGroup1_2">
        Order By Experience</label><br>  -->
      </p>  
   
      <input name="SearchButton" type="submit" class="MyButton" id="SearchButton" value="Submit">
      
      <label for="Select"></label>
      <select name="category" class="Dropdn" id="Select" >
        <option  <?php if(isset($_SESSION['tempSearchCategory'])) {if($_SESSION['tempSearchCategory']== "ALL"){echo "selected";} } ?>  >ALL</option>
        <option<?php if(isset($_SESSION['tempSearchCategory'])) {if($_SESSION['tempSearchCategory']== "Architect and Designer"){echo "selected";} } ?> >Architect and Designer </option>
        <option <?php if(isset($_SESSION['tempSearchCategory'])) {if($_SESSION['tempSearchCategory']== "Builder"){echo "selected";} } ?> >Builder</option>
        <option <?php if(isset($_SESSION['tempSearchCategory'])) {if($_SESSION['tempSearchCategory']== "Consultancy Service"){echo "selected";} } ?> >Consultancy Service</option>
        <option<?php if(isset($_SESSION['tempSearchCategory'])) {if($_SESSION['tempSearchCategory']== "Contractor"){echo "selected";} } ?> >Contractor</option>
    	  <option <?php if(isset($_SESSION['tempSearchCategory'])) {if($_SESSION['tempSearchCategory']== "Electrician"){echo "selected";} } ?> >Electrician</option>
    	  <option <?php if(isset($_SESSION['tempSearchCategory'])) {if($_SESSION['tempSearchCategory']== "Mason"){echo "selected";} } ?> >Mason</option>
        <option <?php if(isset($_SESSION['tempSearchCategory'])) {if($_SESSION['tempSearchCategory']== "Material Supplier"){echo "selected";} } ?> >Material Supplier</option>
        <option <?php if(isset($_SESSION['tempSearchCategory'])) {if($_SESSION['tempSearchCategory']== "Real Estate Company"){echo "selected";} } ?> >Real Estate Company</option>
        <option <?php if(isset($_SESSION['tempSearchCategory'])) {if($_SESSION['tempSearchCategory']== "Technician"){echo "selected";} } ?> >Technician</option>
        <option <?php if(isset($_SESSION['tempSearchCategory'])) {if($_SESSION['tempSearchCategory']== "Carpenter"){echo "selected";} } ?>  >Carpenter</option>
        <option <?php if(isset($_SESSION['tempSearchCategory'])) {if($_SESSION['tempSearchCategory']== "HandyMan"){echo "selected";} } ?> >HandyMan</option>
        <option <?php if(isset($_SESSION['tempSearchCategory'])) {if($_SESSION['tempSearchCategory']== "Painter"){echo "selected";} } ?> >Painter</option>
        <option <?php if(isset($_SESSION['tempSearchCategory'])) {if($_SESSION['tempSearchCategory']== "Plumber"){echo "selected";} } ?> >Plumber</option>
      </select>

      <label for="Area"></label>
      <select name="location" size="1" class="SearchTerm" id="Area">
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== "ANY AREA"){echo "selected";} } ?> >ANY AREA</option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== "Colombo"){echo "selected";} } ?> >Colombo</option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== "Kandy"){echo "selected";} } ?> >Kandy</option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== "Kurunegala"){echo "selected";} } ?> >Kurunegala</option>     
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== "Ampara"){echo "selected";} } ?> >Ampara</option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== "Anuradhapura"){echo "selected";} } ?> >Anuradhapura</option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== "Badulla"){echo "selected";} } ?> >Badulla</option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== "Batticaloa"){echo "selected";} } ?> >Batticaloa</option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== "Galle"){echo "selected";} } ?> >Galle</option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== "Gampaha"){echo "selected";} } ?> >Gampaha</option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== "Hambantota"){echo "selected";} } ?> >Hambantota</option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== "Jaffna"){echo "selected";} } ?> >Jaffna</option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== "Kalutara"){echo "selected";} } ?> >Kalutara</option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== "Kegalle"){echo "selected";} } ?> >Kegalle</option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== "Kilinochchi"){echo "selected";} } ?> >Kilinochchi</option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== "Mannar"){echo "selected";} } ?> >Mannar</option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== "Matale"){echo "selected";} } ?> >Matale</option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== "Matara"){echo "selected";} } ?> >Matara</option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== "Moneragala"){echo "selected";} } ?> >Moneragala</option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== "Mullaitivu"){echo "selected";} } ?> >Mullaitivu</option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== "Nuwara Eliya"){echo "selected";} } ?> >Nuwara Eliya</option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== "Polonnaruwa"){echo "selected";} } ?> >Polonnaruwa</option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== "Puttalam"){echo "selected";} } ?> >Puttalam</option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== "Ratnapura"){echo "selected";} } ?> >Ratnapura</option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== "Trincomalee"){echo "selected";} } ?> >Trincomalee</option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== "Vavuniya"){echo "selected";} } ?> >Vavuniya</option>
      </select>      
    </form>
  </div>
</div>