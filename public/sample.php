<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Marham - Find a Doctor</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }
  header {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    text-align: center;
  }
  .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
  }
  .location-bar {
    background-color: #f0f0f0;
    padding: 10px;
    text-align: center;
  }
  .search-bar {
    background-color: #f8f9fa;
    padding: 20px;
    text-align: center;
  }
  input[type="text"] {
    width: 70%;
    padding: 10px;
    margin: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
  }
  input[type="submit"] {
    padding: 10px 20px;
    border: none;
    background-color: #007bff;
    color: #fff;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
  }
  ul {
    list-style-type: none;
    padding: 0;
  }
  li {
    cursor: pointer;
    padding: 10px;
    border-bottom: 1px solid #ccc;
  }
  li:hover {
    background-color: #f0f0f0;
  }
</style>
</head>
<body>
  <header>
    <h1>Marham - Find a Doctor</h1>
  </header>
  <div class="container">
    <div class="location-bar">
      <label for="location">Your Location:</label>
      <select id="location">
        <option value="karachi">Karachi</option>
        <option value="lahore">Lahore</option>
        <option value="islamabad">Islamabad</option>
        <option value="other">Other</option>
      </select>
    </div>
    <div class="search-bar">
      <form id="searchForm">
        <input type="text" id="search" name="search" placeholder="Search for doctors, specialties..." autocomplete="off">
        <input type="submit" value="Search">
      </form>
    </div>
    <div id="specialties">
      <h2>Specialties</h2>
      <ul id="specialtiesList">
        <!-- Specialties will be dynamically added here -->
      </ul>
    </div>
  </div>
  <script>
    var specialists = {
      karachi: [
        "Cardiologist", "Dermatologist", "Pediatrician", "Gynecologist", "Oncologist", 
        "Orthopedic Surgeon", "Dentist", "Psychiatrist", "ENT Specialist", "Radiologist"
      ],
      lahore: [
        "Cardiologist", "Dermatologist", "Pediatrician", "Gynecologist", "Oncologist", 
        "Orthopedic Surgeon", "Dentist", "Psychiatrist", "ENT Specialist", "Radiologist"
      ],
      islamabad: [
        "Cardiologist", "Dermatologist", "Pediatrician", "Gynecologist", "Oncologist", 
        "Orthopedic Surgeon", "Dentist", "Psychiatrist", "ENT Specialist", "Radiologist"
      ]
    };

    document.getElementById('searchForm').addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent form submission
      var location = document.getElementById('location').value.toLowerCase();
      var searchQuery = document.getElementById('search').value.trim().toLowerCase();
      displaySpecialists(filterSpecialists(specialists[location], searchQuery));
    });

    document.getElementById('search').addEventListener('input', function(event) {
      var location = document.getElementById('location').value.toLowerCase();
      var searchQuery = event.target.value.trim().toLowerCase();
      displaySpecialists(filterSpecialists(specialists[location], searchQuery));
    });

    function filterSpecialists(specialists, searchQuery) {
      return specialists.filter(function(specialist) {
        return specialist.toLowerCase().includes(searchQuery);
      });
    }

    function displaySpecialists(specialists) {
      var specialtiesList = document.getElementById('specialtiesList');
      specialtiesList.innerHTML = ''; // Clear previous specialties
      if (specialists.length > 0) {
        specialists.forEach(function(specialty) {
          var li = document.createElement('li');
          li.textContent = specialty;
          li.addEventListener('click', function() {
            showDoctors(specialty);
          });
          specialtiesList.appendChild(li);
        });
      } else {
        var li = document.createElement('li');
        li.textContent = 'No specialties found';
        specialtiesList.appendChild(li);
      }
    };

    function showDoctors(specialty) {
  var location = document.getElementById('location').value.toLowerCase();
  // Define page mapping for each specialty
  var pageMapping = {
    "Cardiologist": "/healthcare_eproject/home.php",
    "Dermatologist": "/healthcare_eproject/login.php",
    "Pediatrician": "/healthcare_eproject/signup.php",
    // Add more specialties and their corresponding pages as needed
  };
  // Redirect to the appropriate page with the selected specialty and location
  var redirectUrl = pageMapping[specialty] || '/healthcare_eproject/home.php'; // Default to home.php if specialty not found
  window.location.href = redirectUrl + '?location=' + location + '&specialty=' + encodeURIComponent(specialty);
}


  </script>
</body>
</html>

</html>
