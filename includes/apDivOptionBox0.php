
  <div id="apDivOptionBox0">

    <form id="form1" name="form1" method="post" action="spProfEdit.php">
      <label for="firstName">First Name / Organization Name</label>
      <input type="text" name="firstName" id="firstName" required />
      <label for="lastName">Last Name / Organization Name</label>
      <input type="text" name="lastName" id="lastName" required />

      <label for="year">Birthdate / Organization Start Date</label>
      <br>
      <label for="year">Year</label>
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
      <label for="month">Month</label>
      <select name="month" id="month" required>
        <option>January</option>
        <option>February</option>
        <option>March</option>
        <option>April</option>
        <option>May</option>
        <option>June</option>
        <option>July</option>
        <option>August</option>
        <option>September</option>
        <option>Octomber</option>
        <option>November</option>
        <option>December</option>       
      </select>
      <label for="date">Date</label>
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
        <label for="firstLine">Address Line1</label>
        <input type="text" name="firstLine" id="firstLine" required />
      </p>
      <p>
        <label for="secondLine">Address Line 2</label>
        <input type="text" name="secondLine" id="secondLine" required />
      </p>
      
        <p><label for="district">District</label><br>
        <select name="district" id="district" required>
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
        <input type="submit" name="saveOverview" id="saveOverview" value="Save" />
      </p>      
    </form>
  </div>