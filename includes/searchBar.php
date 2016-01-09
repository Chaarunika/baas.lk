<div id="searchBox">

  <div class="Dropdn" id="apDivSearchBar">
    <label for="SearchBar"></label>
    <label for="Area"></label>
    
    <form name="formSearch" method="get" action= "searchSP.php" >
      
      <input name="SearchBar" type="text" class="SearchBar" id="SearchBar" <?php if(isset($_SESSION['tempSearchTerm'] )) { echo "value =\"".$_SESSION['tempSearchTerm']."\" " ; } else{ echo "value= \"\" ";} ?> >   
      <p class="check">     
        <label>
        <input type="checkbox" name="CheckboxGroup1" value="checkbox" id="CheckboxGroup1_0">
        <?php echo ORDER?></label><br><br>

        <!--
        <label>
        <input type="checkbox" name="CheckboxGroup1" value="checkbox" id="CheckboxGroup1_2">
        Order By Experience</label><br>  -->
      </p>  
   
      <input name="SearchButton" type="submit" class="MyButton" id="SearchButton" value=<?php echo SUBMIT_SEARCH;?>>
      
      <label for="Select"></label>
      <select name="category" class="Dropdn" id="Select" >
        <option  <?php if(isset($_SESSION['tempSearchCategory'])) {if($_SESSION['tempSearchCategory']== ALL){echo "selected";} } ?><?php  echo ">".ALL; ?></option>
        <option<?php if(isset($_SESSION['tempSearchCategory'])) {if($_SESSION['tempSearchCategory']== ARCHI_DESIGN){echo "selected";} } ?> <?php  echo ">".ARCHI_DESIGN; ?> </option>
        <option <?php if(isset($_SESSION['tempSearchCategory'])) {if($_SESSION['tempSearchCategory']== BUILDER){echo "selected";} } ?> <?php  echo ">".BUILDER; ?></option>
        <option <?php if(isset($_SESSION['tempSearchCategory'])) {if($_SESSION['tempSearchCategory']== CONSULTANCYSERVICE){echo "selected";} } ?><?php  echo ">".CONSULTANCYSERVICE; ?></option>
        <option<?php if(isset($_SESSION['tempSearchCategory'])) {if($_SESSION['tempSearchCategory']== CONTRACTOR){echo "selected";} } ?> <?php  echo ">".CONTRACTOR; ?></option>
    	  <option <?php if(isset($_SESSION['tempSearchCategory'])) {if($_SESSION['tempSearchCategory']== ELECTRICIAN){echo "selected";} } ?> <?php  echo ">".ELECTRICIAN; ?></option>
    	  <option <?php if(isset($_SESSION['tempSearchCategory'])) {if($_SESSION['tempSearchCategory']== MASON){echo "selected";} } ?> <?php  echo ">".MASON; ?></option>
        <option <?php if(isset($_SESSION['tempSearchCategory'])) {if($_SESSION['tempSearchCategory']== MATERIAL){echo "selected";} } ?> <?php  echo ">".MATERIAL; ?></option>
        <option <?php if(isset($_SESSION['tempSearchCategory'])) {if($_SESSION['tempSearchCategory']== REALESTATECOMPANY){echo "selected";} } ?> <?php  echo ">".REALESTATECOMPANY; ?></option>
        <option <?php if(isset($_SESSION['tempSearchCategory'])) {if($_SESSION['tempSearchCategory']== TECHNICIAN){echo "selected";} } ?> <?php  echo ">".TECHNICIAN; ?></option>
        <option <?php if(isset($_SESSION['tempSearchCategory'])) {if($_SESSION['tempSearchCategory']== CARPENTER){echo "selected";} } ?> <?php  echo ">".CARPENTER; ?></option>
        <option <?php if(isset($_SESSION['tempSearchCategory'])) {if($_SESSION['tempSearchCategory']== HANDYMAN){echo "selected";} } ?><?php  echo ">".HANDYMAN; ?></option>
        <option <?php if(isset($_SESSION['tempSearchCategory'])) {if($_SESSION['tempSearchCategory']== PAINTER){echo "selected";} } ?> <?php  echo ">".PAINTER; ?></option>
        <option <?php if(isset($_SESSION['tempSearchCategory'])) {if($_SESSION['tempSearchCategory']== PLUMBER){echo "selected";} } ?><?php  echo ">".PLUMBER; ?></option>
      </select>

      <label for="Area"></label>
      <select name="location" size="1" class="SearchTerm" id="Area">
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== ANYAREA){echo "selected";} } ?> <?php  echo ">".ANYAREA; ?></option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== COLOMBO){echo "selected";} } ?>  <?php  echo ">".COLOMBO; ?></option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== KANDY){echo "selected";} } ?>  <?php  echo ">".KANDY; ?></option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== KURUNEGALA){echo "selected";} } ?> <?php  echo ">".KURUNEGALA; ?></option>     
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== AMPARA){echo "selected";} } ?>  <?php  echo ">".AMPARA; ?></option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== ANURA){echo "selected";} } ?>  <?php  echo ">".ANURA; ?></option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== BADULLA){echo "selected";} } ?> <?php  echo ">".BADULLA; ?></option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== BATTICALOA){echo "selected";} } ?>  <?php  echo ">".BATTICALOA; ?></option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== GALLE){echo "selected";} } ?> <?php  echo ">".GALLE; ?></option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== GAMPAHA){echo "selected";} } ?>  <?php  echo ">".GAMPAHA; ?></option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== HAMBANTOTA){echo "selected";} } ?>  <?php  echo ">".HAMBANTOTA; ?></option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== JAFFNA){echo "selected";} } ?>  <?php  echo ">".JAFFNA; ?></option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== KALUTARA){echo "selected";} } ?>  <?php  echo ">".KALUTARA; ?></option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== KEGALLE){echo "selected";} } ?>  <?php  echo ">".KEGALLE; ?></option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== KILINOCHCHI){echo "selected";} } ?>  <?php  echo ">".KILINOCHCHI; ?></option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== MANNAR){echo "selected";} } ?>  <?php  echo ">".MANNAR; ?></option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== MATALE){echo "selected";} } ?> <?php  echo ">".MATALE; ?></option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== MATARA){echo "selected";} } ?>  <?php  echo ">".MATARA; ?></option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== MONERAGALA){echo "selected";} } ?>  <?php  echo ">".MONERAGALA; ?></option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== MULLITIVU){echo "selected";} } ?>  <?php  echo ">".MULLITIVU; ?></option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== NUWARAELIYA){echo "selected";} } ?>  <?php  echo ">".NUWARAELIYA; ?></option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== POLONNARUWA){echo "selected";} } ?> <?php  echo ">".POLONNARUWA; ?></option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== PUTTALAMA){echo "selected";} } ?> <?php  echo ">".PUTTALAMA; ?></option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== RATNAPURA){echo "selected";} } ?>  <?php  echo ">".RATNAPURA; ?></option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== TRINCOMALEE){echo "selected";} } ?>  <?php  echo ">".TRINCOMALEE; ?></option>
        <option <?php if(isset($_SESSION['tempSearchArea'])) {if($_SESSION['tempSearchArea']== VAVUNIYA){echo "selected";} } ?>  <?php  echo ">".VAVUNIYA; ?></option>
      </select>      
    </form>
  </div>
</div>