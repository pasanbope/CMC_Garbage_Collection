<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Report Incedents-Volunteer</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.jpg" rel="icon">
  <link href="assets/img/logo.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <link href="assets/img/logo.jpg" rel="icon">
      <h3 class="logo me-auto"><a href="index.php">
        <img src="assets/img/logo.jpg" /></a></h3>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="index.php">Home</a></li>
          <li><a class="nav-link scrollto active" href="report.php">Report Incedents</a></li>
          <li><a class="nav-link scrollto" href="profile.php">Profile</a></li>
         
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
   <!-- ======= Hero Section ======= -->
   <section id="heror">
    <div id="herorCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="heror-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <div class="carousel-item active" style="background-image: url(assets/img/CMC2.jpg)">
          <div class="carousel-container">
            <div class="container">
                <h5 class="animate__animated animate__fadeInDown">If you see garbage anywhere, <span>the form below to report it.</span> </h5>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Hero -->

  <!-- ======= Reprot form Section ======= -->

  <section id="report" class="report">
    <div class="container">

      <div class="section-title">
        <h2>Report an incident</h2>
      </div>

      <div class="row">

      <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
        <form action=""   method="post" role="form" class="php-form" autocomplete="off" enctype="multipart/form-data">
          <div class="row">
            <div class="form-group col-md-6">
              <label for="image">Photo:</label>
              <input type="file" id="image" name="image" accept=".jpg, .jpeg, .png">
            </div>
          </div>
          <div class="form-group mt-3">
            <label for="details">Incident details:</label>
            <textarea class="form-control" name="details" rows="6" required></textarea>
          </div>
          <br>
          <div class="form-group mt-3">

         
        
            <label for="latitude">Latitude:</label>
		<input type="text" class="latitude" id="latitude" name="latitude" readonly>

		<label for="longitude">Longitude:</label>
		<input type="text" class="longitude" id="longitude" name="longitude" readonly>

		<input type="button" value="Get Location" onclick="getLocation()">
		
            
          </div>
         <br>
          <div class="text-center"><button type="submit" name ="btnlogin"><font color="green">Submit</font></button></div>
        </form>
      </div>
      <div class="col-lg-5 d-flex align-items-stretch">
        <div class="info">
          <iframe src="https://www.google.com/maps/embed/v1/view?key=AIzaSyCChcqjLkqffbhdBt0GlljGmFg13afgc2A&center=0,0&zoom=15" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
        </div>
      </div>
  </div>
  </section><!-- End Reprot form Section -->



  <script type="text/javascript">
		function getLocation() {
			if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(showPosition);
			} else {
				alert("Geolocation is not supported by this browser.");
			}
		}

		function showPosition(position) {
			var latitude = position.coords.latitude;
			var longitude = position.coords.longitude;
			document.getElementById("latitude").value = latitude;
			document.getElementById("longitude").value = longitude;

			var mapUrl = "https://www.google.com/maps/embed/v1/view?key=AIzaSyCChcqjLkqffbhdBt0GlljGmFg13afgc2A&center=" + latitude + "," + longitude + "&zoom=15";
			document.getElementsByTagName("iframe")[0].src = mapUrl;
		}
	</script>

<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="container">
 <!--   <div class="carouselFooter-item active" style="background-image: url(assets/img/CMC2.jpg)"> -->
    <h3>GTF-Volunteer</h3>
    <p>Garbage can have numerous harmful effects on our planet.Taking care of our planet is an important responsibility that we all share, and every effort counts.</p>
    <div class="social-links">
      <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
      <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
      <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
      <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
    </div>
  </div>
    <div class="copyright">
      &copy; Copyright <strong><span>CMC</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
     Designed by Group 25
    </div>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!--Main JS File -->
<script src="assets/js/main.js"></script>
<!--php-->
<?php

// database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "green";

// create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // prepare and bind statement
  $stmt = $conn->prepare("INSERT INTO tb_reprotgarbage (image_data, details, lat, lang) VALUES (?, ?, ?, ?)");
  $stmt->bind_param("ssdd", $image, $details, $latitude, $longitude);

  // get form data
  $image = $_FILES['image']['name'];
  $details = $_POST['details'];
  $latitude = $_POST['latitude'];
  $longitude = $_POST['longitude'];

  // move uploaded file to a folder on server
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["image"]["name"]);
  move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

  // execute statement
  if ($stmt->execute()) {
    echo "<script>alert('New record created successfully');</script>";
    
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  // close statement and connection
  $stmt->close();
  $conn->close();
}
?>





</body>
</html>

