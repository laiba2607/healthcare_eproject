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
      .forimage{
      background-image: url(https://adaptivemedicalpartners.com/wp-content/uploads/2018/10/rbc-medical-innovations-office.jpg);
    background-size: cover;
    height: 350px;
    border: 8px solid #007bff;
      }

    .black-layr{
        background-color: rgba(0, 0, 0, 0.2);
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
<!-- <h1 class="text-center text-white">Latest News</h1> -->
</div></section>
<br><br>

<!-- section 2 -->
<div class="bg-light">
    <div class="text-center">
      <p style="font-weight: normal; font-size: 20px; padding: 30px 30px;">Technology and medicine have gone hand and hand for many years. Consistent advances in pharmaceuticals and the medical field have saved millions of lives and improved many others. As the years pass by and new technology in healthcare continues to improve, there is no telling what medical advances will come next. Here we have rounded up the top 10 new medical technologies in 2022:<br>
    </div>
  </div></section>
  <br><br>

<!-- forinventions -->
<section>
<div class="container">
  <div class="row">
              <img src="https://www.proclinical.com/img/e0c5742e-2472-47a0-6ff9-08da2738e595" width="100%" style="height:250px;">
  </div></div>
<br>

  <div class="container">
  <div class="row">
          <h1 class="">1- MRNA TECHNOLOGY</h1><br><br>
          <p style="font-size: 16px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">mRNA technology has been put under the spotlight recently as the new vaccines for Covid-19 use this science. With their high effectiveness, capacity for rapid development, and potential for low production costs, mRNA vaccines offer an alternative to the traditional vaccine approach.
<br>
mRNA, or messenger ribonucleic acid, is a single-stranded RNA molecule that carries the genetic information that is derived from DNA. mRNA vaccines work by providing a genetic code to cells to allow them to produce viral proteins, once the proteins have been created the body can then produce an immune response. The success of the Covid-19 mRNA vaccines has given a big boost to efforts to develop other mRNA vaccines for everything, from cancers to Zika virus.</p>
          </div></div>
</section>
<br><br>

<!-- section2 -->
<section>
<div class="container">
  <div class="row">
              <img src="https://www.proclinical.com/img/c93a3739-05e4-437c-6ffc-08da2738e595" width="100%" style="height:250px;">
  </div></div>
<br>

  <div class="container">
  <div class="row">
          <h1 class="">2- VIRTUAL REALITY</h1><br><br>
          <p style="font-size: 16px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Virtual reality has been around for some time. However, it is now being increasingly used to treat and manage a wide range of psychological illnesses and conditions, from stress and anxiety to dementia and autism. But its capabilities are not just limited to mental health conditions, it is also being used for effective pain management by changing the patients’ thoughts and perceptions around pain.
<br>
VR has also greatly improved the training processes for medical professionals, as it allows you to be transported into the human body.

</p>
          </div></div>
</section>
<br><br>

<!-- section3 -->
<section>
<div class="container">
  <div class="row">
              <img src="https://www.proclinical.com/img/10d71247-d685-44f6-6ffd-08da2738e595" width="100%" style="height:250px;">
  </div></div>
<br>

  <div class="container">
  <div class="row">
          <h1 class="">3- NEUROTECHNOLOGY</h1><br><br>
          <p style="font-size: 16px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Neurotechnology holds boundless potential to improve many aspects of life. It is already being practically applied in the medical and wellness industries, but also has many future implications for other contexts including education, workplace management, national security, and even sports.
<br>
Neurotechnology encompasses all components that are developed to understand the brain, visualise its processes and even control, repair or improve its functions. These components can be computers, electrodes, or any other devices that can be set up to intercept electric pulses that run through the body.

</p>
          </div></div>
</section>
<br><br>

<!-- section4 -->
<section>
<div class="container">
  <div class="row">
              <img src="https://www.proclinical.com/img/fa3c10b2-8289-4696-235e-08da274e6e1d" width="100%" style="height:250px;">
  </div></div>
<br>

  <div class="container">
  <div class="row">
          <h1 class="">4- ARTIFICIAL INTELLIGENCE</h1><br><br>
          <p style="font-size: 16px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">AI is one of the most exciting technologies changing the healthcare landscape in 2022.
<br>
AI is proving to be very valuable when it comes to detecting diseases early and for confirming an accurate diagnosis quicker. For example, in breast cancer care, the use of AI is enabling the review of mammograms to be 30 times faster with 99% accuracy, reducing the need for unnecessary biopsies. AI is also being applied to oversee early-stage heart disease, allowing healthcare providers to discover potentially life-threatening problems at earlier and at more treatable stages. In addition, AI is also helping clinicians to create more comprehensive treatment programmes, allowing patients to manage their conditions more effectively.

</p>
          </div></div>
</section>
<br><br>

<!-- section5 -->
<section>
<div class="container">
  <div class="row">
              <img src="https://www.proclinical.com/img/8dec04c8-eabf-44e7-2360-08da274e6e1d" width="100%" style="height:250px;">
  </div></div>
<br>

  <div class="container">
  <div class="row">
          <h1 class="">5- 3D PRINTING</h1><br><br>
          <p style="font-size: 16px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">3D printers have quickly become one of the hottest technologies on the market. In healthcare, these game-changing printers can be used to create implants and even joints to be used during surgery. 3D-printed prosthetics are increasingly popular as they are entirely bespoke, with the digital functionalities enabling them to match an individual’s measurements down to the millimetre. The allows for unprecedently levels of comfort and mobility.
<br>
Using 3D printing for presurgical planning is also gaining momentum. Using a realistic replica of an actual patient’s anatomy is allowing surgeons to attempt procedures they wouldn’t have previously been able to do. 

</p>
          </div></div>
</section>
<br><br>

<!-- section6 -->
<section>
<div class="container">
  <div class="row">
              <img src="https://www.proclinical.com/img/5290624e-7cc2-4c91-235d-08da274e6e1d" width="100%" style="height:250px;">
  </div></div>
<br>

  <div class="container">
  <div class="row">
          <h1 class="">6- PRECISION MEDICINE</h1><br><br>
          <p style="font-size: 16px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">As medical technology advances it is becoming more and more personalised to individual patients. Precision medicine considers the individual variability in genetics, environment, and lifestyle for each patient. For example, when using precision medicine to treat a patient with cancer, the medicine can be tailored to them based on their unique genetic make-up. 
<br>
Precision medicine presents great opportunities in transforming the future of healthcare. While it is currently most advanced in oncology, precision medication also has wider, exciting applications, such as in rare and genetic diseases, it also holds some promise in treating infections.

</p>
          </div></div>
</section>
<br><br>

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
