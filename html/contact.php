<!--
	This file was provided by a template and was modified to fit the needs of our website.
	The template can be found here:
	https://themewagon.com/themes/free-reponsive-bootstrap-4-html5-ecommerce-website-template-karma/
	code modified by @author Kaleb Phillips
-->
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="../assets/img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>RowdyBooks</title>

	<!--
        CSS
        ============================================= -->
	<link rel="stylesheet" href="../assets/css/linearicons.css">
	<link rel="stylesheet" href="../assets/css/owl.carousel.css">
	<link rel="stylesheet" href="../assets/css/themify-icons.css">
	<link rel="stylesheet" href="../assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/css/nice-select.css">
	<link rel="stylesheet" href="../assets/css/nouislider.min.css">
	<link rel="stylesheet" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" href="../assets/css/main.css">
</head>

<body>
	<!-- Start Header Area -->
	<!-- Include header -->
	<?php include('header.php'); ?>

	<!-- Set active navbar items -->
	<script>
		document.getElementById("navAboutUs").className = "nav-item submenu dropdown active";
		document.getElementById("navContact").className = "nav-item active";
	</script>
	<!-- End Header Area -->

	<!-------------------------------------- Modifications by Kaleb Phillips: Banner Area --------------------------------------------
		* Updated banner pages and links
	--------------------------------------------------------------------------------------------------------------------------------->

	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Contact</h1>
					<nav class="d-flex align-items-center">
						<a href="./">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="contact.php">Contact</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!-------------------------------------- Modifications by Kaleb Phillips: Coming Soon Area ---------------------------------------
		* Added coming soon text.
		* Added return to home page button.
		* Removed extra code from template that was not needed.
	--------------------------------------------------------------------------------------------------------------------------------->

	<!-- Start Coming Soon Area -->
    <div id="loginMessage" style="text-align: center">
        <h1 style="font-size: 60px"> Coming Soon </h1>
        <h2> Click to return to the home page </h2>
        <br>
        <a href="./" type="button" class="genric-btn primary large" style="font-size : 20px; color: var(--primary_color)">Home</a>
    </div>
    <!-- End Coming Soon Area -->

	<!--================Blog Area =================-->
    <section class="blog_area single-post-area section_gap">
        <div class="container">
        </div>
    </section>
    <!--================Blog Area =================-->

	<!-------------------------------------- Modifications by Kaleb Phillips: Footer Area --------------------------------------------
		* Added About Us text.
	--------------------------------------------------------------------------------------------------------------------------------->

	<!-- Include footer -->
    <?php include('footer.php'); ?>

	<script src="../js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="../js/vendor/bootstrap.min.js"></script>
	<script src="../js/jquery.ajaxchimp.min.js"></script>
	<script src="../js/jquery.nice-select.min.js"></script>
	<script src="../js/jquery.sticky.js"></script>
	<script src="../js/nouislider.min.js"></script>
	<script src="../js/jquery.magnific-popup.min.js"></script>
	<script src="../js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="../js/gmaps.min.js"></script>
	<script src="../js/main.js"></script>
</body>

</html>
