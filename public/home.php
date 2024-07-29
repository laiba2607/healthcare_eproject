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

    
    .kyframe{
	background-image:url(https://media.istockphoto.com/id/1327568875/photo/healthcare-business-graph-data-and-growth-insurance-healthcare-doctor-analyzing-medical-of.jpg?s=612x612&w=0&k=20&c=R4idIeTPq0f1TPSJwAq4KUeLUQg6ul8eIBSjvs9MXQk=);
	height:350px;
	background-size:cover;
	animation-name:kyframe;
	animation-duration:12s;
	animation-iteration-count:infinite;
	background-position:center;
	}
    @keyframes kyframe{
        0%{}
        20%{ background-image:url(https://www.mastercard.us/content/dam/public/mastercardcom/na/us/en/large-enterprises/images/female-doctor-in-hospital-corridor-using-tablet-1300x650.jpg); }
        30%{ background-image:url(https://hbr.org/resources/images/article_assets/2019/10/Oct19_22_1032609198.jpg); }
        45%{ background-image:url(https://hbr.org/resources/images/article_assets/2019/10/Oct19_22_1032609198.jpg); }
        65%{ background-image:url(https://www.herzing.edu/sites/default/files/2022-10/healthcare-professionals.jpg); }
        80%{ background-image:url(https://images.pexels.com/photos/236380/pexels-photo-236380.jpeg?cs=srgb&dl=pexels-pixabay-236380.jpg&fm=jpg); }
        100%{ background-image:url(https://t3.ftcdn.net/jpg/00/45/20/70/360_F_45207005_oWfbp8uUsuEV74nNLbGS4HyrybFXQek4.jpg); }
        }
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
      .blck-lyr{
	background-color:rgba(0,0,0,0.5);
	height:100%;
	padding-top:50px;
	padding-bottom:90px;
}
.doctt{
  font-family: 'Nova', cursive;
  /* font-weight: bold; */
}
.h-5{
            font-size:50px;
            text-align:center;
            padding:20PX;
            font-family: 'Nova', cursive;
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
        <a class="nav-link" href="\healthcare_eproject\nventions.php">Inventions</a>
      </li>
    </ul>
    <form id="searchForm" class="form-inline my-2 my-lg-0">
  <input id="searchInput" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
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
<br>
<div class="kyframe">
  <div class="blck-lyr">
    <div class="col-sm-5 doctt">
  <h1 class="text-center text-white">Our Hospitals</h1><br>
  <p style="font-size: 17px;" class="doctt text-white">We offer the best care to patients at our three public hospitals, as well as at many community locations.</p>
  <a href="#about-us" class="btn btn-primary text-center mt-3" style="border-radius: 100px; margin-left: 200px; min-width: 215px; padding-left: 30px; padding-right: 30px; min-height: 50px; font-weight: 700; font-style: normal; padding: 11px 22px; border-color: white;">Find Out More</a>

</div>
  </div>
</div>
<br><br>
<div class="bg-light">
  <div class="text-center">
    <p style="font-weight: normal; font-size: 20px; padding: 30px 30px;">Providing leading healthcare for the people of Melbourne and Victoria.</p>
  </div>
</div>


<!--Section 1-->
<section>
  <div class="container">
  <div class="row">
      <div class="col-md-6 about rounded" style="background-color: beige;;">
          <h1 class="text-center">About Us</h1><br>
          <p style="font-size: 16px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum et accusamus porro harum corrupti asperiores, illum non, ducimus error sapiente sunt vel laboriosam, fugit velit ipsum quis nobis similique reprehenderit</p>
          <a href="" class="btn btn-primary text-center mt-2" style="margin-left: 150px; min-width: 200px; padding-left: 30px; padding-right: 30px; min-height: 50px; font-weight: 600; font-style: normal; padding: 11px 22px; border-color: white;">About Us</a>
          </div>
          <div class="col-md-6">
              <img src="https://hbr.org/resources/images/article_assets/2019/10/Oct19_22_1032609198.jpg" width="100%">
              <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; text-align: center; color: #060606; padding: 20px;">
                <h2 style="font-size: 30px;">Welcome to Our Website</h2>
            <p style="font-size: 20px;">Discover our mission and commitment</p>
              
</div>
          </div>
      </div>
  </div>
</section>
<br><br>
<!--gallery-->
<section>
  <h1 class="h-5">Gallery</h1>
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-4 mt-2">
            <img src="https://img.freepik.com/free-photo/doctor-nurse-discussing-digital-tablet_107420-84816.jpg" width="100%" height="250">
        </div>  

        <div class="col-md-4 mt-2">
          <img src="https://itechnolabs.ca/wp-content/uploads/2022/12/how-much-does-it-cost-to-develop-a-hospital-management-system-itechnolabs.jpg" width="100%" height="250">
      </div>  

        <div class="col-sm-4 mt-2">
            <img src="https://www.alfredhealth.org.au/images/made/images/general/community-services-category_270_180.jpg" width="100%" height="250">
        </div>  
        </div>
<!--row2-->
        <div class="row">  
            <div class="col-lg-4  mt-2">
                <img src="https://www.alfredhealth.org.au/images/made/images/general/diagnosis-investigation-category_270_180.jpg" width="100%" height="250">
        </div> 

        <div class="col-lg-4  mt-2">
            <img src="https://media.licdn.com/dms/image/D4D12AQGidujsZ3P94A/article-cover_image-shrink_600_2000/0/1698843260749?e=2147483647&v=beta&t=fLjZ7AuUpoETh97olUCgF-eOX2m5E4GiKFUfpn3m7NM" width="100%" height="250">
        </div> 

        <div class="col-lg-4  mt-2">
        <img src="https://www.alfredhealth.org.au/images/made/images/general/medical-surgical-category_270_180.jpg" width="100%" height="250">
        </div> 
        </div>
<!--row3-->
        <div class="row">  
            <div class="col-lg-4  mt-2">
                <img src="https://miro.medium.com/v2/resize:fit:1200/1*JAsdtd9zBAUna4VFGK4f6Q.png" width="100%" height="250">
        </div> 
        <div class="col-lg-4  mt-2">
            <img src="https://www.alfredhealth.org.au/images/made/images/general/rehabilitation-category_270_180.jpg" width="100%" height="250">
    </div> 
    <div class="col-lg-4  mt-2">
      <img src="https://www.alfredhealth.org.au/images/made/images/general/specialised-support-category_270_180.jpg" width="100%" height="250">
</div> 
  </section>
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
