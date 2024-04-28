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
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
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
		document.getElementById("navDropdownAboutUs").className = "nav-item active";
	</script>
	<!-- End Header Area -->

	<!-------------------------------------- Modifications by Kaleb Phillips: Banner Area --------------------------------------------
		* Updated banner pages and links
	--------------------------------------------------------------------------------------------------------------------------------->

	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
        <div class="container" style="height: 100px">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end" style="height: 10px">
                <div class="col-first">
                    <h1>About Us</h1>
                    <nav class="d-flex align-items-center">
                        <a href="./">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="about-us.php">About Us</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
	<!-- End Banner Area -->

	<!-------------------------------------- Modifications by Kaleb Phillips: About Us Area -----------------------------------------
		* Created About Us text box class and added it to About Us Area.
		* Added the text for About Us.
		* Removed code from template that was not needed.
	--------------------------------------------------------------------------------------------------------------------------------->


   <!-- Start About Us Area -->
   <section class="blog_area single-post-area section_gap">
        <div class="container">
            <div class="about_us_text_box">
                <h2 style="margin-left: 60px; margin-right: 60px;">
                    RowdyBooks is designed for UTSA students to provide a way
                    for them to buy and trade books in both physical and
                    E-book formats. RowdyBooks allows students to trade their
                    textbooks with other students when they no longer need them.
                    This gives students a chance to get a textbook they will
                    need by trading the ones they are not using anymore or
                    provide them access to affordable textbooks.
                </h2>
            </div>
        </div>
    </section>
   <!-- End About Us Area -->

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
