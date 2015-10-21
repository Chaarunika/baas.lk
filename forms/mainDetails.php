<div id="apDivOptionBox0">
  <form id="form1" name="form1" method="post" action="spProfEdit.php">
    <label for="firstName">First Name</label>
    <input type="text" name="firstName" id="firstName" required />
    <label for="lastName">Last Name</label>
    <input type="text" name="lastName" id="lastName" required />

    <p>
      <label>
        <input type="radio" name="gender" value="M" id="gender_0" required />
        Male</label>
      <br />
      <label>
        <input type="radio" name="gender" value="F" id="gender_1" required />
        Female</label>
    </p>

    <p>Please Select Preferable Languages to communicate</p>
    <p>
      <label>
      <input type="checkbox" name="check" value="S" id="language_0" />Sinhala</label>
      
      <label>
      <input type="checkbox" name="check" value="T" id="language_1"  />Tamil</label>
      
      <label>
      <input type="checkbox" name="check" value="E" id="language_2" />English</label>
    </p>

    <p>Adress</p>
    <p>
      <label for="firstLine">Line1</label>
      <input type="text" name="firstLine" id="firstLine" required />
    </p>
    <p>
      <label for="secondLine">Line 2</label>
      <input type="text" name="secondLine" id="secondLine" required />
    </p>
    <p>
      <label for="district">District</label>
      <select name="district" id="district" required>
        <option>Anuradhapura</option>
        <option>Colombo</option>
        <option>Kurunegala</option>
        <option>Kandy</option>
        <option>Ampara</option>
      </select>
    </p>
    <p>
      <input type="submit" name="saveOverview" id="saveOverview" value="Save" />
    </p>      
  </form>
</div>