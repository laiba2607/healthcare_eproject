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
      background-image: url(https://www.alfredhealth.org.au/images/made/images/general/Hero-banners/AdobeStock_101372660_1360_333_c1.jpeg);
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
    .fornext{
      background-image: url(https://media.istockphoto.com/id/1386596147/photo/doctors-or-nurses-walking-in-hospital-hallway-blurred-motion.jpg?s=612x612&w=0&k=20&c=yC0qAZSOJ5hUsocwWsH7tN1JpbpRTbazMAQaD59a5tU=);
    background-size: cover;
    height: 300px;
      }
      .black-layer{
        background-color: rgba(0, 0, 0, 0.5);
    height: 100%;
    width: 100%;
    padding-top: 150px;
    padding-bottom: 150px;
    background-size: cover;
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
    <h1 class="text-center text-white">Research</h1>
</div></section>
<br><br>

<!-- section 2 -->

<div class="bg-light">
    <div class="text-center">
      <p style="font-weight: normal; font-size: 18px; padding: 30px 30px;">Alfred Health is a member of the Alfred Research Alliance - where we think in innovative ways, and work together to translate our research into new and improved diagnoses, treatments and disease prevention strategies.<br>
    </div>
  </div><br>

  <!-- section 3 -->
  <section>
    <div class="container-fluid bg-light">
  <div class="row">
    <div class="col-md-3">
    <img src="https://thumbs.dreamstime.com/b/portrait-medical-staff-nurse-s-station-hospital-67527279.jpg" width="100%"><br><br>

        <h5 class="text-center">Our Research</h5>
        <p>Clinical research and trials go hand in hand with clinical practice at Alfred Health, with this approach bringing major benefits to our patients.</p>
    </div>
    <div class="col-md-3">
    <img src="https://media.gettyimages.com/id/1245842092/photo/srinagar-india-medical-staff-during-mock-drill-to-take-stock-of-preparations-for-covid-19-at.jpg?s=612x612&w=gi&k=20&c=Yq7B4f0vyads5N352Gm0qo_udJV4ijIRdENi7EDjZ9o=" width="100%"><br><br>

    <h5 class="text-center">Our Research</h5>
        <p>Clinical research and trials go hand in hand with clinical practice at Alfred Health, with this approach bringing major benefits to our patients.</p>
</div>
<div class="col-md-3">
    <img src="https://st.depositphotos.com/1037987/5047/i/450/depositphotos_50476211-stock-photo-young-female-patient-talking-to.jpg" width="100%">
    <br><br>

    <h5 class="text-center">Our Research</h5>
        <p>Clinical research and trials go hand in hand with clinical practice at Alfred Health, with this approach bringing major benefits to our patients.</p>
</div>
<div class="col-md-3">
    <img src="https://images.squarespace-cdn.com/content/v1/5aa96c579772aea9adaa2ef7/1605798567084-H4ODOXRVY97XWZLHBOG6/HowToMotivateNursesInHospitals_1120.jpg" width="100%">

    <br><br>

    <h5 class="text-center">Our Research</h5>
        <p>Clinical research and trials go hand in hand with clinical practice at Alfred Health, with this approach bringing major benefits to our patients.</p>
</div></div>
</div>
  </section>
  <br><br>

   <!-- section 1 -->
   <section class="fornext">
    <div class="black-layer">
    <h1 class="text-center text-white">You might also be interested in...</h1>
    <h5 class="text-center text-white">Our Research</h5>
        <p class="text-center text-white">Clinical research and trials go hand in hand with clinical practice at Alfred Health, with this approach bringing major benefits to our patients.</p>
</div></div>
</div></section><br><br>

<!-- section news -->
<section>
    <div class="container-fluid">
  <div class="row">
    <div class="col-md-4">
        <h1 class="text-center">Latest News</h1>
    <img src="https://www.alfredhealth.org.au/images/made/images/general/Paula_Fox_MCC/PFMCC_facade_1500x1000_580_400_c1.png" width="100%" height="200px"><br><br>

<h5>National boost for melanoma care</h5>
<br>
<span>A world-class melanoma and cancer centre at The Alfred is set to revolutionise care for Victorian patients, and boost research.</span>
</div>
        <div class="col-md-4" style="margin-top:55px;">
        <!-- <h1>Latest News</h1> -->
    <img src="https://www.alfredhealth.org.au/images/made/images/general/News/IWD_2024_researchers_(7)_580_400_c1.jpg" width="100%" height="200px"><br><br>

<h5>Women share inspiring paths to success</h5>
<span>Here at Alfred Health, 72 per cent of our 11,000-strong workforce is women. Our executive team is 75 per cent women, and with our Board, 78 per cent women – which is far greater than the national average of just one third. </span>
</div>
        <div class="col-md-4" style="margin-top:55px;">
        <!-- <h1>Latest News</h1> -->
    <img src="https://www.alfredhealth.org.au/images/made/images/general/News/uae-trip_580_400_c1.png" width="100%" height="200px"><br><br>

<h5>Driven to improve global emergency care</h5>
<span>The Alfred continues to support the advancement of global emergency care, with a team of talented multidisciplinary staff recently returning from delivering training for their emergency care counterparts in the United Arab Emirates.</span>
        <div>
            
        </div></div>
</section><br><br>

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
