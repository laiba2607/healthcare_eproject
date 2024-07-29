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
      background-image: url(https://d2jx2rerrg6sh3.cloudfront.net/images/news/ImageForNews_735641_16735286404943588.jpg);
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
     <section class="forimage">
    <div class="black-layr">
    <h1 class="text-center text-white">Latest News</h1>
</div></section>
<br><br>

<!-- fornews -->
<section>
  <div class="container">
  <div class="row">
      <div class="col-md-6 about rounded" style="background-color: light;;">
          <h5 class="">Eye-tracking technology trial could revolutionise brain health management</h5><br><br>
          <p style="font-size: 16px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">The Alfred hospital has commenced clinical trials with BrainEye, a ground-breaking smartphone app which can help screen for neurological abnormalities using a 60 second eye movement test.</p>
          </div>
          <div class="col-md-6">
              <img src="https://domf5oio6qrcr.cloudfront.net/medialibrary/6015/7bde6039-1fe4-4524-8ebc-ce2766371a8c.jpg" width="100%">
          </div>
      </div>
  </div>
</section>
<br><br>

<section>
<div class="container">
  <div class="row">
  <div class="col-md-6">
              <img src="https://www.alfredhealth.org.au/images/made/images/general/News/easter_350_233.png" width="100%">
  </div>
              <div class="col-md-6 about rounded" style="background-color: light;;">
          <h5 class="">Eye-tracking technology trial could revolutionise brain health management</h5><br><br>
          <p style="font-size: 16px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">The Alfred hospital has commenced clinical trials with BrainEye, a ground-breaking smartphone app which can help screen for neurological abnormalities using a 60 second eye movement test.</p>
          </div></div>
  </div></section>
<br><br>

<section>
  <div class="container">
  <div class="row">
      <div class="col-md-6 about rounded" style="background-color: light;;">
          <h5 class="">Eye-tracking technology trial could revolutionise brain health management</h5><br><br>
          <p style="font-size: 16px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">The Alfred hospital has commenced clinical trials with BrainEye, a ground-breaking smartphone app which can help screen for neurological abnormalities using a 60 second eye movement test.</p>
          </div>
          <div class="col-md-6">
              <img src="https://www.alfredhealth.org.au/images/made/images/general/News/geritrauma-lead_350_233.png" width="100%">
          </div>
      </div>
  </div>
</section>
<br><br>

<section>
<div class="container">
  <div class="row">
  <div class="col-md-6">
              <img src="https://www.ntu.edu.sg/images/default-source/hub-news/national-registry-launched-to-fight-global-severe-asthma-battle.jpg?sfvrsn=4e423eff_1" width="100%">
  </div>
              <div class="col-md-6 about rounded" style="background-color: light;;">
          <h5 class="">Eye-tracking technology trial could revolutionise brain health management</h5><br><br>
          <p style="font-size: 16px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">The Alfred hospital has commenced clinical trials with BrainEye, a ground-breaking smartphone app which can help screen for neurological abnormalities using a 60 second eye movement test.</p>
          </div></div>
  </div></section>
  <br><br>

<section>
  <div class="container">
  <div class="row">
      <div class="col-md-6 about rounded" style="background-color: light;;">
          <h5 class="">Eye-tracking technology trial could revolutionise brain health management</h5><br><br>
          <p style="font-size: 16px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">The Alfred hospital has commenced clinical trials with BrainEye, a ground-breaking smartphone app which can help screen for neurological abnormalities using a 60 second eye movement test.</p>
          </div>
          <div class="col-md-6">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcI2JYhW6ss-ivSyEOc3H-k9M_pzjahb9_8y1dA_ESb3o9SelC8NhzMHfAuJf1AmQ68DY&usqp=CAU" width="100%">
          </div>
      </div>
  </div>
</section>
<br><br>
<section>
<div class="container">
  <div class="row">
  <div class="col-md-6">
              <img src="https://www.scripps.org/sparkle-assets/images/medical-groups-c3e6fcadafbd51a5678728a2733104cf.jpg" width="100%">
  </div>
              <div class="col-md-6 about rounded" style="background-color: light;;">
          <h5 class="">Eye-tracking technology trial could revolutionise brain health management</h5><br><br>
          <p style="font-size: 16px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">The Alfred hospital has commenced clinical trials with BrainEye, a ground-breaking smartphone app which can help screen for neurological abnormalities using a 60 second eye movement test.</p>
          </div></div>
  </div></section>
  <br><br>

<section>
<div class="bg-light">
    <div class="text-center">
      <p style="font-weight: normal; font-size: 20px; padding: 30px 30px;"><i class="fa-solid fa-message fa-2x text-primary" style="padding: 10px;"></i>Have some feedback for us? Use our feedback process to let us know.<br>
        <span style="font-weight: bold;">Inthe case of an emergency, call 000 </span></p>
    </div>
  </div>
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
