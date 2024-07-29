<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="refresh" content="10">
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
  .kyframe  {
    border: 5px solid #007bff;
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
        <a class="nav-link" href="\healthcare_eproject\Preventions.php">Preventions</a>
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
        <a class="nav-link" href="\healthcare_eproject\inventions.php">Latest Inventions</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">DoctorPortal</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link 5</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link 5</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link 5</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link 5</a>
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
<section>
<div class="bg-light">
    <div class="text-center">
      <p style="font-weight: normal; font-size: 20px; padding: 30px 30px;">Our doctors work across a range of services and clinics at our hospitals and <br>community locations.<br>
    </div>
</section>
<br>
<section>
<div class="container">
    <input type="text" class="form-control mb-2 w-50" id="searchInput" placeholder="Search a doctor by name or speciality">
      <button class="btn btn-primary" id="searchButton">Search</button><br><br>
    <table class="table table-bordered table-striped">
      <thead class="thead-dark">
        <tr>
          <th>Name</th>
          <th>Speciality</th>
          <th>Clinic</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Dr Shafqat Inam</td>
          <td>Clinical Haematology, Laboratory Haematology</td>
          <td>Clinical Haematology Clinic (Tuesdays at The Alfred), Blood Clinic</td>
        </tr>
        <tr>
          <td>Mr Joseph Kong</td>
          <td>Endoscopy, Colorectal Surgery</td>
          <td>Colorectal & General Surgery Clinic</td>
        </tr>
        <tr>
          <td>Dr Juan Carlos Mora</td>
          <td>Intensive Care Medicine</td>
          <td></td>
        </tr>
        <tr>
          <td>Mr Vachara Niumsawatt</td>
          <td>Plastic Surgery</td>
          <td>Plastics Clinic (Wednesdays at The Alfred)</td>
        </tr>
        <tr>
          <td>Dr Vimal Stanislaus</td>
          <td>Stroke</td>
          <td>Stroke & TIA Clinic</td>
        </tr>
        <tr>
          <td>Dr Alice Xu</td>
          <td>Psychiatry</td>
          <td></td>
        </tr>
        <tr>
          <td>Mr Raymond Yap</td>
          <td>General Surgery</td>
          <td></td>
        </tr>
        <tr>
          <td>Dr Jonathan Zimmerman</td>
          <td>Geriatric Medicine</td>
          <td>Geriatric & General Medicine in Older People Clinic</td>
        </tr>
        <tr>
          <td>Dr Iain Abbott</td>
          <td>Infectious Diseases</td>
          <td></td>
        </tr>
        <tr>
          <td>Dr Nandi Abdalla</td>
          <td>Psychiatry</td>
          <td></td>
        </tr>
        <tr>
          <td>Prof Michael Abramson</td>
          <td>Allergy, Immunology and Respiratory Medicine</td>
          <td></td>
        </tr>
        <tr>
          <td>Dr Golsa Adabi</td>
          <td>Respiratory and Sleep physician</td>
          <td>Sleep Clinic</td>
        </tr>
        <tr>
          <td>Dr Kirily Adam</td>
          <td>Rehabilitation Medicine</td>
          <td>Amputee Clinic</td>
        </tr>
        <tr>
          <td>Dr Nicholas Adams</td>
          <td>Emergency Medicine</td>
          <td></td>
        </tr>
        <tr>
          <td>Dr Nikki Adler</td>
          <td>Dermatology</td>
          <td>Melanoma Clinic</td>
        </tr>
        <tr>
          <td>Dr Manju Agarwal</td>
          <td>Obstetrics & Gynaecology</td>
          <td></td>
        </tr>
        <tr>
          <td>Dr Ekaterina Alibrahim</td>
          <td>Radiology</td>
          <td></td>
        </tr>
        <tr>
          <td>Dr Anthony Amerasinghe</td>
          <td>Dermatology</td>
          <td></td>
        </tr>
        <tr>
          <td>Dr Malaka Ameratunga</td>
          <td>Medical Oncology</td>
          <td>Medical Oncology Clinic</td>
        </tr>
        <tr>
          <td>Dr Verma Amit</td>
          <td>Dermatology</td>
          <td></td>
        </tr>
      </tbody>
    </table>
    <div class="text-center">
        <div class="text-center">
            <a href="page1.html" class="btn btn-primary mr-2">1</a>
            <a href="\healthcare_eproject\page2.php" class="btn btn-primary mr-2">2</a>
            <a href="page3.html" class="btn btn-primary mr-2">3</a>
            <button id="nextBtn" class="btn btn-primary">Next</button>
          </div>
      </div>
    </div>
  </div>
</section>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
document.getElementById('nextBtn').addEventListener('click', function() {
      var currentPage = window.location.pathname.match(/(\d+)\.html$/);
      if (currentPage) {
        var nextPage = parseInt(currentPage[1]) + 1;
        window.location.href = 'page' + nextPage + '.html';
      }
    });

    // search

    document.addEventListener('DOMContentLoaded', function() {
      var searchInput = document.getElementById('searchInput');
      var searchButton = document.getElementById('searchButton');
      var tableRows = document.querySelectorAll('tbody tr');

      function filterRows() {
        var searchText = searchInput.value.toLowerCase();
        tableRows.forEach(function(row) {
          var name = row.cells[0].textContent.toLowerCase();
          var speciality = row.cells[1].textContent.toLowerCase();
          var clinic = row.cells[2].textContent.toLowerCase();
          if (name.includes(searchText) || speciality.includes(searchText) || clinic.includes(searchText)) {
            row.style.display = ''; // Show matching rows
          } else {
            row.style.display = 'none'; // Hide non-matching rows
          }
        });
      }

      searchButton.addEventListener('click', filterRows); // Add click event listener
    });
  </script>
  <br><br>
<div class="bg-light">
    <div class="text-center">
      <p style="font-weight: normal; font-size: 20px; padding: 30px 30px;"><i class="fa-solid fa-message fa-2x text-primary" style="padding: 10px;"></i>Have some feedback for us? Use our feedback process to let us know.<br>
        <span style="font-weight: bold;">Inthe case of an emergency, call 000 </span></p>
    </div>
  </div>


<!--footer-->
<br>
<br>
<footer class="bg-dark p-3 pt-3 pb-3 text-white">
<div class="container">
<div class="row">
<div class="col-md-3">
<h4>NAVIGATION</h4>
<a href="privacy policy.html" class="text-white">Privacy Policy</a>
<br>
<a href="contact.html" class="text-white">Contact Us</a>
<br>
<a href="safety.html" class="text-white">Safety Hazards</a>
<br>
<a href="terms.html" class="text-white">Terms And Conditions</a>
</div>

<div class="col-md-3">
<h4>Address</h4>
UIAA OFFICE
c/o Schweizer Alpen-Club SAC
Monbijoustrasse 61
Postfach CH-3000
Bern 14
Switzerland
</div>
<div class="col-md-3">
<h4>FOR THE CLIMBERS</h4>
Founded in 1932 , the UIAA is the international federation for climbing and mountaineering. The International Climbing and Mountaineering Federation (UIAA) was founded in 1932 
</div>
<div class="col-md-3"> 
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.0122162982884!2d67.06651851532301!3d24.93165374853988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f684a577aa1%3A0x8eef9ba9639151a5!2sAPTECH%20Computer%20Education%20F.B%20.Area!5e0!3m2!1sen!2s!4v1617197219515!5m2!1sen!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
UIAA – International Climbing and Mountaineering Federation
</div>
</div>    
</div>
<br>
<p class="text-center">© 2020 International Climbing and Mountaineering Federation (UIAA)
Site by Kin Inc. Terms of Use</p>
</footer>
</body>
</html>