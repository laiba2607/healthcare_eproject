<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="refresh" content="60">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="https://seeklogo.com/images/H/home-care-logo-847AC1C5A6-seeklogo.com.png">
  <title>Care</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!--Font Awesome Cdn-->  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  <!-- Google Font Cdn-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nova+Script&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Charm:wght@700&family=Nova+Script&display=swap" rel="stylesheet">
<!-- Google Font Cdn-->
<style>
  @media only screen and (max-width:800px) {

/* For tablets: */
.navbar {
  width: 100%;
  padding: 0;
}

.right {
  width: 100%;
}
}

@media only screen and (max-width:500px) {

/* For mobile phones: */
.navbar {
  width: 100%;
}
}

  
            /* Custom CSS for decoration and animations */
      .navbar-nav .nav-link {
          color: white; /* Original text color */
          transition: color 0.3s ease; /* Smooth transition for text color change */
          font-weight: bold;
          
      }
      .navbar-nav .nav-link:hover {
          color: rgb(12, 12, 12); /* Light blue color on hover */
          transition: 2s;
          
      }
      /* Adding animation to navbar items */
      .navbar-nav .nav-item {
          position: relative;
        
      }
      .navbar-nav .nav-item::before {
          content: "";
          position: absolute;
          top: 100%;
          left: 50%;
          width: 0;
          height: 0;
          border-left: 5px solid transparent;
          border-right: 5px solid transparent;
          border-bottom: 5px solid #5bc0de; /* Light blue color */
          transition: width 0.3s ease, left 0.3s ease;
          transform: translateX(-50%);
          opacity: 0;
      }
      .navbar-nav .nav-item:hover::before {
          width: 100%;
          left: 0;
          opacity: 1;
          
      }
      .navbar{
        background-color :#007bff;

      }
      .forimage{
      background-image: url(https://thumbor.forbes.com/thumbor/fit-in/900x510/https://www.forbes.com/advisor/in/wp-content/uploads/2023/04/pexels-rodnae-productions-6129507-scaled.jpg);
    background-size: cover;
    height: 350px;
    border: 8px solid #007bff;
      }

    .black-layr{
        background-color: rgba(0, 0, 0, 0.3);
    height: 100%;
    padding-top: 130px;
    padding-bottom: 130px;
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
 
  
      </style>
      </head>
<body>

<nav class="navbar navbar-expand-lg" >
    <img src="https://seeklogo.com/images/H/home-care-logo-847AC1C5A6-seeklogo.com.png" width="50px" alt="CARE+ Logo" class="mr-2">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/healthcare_eproject/home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/healthcare_eproject/ourhospital.php">Our Hospitals</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/healthcare_eproject\patients-families.php">Patients And Families</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="\healthcare_eproject\research.php">Research</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="\healthcare_eproject\disorder.php">Disorders & Diseases</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="\healthcare_eproject\inventions.php">Inventions</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav m-auto">
      <li class="nav-item active">
        <a class="nav-link" href="\healthcare_eproject\finddoctor.php">Find Doctors <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="\healthcare_eproject\patientportal.php">Patient Portal</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="\healthcare_eproject\medicalnews.php">Medical News</a>
      </li>

      
      <li class="nav-item">
        <a class="nav-link" href="\healthcare_eproject\login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="\healthcare_eproject\signup.php">Sign Up</a>
      </li>
     
    </ul>
    </div>
    </nav>
<br><br>
<!-- section 1 -->
<section class="forimage">
    <div class="black-layr">
    <h1 class="text-center text-white">Find a Doctor</h1>
</div></section>
<br><br>


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
         "Pediatrician",  
         "Dentist",  "ENT Specialist"
      ],
      lahore: [
        "Pediatrician"
        , "Dentist",  "ENT Specialist"
      ],
      islamabad: [
        "Pediatrician",  "Dentist",  "ENT Specialist"
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

    // Define page mapping for each specialty
    var pageMapping = {
      karachi: {
        "Cardiologist": "/healthcare_eproject/cardiologistk.php/",
        "Dermatologist": "/healthcare_eproject/khidermatologist.php/",
        "Pediatrician": "/healthcare_eproject/Khipediatrician.php/",
        "Dentist" : "/healthcare_eproject/khidentist.php/",
        "Psychiatrist" : "/healthcare_eproject/khipsychiatrist.php/",
        "ENT Specialist" : "/healthcare_eproject/khiENTSpecialist.php/",
        // Add more specialties and their corresponding pages for Karachi as needed
      },
      lahore: {
        "Cardiologist": "/healthcare_eproject/cardiologistlhr.php/",
        "Dermatologist": "/healthcare_eproject/lhrdermatologist.php/",
        "Pediatrician": "/healthcare_eproject/Lhrpediatrician.php/",
        "Dentist" : "/healthcare_eproject/lhrdentist.php/",
        "Psychiatrist" : "/healthcare_eproject/lhrpsychiatrist.php/",
        "ENT Specialist" : "/healthcare_eproject/lhrENTSpecialist.php/",

        // Add more specialties and their corresponding pages for Lahore as needed
      },
      islamabad: {
        "Cardiologist": "/healthcare_eproject/cardiologistislamabad.php/",
        "Dermatologist": "/healthcare_eproject/isldermatologist.php/",
        "Pediatrician": "/healthcare_eproject/islpediatrician.php/",
        "Dentist" : "/healthcare_eproject/isldentist.php/",
        "Psychiatrist" : "/healthcare_eproject/islpsychiatrist.php/",
        "ENT Specialist" : "/healthcare_eproject/islENTSpecialist.php/",

        // Add more specialties and their corresponding pages for Islamabad as needed
      }
    };

    function showDoctors(specialty) {
      var location = document.getElementById('location').value.toLowerCase();
      var redirectUrl = pageMapping[location][specialty]; // Get the URL based on location and specialty
      window.location.href = redirectUrl;
    }
  </script>

<!--footer-->
<br>
<br>
<footer class="bg-dark p-3 pt-3 pb-3 text-white">
<div class="container">
<div class="row">
<div class="col-md-3">
<h4>NAVIGATION</h4>
<a href="\healthcare_eproject\privacypolicy.php" class="text-white">Privacy Policy</a>
<br>
<a href="\healthcare_eproject\contactus.php" class="text-white">Contact Us</a>
<br>
<a href="\healthcare_eproject\servc.php" class="text-white">Service</a>
<br>
<a href="\healthcare_eproject\terms.php" class="text-white">Terms And Conditions</a>
</div>

<div class="col-md-3">
        <h4>Address</h4>
        Medical Healthcare
        <br>
        123 Medical Street
        <br>
        City, Country, ZIP
      </div>

      <div class="col-md-3">
        <h4>OUR MISSION</h4>
        Medical Healthcare is committed to providing quality healthcare services to our community. Our mission is to improve the health and well-being of every patient we serve.
      </div>
<div class="col-md-3"> 
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.6481051590217!2d67.05548687412325!3d24.875865477919177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f6e170fa05f%3A0xc3f856341e881d06!2sFamily%20Care%20Hospital!5e0!3m2!1sen!2s!4v1714760340223!5m2!1sen!2s"  width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
</div>
<div class="row">
<div class="col-md-3">
<a href="https://www.facebook.com" target="_blank"><i class="fa-brands fa-square-facebook fa-2x text-white"></i></a>
<a href="https://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram fa-2x text-white"></i></a>
<a href="https://www.twitter.com" target="_blank"><i class="fa-brands fa-twitter fa-2x text-white"></i></a>
<a href="https://www.youtube.com" target="_blank"><i class="fa-brands fa-youtube fa-2x text-white"></i></a>
<br>
<br>
</div>
<div class="col-md-3">
        Medical Healthcare – Providing Quality Care
      </div>
    </div>
  </div>
  <br>
  <p class="text-center">© 2024 Medical Healthcare. All rights reserved. Terms of Use</p>
</footer>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
