<div class="Dropdn" id="apDivSearchBar">
  <label for="SearchBar"></label>
  <label for="Area"></label>
  
  <form name="formSearch" method="post" action="searchSP.php">
    <input name="SearchBar" type="text" class="SearchBar" id="SearchBar">   
    <p class="check">     
      <label>
      <input type="checkbox" name="CheckboxGroup1" value="checkbox" id="CheckboxGroup1_0">
      Order By Rating</label><br><br>

      <label>
      <input type="checkbox" name="CheckboxGroup1" value="checkbox" id="CheckboxGroup1_2">
      Order By Experience</label><br>
    </p>  
 
    <input name="SearchButton" type="submit" class="MyButton" id="SearchButton" value="Submit">
    
    <label for="Select"></label>
    <select name="category" class="Dropdn" id="Select">
      <option>ALL</option>
      <option>Architect and Designer </option>
      <option>Builder</option>
      <option>Consultancy Service</option>
      <option>Contractor</option>
  	  <option>Electrician</option>
  	  <option>Mason</option>
      <option>Material Supplier</option>
      <option>Real Estate Company</option>
      <option>Technician</option>
    </select>

    <label for="Area"></label>
    <select name="location" size="1" class="SearchTerm" id="Area">
      <option>ANY AREA</option>
      <option>Colombo</option>
      <option>Kandy</option>
      <option>Kurunegala</option>
      <option>Ampara</option>
      <option>Anuradhapura</option>
      <option>Badulla</option>
      <option>Batticaloa</option>
      <option>Galle</option>
      <option>Gampaha</option>
      <option>Hambantota</option>
      <option>Jaffna</option>
      <option>Kalutara</option>
      <option>Kegalle</option>
      <option>Kilinochchi</option>
      <option>Mannar</option>
      <option>Matale</option>
      <option>Matara</option>
      <option>Moneragala</option>
      <option>Mullaitivu</option>
      <option>Nuwara Eliya</option>
      <option>Polonnaruwa</option>
      <option>Puttalam</option>
      <option>Ratnapura</option>
      <option>Trincomalee</option>
      <option>Vavuniya</option>
    </select>      
  </form>
</div>