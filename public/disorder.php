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
      background-image: url(https://www.healthwriterhub.com/wp-content/uploads/2015/10/what-is-a-disease.png);
    background-size: cover;
    height: 350px;
    border: 8px solid #007bff;
      }

    .black-layr{
        background-color: rgba(0, 0, 0, 0.5);
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
    </nav>
<br><br>

    <!-- section 1 -->
    <section class="forimage">
    <div class="black-layr">
    <h1 class="text-center text-white">Disease, disorder & <br>Conditions</h1>
</div></section>
<br><br>


<section>
  <div class="container">
  <div class="row">
  <div class="col-md-5">
  <img src="https://www.metropolisindia.com/upgrade/blog/upload/2022/11/Asthma-Symptoms-Causes-Types-Diagnosis-_-Treatment-1.jpg" width="100% "  onClick="showText()">
  </div>
  <div class="col-md-6">
  <h1>Asthma</h1><br>
  <p style="font-size:18px;">Asthma is a chronic lung disease. Common symptoms are wheezing, coughing, chest tightness, and shortness of breath. During an asthma attack, the sides of the airways in lungs swell and the airways shrink, making it harder to breathe.</p>
  </div>

<p id="textToShow" style="display: none;">
<strong>Treatment</strong>
<br>
Supplements to replace a substance that the body lacks, such as thyroid hormone, vitamin B12, or insulin, due to the autoimmune disease.
Blood transfusions if blood is affected.
<br>
<button onClick="closeText()">x</button>
</p>
</div></div></div><br><br>

<!-- section2 -->
<section>
  <div class="container">
  <div class="row">
  <div class="col-md-5">
  <img src="https://citynaturopathic.ca/wp-content/uploads/2019/10/whats-the-deal-auto-immune-diseases.webp" width="100% "  onClick="showText2()">
  </div>
  <div class="col-md-6">
  <h1> Autoimmune disease</h1><br>
  <p style="font-size:18px;">A healthy immune system defends the body against disease and infection. But if the immune system malfunctions, it mistakenly attacks healthy cells, tissues, and organs. Called autoimmune disease, these attacks can affect any part of the body, weakening bodily function and even turning life-threatening.

</p>
  </div>

<p id="textToShow2" style="display: none;">
<strong>Treatment</strong>
<br>
Quick-relief inhalers (bronchodilators) quickly open swollen airways that are limiting breathing. In some cases, allergy medications are necessary. Long-term asthma control medications, generally taken daily, are the cornerstone of asthma treatment.
<br>
<button onClick="closeText()">x</button>
</p>
</div></div></div><br><br>

<!-- section3 -->
<section>
  <div class="container">
  <div class="row">
  <div class="col-md-5">
  <img src="https://domf5oio6qrcr.cloudfront.net/medialibrary/13732/Woman-holding-neck-in-pain.jpg" width="100% "  onClick="showText3()">
  </div>
  <div class="col-md-6">
  <h1> Inflammation</h1><br>
  <p style="font-size:18px;">Inflammation is a normal part of the body’s defense to injury or infection, and, in this way, it is beneficial. But inflammation is damaging when it occurs in healthy tissues or lasts too long.
</p>
  </div>

<p id="textToShow3" style="display: none;">
<strong>Treatment</strong>
<br>
Treatment for inflammatory diseases may include medications, rest, exercise, and surgery to correct joint damage. Your treatment plan will depend on several things, including your type of disease, your age, the medications you're taking, your overall health, and how severe the symptoms are.
<br>
<button onClick="closeText()">x</button>
</p>
</div></div><br><br>

<!-- section4 -->
<section>
  <div class="container">
  <div class="row">
  <div class="col-md-5">
  <img src="https://d3b6u46udi9ohd.cloudfront.net/wp-content/uploads/2022/05/24051731/Kidney-1.jpg" width="100% "  onClick="showText4()">
  </div>
  <div class="col-md-6">
  <h1> Kidney Disease</h1><br>
  <p style="font-size:18px;">Kidney disease means your kidneys are damaged and can't filter blood the way they should. You are at greater risk for kidney disease if you have diabetes or high blood pressure. If you experience kidney failure, treatments include kidney transplant or dialysis.
</p>
  </div>

<p id="textToShow4" style="display: none;">
<strong>Treatment</strong>
<br>
At that point, you need dialysis or a kidney transplant. Dialysis. Dialysis artificially removes waste products and extra fluid from your blood when your kidneys can no longer do this. In hemodialysis, a machine filters waste and excess fluids from your blood
<br>
<button onClick="closeText()">x</button>
</p>
</div></div><br><br>

<!-- section5 -->
<section>
  <div class="container">
  <div class="row">
  <div class="col-md-5">
  <img src="https://www.froedtert.com/sites/default/files/styles/story_hero_medium/public/image/2018-12/lung-cancer-clinical-trial-crop.jpg?itok=i9IS6LR0" width="100% "  onClick="showText5()">
  </div>
  <div class="col-md-6">
  <h1> Lung disease</h1><br>
  <p style="font-size:18px;">Lung disease refers to several types of diseases or disorders that prevent the lungs from functioning properly. Lung disease can affect respiratory function, or the ability to breathe, and pulmonary function, which is how well lungs work.
</p>
  </div>

<p id="textToShow5" style="display: none;">
<strong>Treatment</strong>
<br>
A lung transplant is surgery to remove a diseased lung and replace it with a healthy lung. Lung transplants are used to improve quality of life and extend the lifespan for people who have severe or advanced chronic lung conditions that do not respond to other treatments.
<br>
<button onClick="closeText()">x</button>
</p>
</div></div><br><br>

<!-- section6 -->
<section>
  <div class="container">
  <div class="row">
  <div class="col-md-5">
  <img src="https://images.ctfassets.net/yixw23k2v6vo/bCGly8B65UqUM42UwKgQw/fab70d014f950def26e2d1f34728f81e/iS-11_Possible_Complications_of_Ankylosing_Spondylitis-iStock-525725806.jpg" width="100% "  onClick="showText6()">
  </div>
  <div class="col-md-6">
  <h1> Ankylosing Spondylitis</h1><br>
  <p style="font-size:18px;">Lung disease refers to several types of diseases or disorders that prevent the lungs from functioning properly. Lung disease can affect respiratory function, or the ability to breathe, and pulmonary function, which is how well lungs work.
</p>
  </div>

<p id="textToShow6" style="display: none;">
<strong>Treatment</strong>
<br>
Physiotherapy and exercise. Keeping active can improve your posture and range of spinal movement, along with preventing your spine becoming stiff and painful. ...
Painkillers. ...
<br>
<button onClick="closeText()">x</button>
</p>
</div></div></div><br><br>

<!-- section7 -->
<section>
  <div class="container">
  <div class="row">
  <div class="col-md-5">
  <img src="https://www.miamijewishhealth.org/wp-content/uploads/2022/02/BoneDensity.jpg" width="100% "  onClick="showText7()">
  </div>
  <div class="col-md-6">
  <h1> Bone Health and Osteoporosis</h1><br>
  <p style="font-size:18px;">Osteoporosis is called a “silent” disease” because there are typically no symptoms until a bone is broken. Symptoms of vertebral (spine) fracture include severe back pain, loss of height, or spine malformations such as a stooped or hunched posture (kyphosis).
</p>
  </div>

<p id="textToShow7" style="display: none;">
<strong>Treatment</strong>
<br>
Exercise: Regular exercise can strengthen your bones (and all the tissue connected to them, like your muscles, tendons and ligaments). ...
<br>
<button onClick="closeText()">x</button>
</p>
</div></div></div><br><br>

<!-- section8 -->
<section>
  <div class="container">
  <div class="row">
  <div class="col-md-5">
  <img src="https://coloradopaincare.com/wp-content/uploads/fibromyalgia-colorado-pain-care-moghim-krutsch-spine.jpg" width="100% "  onClick="showText8()">
  </div>
  <div class="col-md-6">
  <h1> Fibromyalgia</h1><br>
  <p style="font-size:18px;">Fibromyalgia also causes sleep problems, fatigue, and emotional and mental distress. People with fibromyalgia may be more sensitive to pain than people without fibromyalgia. 
</p>
  </div>

<p id="textToShow8" style="display: none;">
<strong>Treatment</strong>
<br>
Treatment typically involves a combination of exercise or other movement therapies, psychological and behavioral therapy, and medications.
<br>
<button onClick="closeText()">x</button>
</p>
</div></div><br><br>

<!-- section9 -->
<section>
  <div class="container">
  <div class="row">
  <div class="col-md-5">
  <img src="https://www.hopkinsmedicine.org/-/media/images/health/_-images-to-be-filed/ebola.jpg?h=500&iar=0&mh=500&mw=1300&w=1285&hash=471E6947A819D3A11A91E91E2CD98181" width="100% "  onClick="showText9()">
  </div>
  <div class="col-md-6">
  <h1> Ebola Virus Hemorrhagic Fever</h1><br>
  <p style="font-size:18px;">Ebola is a severe, often deadly disease that is caused by the Ebola virus. Symptoms of Ebola most commonly begin 8-10 days after coming into contact with the Ebola virus, but symptoms can occur anywhere between 2-21 days after exposure
</p>
  </div>

<p id="textToShow9" style="display: none;">
<strong>Treatment</strong>
<br>
Using medication to support blood pressure, reduce vomiting and diarrhea, and to manage fever and pain.
<br>
<button onClick="closeText()">x</button>
</p>
</div></div><br><br>


<script>

function showText() {
      document.getElementById('textToShow').style.display = 'block';
      document.getElementById('textToShow2').style.display = 'none';
      document.getElementById('textToShow3').style.display = 'none';
      document.getElementById('textToShow4').style.display = 'none';
      document.getElementById('textToShow5').style.display = 'none';
      document.getElementById('textToShow6').style.display = 'none';
      document.getElementById('textToShow7').style.display = 'none';
      document.getElementById('textToShow8').style.display = 'none';
      document.getElementById('textToShow9').style.display = 'none';

    }
function showText2() {
      document.getElementById('textToShow').style.display = 'none';
      document.getElementById('textToShow2').style.display = 'block';
      document.getElementById('textToShow3').style.display = 'none';
      document.getElementById('textToShow4').style.display = 'none';
      document.getElementById('textToShow5').style.display = 'none';
      document.getElementById('textToShow6').style.display = 'none';
      document.getElementById('textToShow7').style.display = 'none';
      document.getElementById('textToShow8').style.display = 'none';
      document.getElementById('textToShow9').style.display = 'none';

    }
function showText3() {
      document.getElementById('textToShow').style.display = 'none';
      document.getElementById('textToShow2').style.display = 'none';
      document.getElementById('textToShow3').style.display = 'block';
      document.getElementById('textToShow4').style.display = 'none';
      document.getElementById('textToShow5').style.display = 'none';
      document.getElementById('textToShow6').style.display = 'none';
      document.getElementById('textToShow7').style.display = 'none';
      document.getElementById('textToShow8').style.display = 'none';
      document.getElementById('textToShow9').style.display = 'none';

    }
function showText4() {
      document.getElementById('textToShow').style.display = 'none';
      document.getElementById('textToShow2').style.display = 'none';
      document.getElementById('textToShow3').style.display = 'none';
      document.getElementById('textToShow4').style.display = 'block';
      document.getElementById('textToShow5').style.display = 'none';
      document.getElementById('textToShow6').style.display = 'none';
      document.getElementById('textToShow7').style.display = 'none';
      document.getElementById('textToShow8').style.display = 'none';
      document.getElementById('textToShow9').style.display = 'none';

    }
function showText5() {
      document.getElementById('textToShow').style.display = 'none';
      document.getElementById('textToShow2').style.display = 'none';
      document.getElementById('textToShow3').style.display = 'none';
      document.getElementById('textToShow4').style.display = 'none';
      document.getElementById('textToShow5').style.display = 'block';
      document.getElementById('textToShow6').style.display = 'none';
      document.getElementById('textToShow7').style.display = 'none';
      document.getElementById('textToShow8').style.display = 'none';
      document.getElementById('textToShow9').style.display = 'none';

    }
function showText6() {
      document.getElementById('textToShow').style.display = 'none';
      document.getElementById('textToShow2').style.display = 'none';
      document.getElementById('textToShow3').style.display = 'none';
      document.getElementById('textToShow4').style.display = 'none';
      document.getElementById('textToShow5').style.display = 'none';
      document.getElementById('textToShow6').style.display = 'block';
      document.getElementById('textToShow7').style.display = 'none';
      document.getElementById('textToShow8').style.display = 'none';
      document.getElementById('textToShow9').style.display = 'none';

    }
function showText7() {
      document.getElementById('textToShow').style.display = 'none';
      document.getElementById('textToShow2').style.display = 'none';
      document.getElementById('textToShow3').style.display = 'none';
      document.getElementById('textToShow4').style.display = 'none';
      document.getElementById('textToShow5').style.display = 'none';
      document.getElementById('textToShow6').style.display = 'none';
      document.getElementById('textToShow7').style.display = 'block';
      document.getElementById('textToShow8').style.display = 'none';
      document.getElementById('textToShow9').style.display = 'none';

    }
function showText8() {
      document.getElementById('textToShow').style.display = 'none';
      document.getElementById('textToShow2').style.display = 'none';
      document.getElementById('textToShow3').style.display = 'none';
      document.getElementById('textToShow4').style.display = 'none';
      document.getElementById('textToShow5').style.display = 'none';
      document.getElementById('textToShow6').style.display = 'none';
      document.getElementById('textToShow7').style.display = 'none';
      document.getElementById('textToShow8').style.display = 'block';
      document.getElementById('textToShow9').style.display = 'none';

    }
function showText9() {
      document.getElementById('textToShow').style.display = 'none';
      document.getElementById('textToShow2').style.display = 'none';
      document.getElementById('textToShow3').style.display = 'none';
      document.getElementById('textToShow4').style.display = 'none';
      document.getElementById('textToShow5').style.display = 'none';
      document.getElementById('textToShow6').style.display = 'none';
      document.getElementById('textToShow7').style.display = 'none';
      document.getElementById('textToShow8').style.display = 'none';
      document.getElementById('textToShow9').style.display = 'block';

    }
    function closeText() {
      document.getElementById('textToShow').style.display = 'none';
      document.getElementById('textToShow2').style.display = 'none';
      document.getElementById('textToShow3').style.display = 'none';
      document.getElementById('textToShow4').style.display = 'none';
      document.getElementById('textToShow5').style.display = 'none';
      document.getElementById('textToShow6').style.display = 'none';
      document.getElementById('textToShow7').style.display = 'none';
      document.getElementById('textToShow8').style.display = 'none';
      document.getElementById('textToShow9').style.display = 'block';

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
