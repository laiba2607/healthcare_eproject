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
      .forbg{
	background-image:url(https://www.alfredhealth.org.au/images/general/Hero-banners/HERO_patients_families_friends_ALFRED_30May2016_1714_2.jpg);
	height:350px;
	background-size:cover;
  border: 8px solid #007bff;
	}
    .docctt{
  font-family: 'Nova', cursive;
  font-size : 15px;
  /* font-weight: bold; */
}
.forpatient{
	background-image:url(https://www.alfredhealth.org.au/images/made/images/general/Patients/20160321_CAULFIELD_SANDRINGHAM_0482_700_467.jpg);
	height:300px;
	background-size:cover;
	background-position:center;
  /* border: 8px solid #007bff; */
}
.black-layr{
        background-color: rgba(0, 0, 0, 0.3);
    height: 100%;
    padding-top: 130px;
    padding-bottom: 130px;
    }


.card:hover {
      background-color: #007bff; 
      color: white;
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
    </nav><br><br>
    

<!-- section 1 -->
    <section>
    <div class="forbg">
    <div class="black-layr">
    <h1 class="text-white">Patients, Families & Friends</h1>
    </div></div>
    </section>
    <br><br>

<!-- section 2 -->
<div class="bg-light">
    <div class="text-center">
      <p style="font-weight: normal; font-size: 20px; padding: 30px 30px;">As one of Victoria’s major metropolitan health services, Alfred Health cares for people throughout three hospitals, numerous clinics and community based services. We also provide numerous statewide specialised services, which deliver expert care to people throughout Victoria and interstate.<br>
    </div>
  </div>
  <!-- section 3 -->
  <section class="docctt">
<div class="container">
  <div class="row text-center box"> 
      <div class="col-md-3"> 
<div class="card" style="width: 100% ">
  <img src="https://www.alfredhealth.org.au/images/made/images/general/Patients/20160321_CAULFIELD_SANDRINGHAM_0513_500_333.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-title">Partnering <br>with patients</p>
   
  </div>
</div>
</div>
<div class="col-md-3">
  <div class="card" style="width: 100%">
    <img src="https://www.alfredhealth.org.au/images/made/images/general/Patients/young_adult_patient-1903_500_333.jpg" class="card-img-top"  alt="...">
    <div class="card-body">
      <p class="card-title">Getting involved in your own care
</p>
    
  </div>
</div>
</div>
<div class="col-md-3" >

<div class="card" style="width: 100%">
  <img src="https://www.alfredhealth.org.au/images/made/images/general/Patients/Holding_patient_hand_500_333.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-title">Concerned about a patient care?</p>
   
  </div>
</div>
</div>
<div class="col-md-3 ">

<div class="card" style="width: 100%">
  <img src="https://www.alfredhealth.org.au/images/made/images/general/Stock-images-owned/Couple-using-telehealth_500_333.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-title">Telehealth  <br>  Care service</p>
  </div>
  </div>
</div>
</div>
</div>
</section>
<br><br>
<section class="docctt">
<div class="container">
  <div class="row text-center box"> 
      <div class="col-md-3"> 
<div class="card" style="width: 100%">
  <img src="https://www.lumahealth.com/wp-content/uploads/2023/12/universal-health-care-thailand.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-title">The NDIS </p>
  </div>
</div>
</div>
<div class="col-md-3" >
  <div class="card" style="width: 100%">
    <img src="https://www.alfredhealth.org.au/images/made/images/general/Programs/Alfred_Mental_Health__Addiction_Health/AMAH_stock_images_1500x1000/female_staff_with_older_man_and_flowers_500_333.png" class="card-img-top"  alt="...">
    <div class="card-body">
      <p class="card-title">Your rights</p>
  </div>
</div>
</div>
<div class="col-md-3" >

<div class="card" style="width: 100%">
  <img src="https://www.alfredhealth.org.au/images/made/images/general/Services-and-clinics/Allied_Health/AH_female_neuropsych_with_male_pt_500_333.png" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-title">Our Responsibilities</p>
  </div>
</div>
</div>
<div class="col-md-3 ">

<div class="card" style="width: 100%">
  <img src="https://www.alfredhealth.org.au/images/made/images/general/Patients/patient_feedback-1_500_333.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-title">Feedback</p>

  </div>
  </div>
</div>
</section>
<br><br>
<section class="container blacklayer">
    <div class="forpatient">
    <h4 class="text-white">
					Essential information for your visit
				</h4>
</div>
<br> <br>
</section>

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
