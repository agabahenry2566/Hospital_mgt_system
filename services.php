<?php 
session_start();

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Services at Goodwill</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="main.css">
<script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

</head>
<body>
	<?php 

	include("include/header.php");
	include("include/connection.php");

	 ?>

	 <!-- ======= Services Section ======= -->
   <section id="services" class="services mt-5 mb-3 py-3">
    <div class="container">
      <div class="section-title">
        <h2 class="text-center">Services</h2>
        <p class="text-center">At GoodWill Hospital we offer quite a number of good quality health services to our patients.These services are delivered 24/7 every day.</p>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="service shadow">
            <div class="icon">
                <i class="fas fa-tooth"></i>
            </div>
            <h4><a href="">Dental Care</a></h4>
            <p>Dental care, including comprehensive treatment, of long-stay 
            in-patients which is required for pain reliefand  other emergencies.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="service c shadow">
            <div class="icon">
                <i class="fas fa-lungs"></i>
            </div>
            <h4><a href="">Lung Services</a></h4>
            <p>We are committed to delivering excellent care to patients dealing with illnesses of the lungs and thoracic cavity. We treat all aspects of chronic and acute lung conditions.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="service shadow">
            <div class="icon">
                <i class="fas fa-heart"></i>
            </div>
            <h4><a href="">Heart Services</a></h4>
            <p>Our expert team of heart specialists are committed to providing patients with comprehensive and compassionate cardiac care. Our cardiology programs offer advanced diagnostic and treatment options.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="service c shadow">
            <div class="icon">
                <i class="fas fa-dna"></i>
            </div>
            <h4><a href="">DNA Services</a></h4>
            <p> we focus exclusively on services offering ancestral DNA testing: tests that comb through your DNA to help find where in the world you came from, identify unknown contemporary relatives</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="service shadow">
            <div class="icon">            
          <i class="fas fa-ambulance"></i>
            </div>
            <h4><a href="">Emergency Services</a></h4>
            <p>Our Emergency department at GoodWill Hospital is critical to the manage acute illness and injury, and the provision of health system access at the medical centre</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="service shadow">
            <div class="icon">
            <i class="fas fa-allergies"></i>
            </div>
            <h4><a href="">Allergy Care</a></h4>
            <p>The Allergy Service at GoodWill Hospital manages patients with allergic problems and urticaria and angioedema.Adult out-patient allergy clinic appointments are held concutrrently</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Services Section -->


</body>
</html>