
  <div id="apDivOptionBox0">

    <form id="form1" name="form1" method="post" action="spProfEdit.php">
      <label for="firstName"><?php echo FIRSTNAME ; ?> /<?php echo ORGANIZATIONNAME ; ?></label>
      <input type="text" name="firstName" id="firstName" <?php if(isset($user['user_firstname'])) echo "value='".$user['user_firstname']."'"; ?> required />
      <label for="lastName"><?php echo LASTNAME ; ?> /<?php echo ORGANIZATIONNAME ; ?></label>
      <input type="text" name="lastName" id="lastName" <?php if(isset($user['user_lastname'])) echo "value='".$user['user_lastname']."'"; ?> required />

    
      <label for="year"><?php echo BIRTHDATE ; ?> /<?php echo ORGANIZATIONSTARTDATE ; ?></label>
      <br>
      <label for="year"><?php echo YEAR ; ?></label>
      <select name="year" id="year" required>  
        <option>1989</option>
        <option>1990</option>
        <option>1991</option>
        <option>1992</option>
        <option>1993</option>
        <option>1994</option>
        <option>1995</option>
        <option>1996</option>
        <option>1997</option>
        <option>1998</option>
        <option>1999</option>
        <option>2000</option>
        <option>2001</option>
        <option>2002</option>
        <option>2003</option>
        <option>2004</option>
        <option>2005</option>
        <option>2006</option>
        <option>2007</option>
        <option>2008</option>
        <option>2009</option>
        <option>2010</option>
        <option>2011</option>
        <option>2012</option>
        <option>2013</option>
        <option>2014</option>
        <option>2015</option>
        <option>2016</option>
      </select>
      <label for="month"><?php echo MONTH ; ?></label>
      <select name="month" id="month" required>
        <option><?php echo JANUARY ; ?></option>
        <option><?php echo FEBRUARY ; ?></option>
        <option><?php echo MARCH ; ?></option>
        <option><?php echo APRIL ; ?></option>
        <option><?php echo MAY ; ?></option>
        <option><?php echo JUNE ; ?></option>
        <option><?php echo JULY ; ?></option>
        <option><?php echo AUGUEST ; ?></option>
        <option><?php echo SEPTEMBER ; ?></option>
        <option><?php echo OCTOMBER ; ?></option>
        <option><?php echo NOVEMBER ; ?></option>
        <option><?php echo DECEMBER ; ?></option>       
      </select>
      <label for="date"><?php echo DATE ; ?></label>
      <select name="date" id="date" required>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>13</option>
        <option>14</option>
        <option>15</option>
        <option>16</option>
        <option>17</option>
        <option>18</option>
        <option>19</option>
        <option>10</option>
        <option>21</option>
        <option>22</option>
        <option>23</option>
        <option>24</option>
        <option>25</option>
        <option>26</option>
        <option>27</option>
        <option>28</option>
        <option>29</option>
        <option>30</option>
        <option>31</option>    
      </select>

      <br><br>
      <p>
        <label for="firstLine"><?php echo ADDRESSLINE1 ; ?></label>
        <input type="text" name="firstLine" id="firstLine" <?php if(isset($sp['address'])) echo "value='".$sp['address']."'"; ?> required />
      </p>
      <p>
        <label for="secondLine"><?php echo ADDRESSLINE2 ; ?></label>
        <input type="text" name="secondLine" id="secondLine" <?php if(isset($sp['area'])) echo "value='".$sp['area']."'"; ?> required />
      </p>
      
        <p><label for="district"><?php echo DISTRICT ; ?></label><br>
        <select name="district" id="district" required>
          <option><?php echo COLOMBO ; ?></option>
            <option><?php echo KANDY; ?></option>
            <option><?php echo KURUNEGALA ; ?></option>
            <option><?php echo AMPARA ; ?></option>
            <option><?php echo ANURA ; ?></option>
            <option><?php echo BADULLA ; ?></option>
            <option><?php echo BATTICALOA ; ?></option>
            <option><?php echo GALLE ; ?></option>
            <option><?php echo GAMPAHA ; ?></option>
            <option><?php echo HAMBANTOTA ; ?></option>
            <option><?php echo JAFFNA ; ?></option>
            <option><?php echo KALUTARA ; ?></option>
            <option><?php echo KEGALLE ; ?></option>
            <option><?php echo KILINOCHCHI ; ?></option>
            <option><?php echo MANNAR ; ?></option>
            <option><?php echo MATALE ; ?></option>
            <option><?php echo MATARA ; ?></option>
            <option><?php echo MONERAGALA ; ?></option>
            <option><?php echo MULLITIVU ; ?></option>
            <option><?php echo NUWARAELIYA ; ?></option>
            <option><?php echo POLONNARUWA ; ?></option>
            <option><?php echo PUTTALAMA ; ?></option>
            <option><?php echo RATNAPURA ; ?></option>
            <option><?php echo TRINCOMALEE ; ?></option>
            <option><?php echo VAVUNIYA ; ?></option>
        </select>
      </p> 
      
      <!--
      <p>
        <label>
          <input type="radio" name="gender" value="M" id="gender_0" required />
          Male</label>
        <br />
        <label>
          <input type="radio" name="gender" value="F" id="gender_1" required />
          Female</label>
      </p>

    -->
    <!--
      <br>
      <p>Please Select Preferable Languages to communicate</p>
      <p>
        <label>
        <input type="checkbox" name="check" value="S" id="language_0" />Sinhala</label>
        
        <label>
          <input type="checkbox" name="check" value="T" id="language_1"  />Tamil</label>
        
        <label>
          <input type="checkbox" name="check" value="E" id="language_2" />English</label>
      </p>      
      -->
      <p>
        <input type="submit" name="saveOverview" id="saveOverview" value="<?php echo SAVE ; ?>" />
      </p>      
    </form>
  </div>