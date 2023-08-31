<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Admission Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
.header{

background-color: deepskyblue;
line-height: 70px;
padding-left: 30px;

}

.logout{


  float: right;
  padding-right: 30px;

}

</style>
<style>
 body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f2f2f2;
  }
  .container {
    max-width: 600px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
  }
  .header {
    text-align: center;
    margin-bottom: 20px;
  }
  .header img {
    width: 70px;
    height: 70px;
    vertical-align: middle;
  }
  .title {
    font-size: 18px;
    font-weight: bold;
    color: white;
  }
  .form-group {
    margin-bottom: 15px;
  }
  label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
  }
  input[type="text"],
  input[type="email"],
  select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  .dropdown {
    width: 100%;
  }
  button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
  }

  a{

    color: white;
    font-weight: bold;
    font-size: 18px;
    

  }
</style>
</head>
<body>

<header class="header">
  <a href="">Okaigben Secondary School Ewohimi</a>
  <div class="logout">
    <a href="index.html" class="btn btn-primary">GO BACK</a>
  </div>
</header>
<div class="container">
  <div class="header">
    <img src="web_design.jpg" alt="Web Design Logo">
    <div class="title">Okaigben Students Registration Form</div>
  </div>


<form id="registrationForm" method="post" action="admissionform_process.php">
  

    <div class="form-group">
      <label for="firstname">First Name</label>
      <input type="text" id="firstname" name="firstname" required>
    </div>
    <div class="form-group">s
    <label for="middlename">Middle Name</label>
    <input type="text" id="middlename" name="middlename" required>
  </div>
  <div class="form-group">
    <label for="surname">Surname</label>
    <input type="text" id="surname" name="surname" required>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" id="email" name="email" required>
  </div>
  <div class="form-group">
  <label for="phone">Phone Number</label>
  <input type="tel" id="phone" name="phone" required>
</div>
  <div class="form-group">
    <label for="address">House Address</label>
    <input type="text" id="address" name="address" required>
  </div>
  <div class="form-group">
    <label for="nationality">Nationality</label>
    <input type="text" id="nationality" name="nationality" required>
  </div>
  <div class="form-group">
    <div class="form-group">
  <label for="state">State of Origin</label>
  <select id="state" name="state" onchange="handleStateChange()" required>
    <option value="">Select State of Origin</option>
    <option value="Abia">Abia</option>
    <option value="Adamawa">Adamawa</option>
    <option value="Akwa Ibom">Akwa Ibom</option>
    <option value="Anambra">Anambra</option>
    <option value="Bauchi">Bauchi</option>
    <option value="Bayelsa">Bayelsa</option>
    <option value="Benue">Benue</option>
    <option value="Borno">Borno</option>
    <option value="Cross River">Cross River</option>
    <option value="Delta">Delta</option>
    <option value="Ebonyi">Ebonyi</option>
    <option value="Edo">Edo</option>
    <option value="Ekiti">Ekiti</option>
    <option value="Enugu">Enugu</option>
    <option value="Abuja">Federal Capital Territory</option>
    <option value="Gombe">Gombe</option>
    <option value="Imo">Imo</option>
    <option value="Jigawa">Jigawa</option>
    <option value="Kaduna">Kaduna</option>
    <option value="Kano">Kano</option>
    <option value="Katsina">Katsina</option>
    <option value="Kebbi">Kebbi</option>
    <option value="Kogi">Kogi</option>
    <option value="Kwara">Kwara</option>
    <option value="Lagos">Lagos</option>
    <option value="Nasarawa">Nasarawa</option>
    <option value="Niger">Niger</option>
    <option value="Ogun">Ogun</option>
    <option value="Ondo">Ondo</option>
    <option value="Osun">Osun</option>
    <option value="Oyo">Oyo</option>
    <option value="Plateau">Plateau</option>
    <option value="Rivers">Rivers</option>
    <option value="Sokoto">Sokoto</option>
    <option value="Taraba">Taraba</option>
    <option value="Yobe">Yobe</option>
    <option value="Zamfara">Zamfara</option>
  </select>
</div>

    <div class="form-group" id="lgaContainer" style="display: none;">
      <label for="lga">Local Government of Origin</label>
      <select id="lga" name="lga" class="dropdown">
        <option value="">Select Local Government</option>
      </select>
    </div>



    </div>


 <div class="form-group">
    <label for="dob">Date of Birth</label>
    <input type="date" id="dob" name="dob" required>
  </div>
  <div class="form-group">
    <label for="bloodgroup">Blood Group</label>
    <select id="bloodgroup" name="bloodgroup" class="dropdown" required>
      <option value="">Select Blood Group</option>
      <option value="A">A</option>
      <option value="B">B</option>
      <option value="AB">AB</option>
      <option value="O+">O+</option>
      <option value="O-">O-</option>
      <option value="Unknown">Unknown</option>
    </select>
  </div>
  <div class="form-group">
    <label for="gender">Gender</label>
    <select id="gender" name="gender" class="dropdown" required>
      <option value="">Select Gender</option>
      <option value="male">Male</option>
      <option value="female">Female</option>
    </select>
  </div>


 <div class="form-group">
    <label for="class">Class</label>
    <select id="class" name="class" class="dropdown" required>
      <option value="">Select Class</option>
      <option value="ss1">SS1</option>
      <option value="ss2">SS2</option>
      <option value="ss3">SS3</option>
    </select>
  </div>



  <div class="form-group">
    <label for="fathername">Father's Name</label>
    <input type="text" id="fathername" name="fathername" required>
  </div>
  <div class="form-group">
    <label for="mothername">Mother's Name</label>
    <input type="text" id="mothername" name="mothername" required>
  </div>
  <div class="form-group">
    <button type="submit">Submit</button>
  </div>
    
  
  </form>



<!-- ... rest of the code ... -->

<script>
const stateDropdown = document.getElementById('state');
const lgaContainer = document.getElementById('lgaContainer');
const lgaDropdown = document.getElementById('lga');

const edoLgas = [
  'Akoko-Edo', 'Egor', 'Esan Central', 'Esan North-East', 'Esan South-East',
  'Esan West', 'Etsako Central', 'Etsako East', 'Etsako West', 'Igueben',
  'Ikpoba-Okha', 'Oredo', 'Orhionmwon', 'Ovia North-East', 'Ovia South-West',
  'Owan East', 'Owan West', 'Uhunmwonde'
];

function handleStateChange() {
  const selectedState = stateDropdown.value;
  if (selectedState === 'Edo') {
    populateLgaDropdown(edoLgas);
    lgaContainer.style.display = 'block';
  } else {
    lgaContainer.style.display = 'none';
    lgaDropdown.innerHTML = '<option value="">Select Local Government</option>';
  }
}

function populateLgaDropdown(lgas) {
  lgaDropdown.innerHTML = '<option value="">Select Local Government</option>';
  lgas.forEach(lga => {
    const option = document.createElement('option');
    option.value = lga;
    option.textContent = lga;
    lgaDropdown.appendChild(option);
  });
}

stateDropdown.addEventListener('change', handleStateChange);
</script>


 <script>
document.getElementById('registrationForm').addEventListener('submit', function(event) {
   const formElements = this.elements;

   for (let i = 0; i < formElements.length; i++) {
      const element = formElements[i];

      if (element.required && element.value.trim() === '') {
         event.preventDefault();
         alert(`Please fill in the "${element.previousElementSibling.textContent}" field.`);
         element.focus();
         return;
      }
   }
});
</script>



</body>
</html>
