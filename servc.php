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
      .blck-lyr{
	background-color:rgba(0,0,0,0.5);
	height:100%;
	padding-top:50px;
	padding-bottom:90px;
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
        <a class="nav-link" href="\healthcare_eproject\login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="\healthcare_eproject\signup.php">Sign Up</a>
      </li>
      
    </ul>
    </div>
    </nav>
<br>
<section class="bg-dark">
	<div class="container bg-white">
    <h3>Terms & Conditions for Medical Health Services including Tele-Services</h3>

<p>This document contains the Terms and Conditions ("Terms") governing your use of our medical health services website, including tele-services. By accessing or using this website, you agree to be bound by these Terms. If you do not agree with any of these Terms, please do not use this website.

<h4>Eligibility and Enrollment</h4>

<p>Our medical health services website, including tele-services, is intended for use by individuals seeking medical information, consultation, and services. By using this website, you represent and warrant that you are seeking such information or services.

To access certain features of the website, including tele-services, you may need to register for an account. When registering for an account, you agree to provide accurate, current, and complete information. You are responsible for maintaining the confidentiality of your account and password and for restricting access to your computer. You agree to accept responsibility for all activities that occur under your account or password.</p>

<h4>Content Usage Guidelines</h4>

<p>All content on this website, including but not limited to medical information, articles, graphics, images, and other materials, is provided for informational purposes only. It is not intended to be a substitute for professional medical advice, diagnosis, or treatment. Always seek the advice of your physician or other qualified healthcare provider with any questions you may have regarding a medical condition.

Our medical health services website does not recommend or endorse any specific healthcare providers, treatments, procedures, opinions, or other information that may be mentioned on this website. Reliance on any information provided by this website is solely at your own risk.</p>

<h4>Medical Information Advisory</h4>

<p>The content provided on this website, including tele-services, is for informational purposes only and is not intended as medical advice, diagnosis, or treatment. Always seek the advice of your physician or other qualified healthcare provider with any questions you may have regarding a medical condition. Never disregard professional medical advice or delay in seeking it because of something you have read on this website.

Our medical health services website does not recommend or endorse any specific tests, physicians, products, procedures, opinions, or other information that may be mentioned on this website. Reliance on any information provided by this website, including tele-services, is solely at your own risk.</p>

<h4>4. Responsibility Constraints</h4>

<p>Our medical health services website shall not be liable for any direct, indirect, incidental, special, consequential, or punitive damages arising out of your access to or use of this website or any content on this website, including tele-services. This includes, but is not limited to, damages for loss of profits, goodwill, use, data, or other intangible losses, even if our medical health services website has been advised of the possibility of such damages.

In no event shall our medical health services website be liable for any damages arising from the use of or inability to use this website, whether based on warranty, contract, tort, or any other legal theory, and whether or not our medical health services website has been informed of the possibility of such damage.</p>

<h4>Revisions and Amendments to Terms & Conditions</h4>

<p>Our medical health services website reserves the right to update or modify these Terms at any time without prior notice. Your continued use of this website after any changes indicates your acceptance of the revised Terms. It is your responsibility to review these Terms periodically for any updates or changes.</p>

<h4>6. Contact Information</h4>

<p>If you have any questions or concerns about these Terms, please contact us at [insert contact information].</p>
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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>