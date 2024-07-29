<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="10">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://seeklogo.com/images/H/home-care-logo-847AC1C5A6-seeklogo.com.png">
  <title>Care</title>
</head>
<body>
    <title>Navbar Example</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!--Font Awesome Cdn-->  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  <!-- Google Font Cdn-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nova+Script&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Charm:wght@700&family=Nova+Script&display=swap" rel="stylesheet">
<!-- Google Font Cdn-->
    <!--about us-->
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

        .hike{
	background-image:url(https://www.brookings.edu/wp-content/uploads/2017/05/hospital002.jpg?quality=75);
	background-size:cover;
	animation-name:hike;
	animation-duration:5s;
	animation-iteration-count:infinite;
	background-position:top;
	}
@keyframes hike{
	0%{}
	35%{ background-image:url(https://www.eta.co.uk/wp-content/uploads/2018/01/hospital.jpg); }
	65%{ background-image:url(https://thumbor.forbes.com/thumbor/fit-in/900x510/https://www.forbes.com/advisor/in/wp-content/uploads/2023/04/pexels-rodnae-productions-6129507-scaled.jpg); }
	100%{ background-image:url(https://media.istockphoto.com/id/619636894/photo/hospital-corridor-and-doctor-as-a-blurred-defocused-background.jpg?s=612x612&w=0&k=20&c=TdoBrcOjOWPEshB0uHoDk2ecG_ySwWt1K0kf7O_jvkI=); }
	}

    .hiking{
	background-image:url(https://healthwire.pk/wp-content/uploads/2022/09/best-hospitals-in-karachi.jpg);
	background-size:cover;
	animation-name:hiking;
	animation-duration:10s;
	animation-iteration-count:infinite;
	background-position:top;
	}
@keyframes hiking{
	0%{}
	35%{ background-image:url(https://cdn.firstcry.com/education/2022/04/26104239/1686721738.jpg); }
	65%{ background-image:url(https://www.unison.org.uk/content/uploads/2018/06/car_park2-745x420.jpg); }
	100%{ background-image:url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkxUkXdda82zNM80eAaT1pJ4B0Y-WCqBiPODNuS4h_JA&s); }
	}

    .hiking1{
	background-image:url(https://cdn.systematic.com/media/g0sj1tbg/hospital-building-001-global.jpg?mode=crop&width=1200&height=630&center=);
	background-size:cover;
	animation-name:hiking1;
	animation-duration:10s;
	animation-iteration-count:infinite;
	background-position:top;
	}
@keyframes hiking1{
	0%{}
	35%{ background-image:url(https://sanarhospitals.com/uploadedfiles/gallery/1689762337_3.jpg); }
	65%{ background-image:url(https://merriam-webster.com/assets/mw/images/article/art-wap-article-main/alt-5ae892611bf1a-5168-68b2575aab38f2c97ce8846381d07044@1x.jpg); }
	100%{ background-image:url(https://www.reliance-foundry.com/wp-content/uploads/hospital-parking-management.jpg) }
	}	
    .hiking2{
	background-image:url(https://play-lh.googleusercontent.com/bLQnRuwVqgLcpnTuJHNTHbtmg1yVuvyCRMicrQ1u0Ydt-hz5gsGX0p6MrWxZ6Pu6F2c=w416-h235-rw);
	background-size:cover;
	animation-name:hiking2;
	animation-duration:10s;
	animation-iteration-count:infinite;
	background-position:top;
	}
@keyframes hiking2{
	0%{}
	35%{ background-image:url(https://wpassets.graana.com/blog/wp-content/uploads/2023/08/agha-khan.jpg); }
	65%{ background-image: url(https://hips.hearstapps.com/hmg-prod/images/types-of-doctors-1600114658.jpg?crop=1xw:0.8425829875518672xh;center,top&resize=1200:*); }
	100%{ background-image:url(https://s3-eu-west-1.amazonaws.com/intercare-web-public/wysiwyg-uploads%2F1580196666465-doctor.jpg);}
	}

    .forbg{
	background-image:url(https://www.partnermd.com/hubfs/Blog%20Images%20%28Optimized%29/modern-hospital-building-picture-id1312706413%20%281%29%20%281%29.jpg#keepProtocol);
	height:350px;
	background-size:cover;
	border: 8px solid #007bff;
	background-position:center;
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
      .forback{
	background-image:url(https://sanarhospitals.com/uploadedfiles/gallery/1689762337_3.jpg);
	height:350px;
	background-size:cover;
	background-position:center;
  border: 8px solid #007bff;
	}
    /* .blck-lyer{
	background-color:rgba(0,0,0,0.2);
	height:100%;
	padding-top:150px;
	padding-bottom:90px;
} */

    </style>
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

<section>
    <div class="forbg">
    <!-- <img src="https://www.partnermd.com/hubfs/Blog%20Images%20%28Optimized%29/modern-hospital-building-picture-id1312706413%20%281%29%20%281%29.jpg#keepProtocol" alt=""> -->
    </div>
    </section>
    <br>
    
    <section>
        <div class="container bg-light text-center" style="padding: 30px;">
           <h1>Our Public Hospitals<i class="fa-stethoscope fa-solid fa-2x text-primary"></i></h1></div><br><br>
           <div class="container bg-light text-center">
            <div class="row">
                <div class="col-md-6">
                    <h3>Health Care Hospital</h3>
                       <br><p>Exceptional healthcare facilities must all meet certain criteria to earn that distinction. Cutting-edge medical technology is essential, while a diverse range of medical specialties is almost expected. Supportive staff and a commitment to patient care are paramount. Add in a dedication to research and innovation, and you have a recipe for excellence. Whether it's state-of-the-art facilities, groundbreaking treatments, a rich medical history, or simply exceptional patient outcomes, each top-tier hospital in this roundup possesses that extra something special that sets it apart. I've been a professional healthcare writer for most of my career, and these are the absolute best institutions that have consistently impressed me over the years
                        </p>
                        <h3>LOCATION</h3>
                        <p>Location: Across Various Regions in Pakistan</p>
                      </div>
                        
                       <div class="col-md-5 hike">
                      
                         </div>
                         </div>
    <br>	
    <br>
    
    <div class="row">
        <div class="col-md-5 hiking">
    
        </div>
        <div class="col-md-6">
            <h2>Family Care Hospital</h2>
    <p>Just because this hospital serves the community around, rather than being a specialized facility, don't assume it's lacking in comprehensive care. Think of it this way: with a total range of medical services covering various specialties, it's sort of like having access to a full medical campus, minus the need to navigate different locations. Spread across the area to fully appreciate the extensive healthcare options available in the region, from primary care and pediatrics to specialized treatments and surgical procedures. With multiple departments and a network of healthcare professionals, the hospital is well-equipped to provide quality care for all medical needs.
                </p>
                        <h3>LOCATION</h3>
                        <p>Location: Across Various Regions in Pakistan</p>
                      </div>
    </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    
    <div class="container bg-light text-center" style="padding: 30px;">
    <div class="row">
		<div class="col-md-6">
    <h3>Child Care Hospital</h3>
<p>Patience is a virtue when planning to visit this nurturing and specialized hospital dedicated to pediatric care. With its state-of-the-art facilities, compassionate staff, and access to a wide range of pediatric medical services, including neonatal care and specialized pediatric surgeries, this hospital is worth every effort to reach. But due to recent renovations and expansions, it may be temporarily closed until at least mid-2019. Even when open, access can be limited. Admission beyond certain areas may require prior authorization, and to manage increasing demand while ensuring quality care, the hospital may implement visitor restrictions. Stay updated on access and announcements via the hospital's official website.</p>
<h3>LOCATION</h3>
                        <p>Location: Across Various Regions in Pakistan</p>

		</div>
        <div class="col-md-5  hiking1">
    
    </div>
	</div>
     
    <br>
    <br>
    <br>
    <br>
    
        <div class="row">
        <div class="col-md-5  hiking2">
        
        </div>
            <div class="col-md-6">
            <h3>Lifeline Hospital</h3>
<p>There are many routes to medical care, but in true commitment to health, choose the specialized path provided by Lifeline Hospital. Sign on for the comprehensive care offered by a dedicated team of healthcare professionals, following the path of healing and recovery. The hospital, located in a strategic area, serves as a lifeline for those in need of medical assistance. The journey through the medical process may be challenging, but the payoff is improved health and well-being. Along the way, experience top-notch medical facilities and personalized care. Stay updated on services and advancements via the hospital's official channels.</p>
<h3>LOCATION</h3>
                        <p>Location: Across Various Regions in Pakistan</p>
            </div>
        </div></div>
    <br>
    <br>
    <br>
        
            </section>
    <br>
    <br>

    <section>
        <div class="forback blck-lyer">
            </div></section>
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
