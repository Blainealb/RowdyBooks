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
    <header class="header_area sticky-header">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light main_box">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <!-- Logo -->
                    <a class="navbar-brand logo_h" href="./">RowdyBooks</a>
                    <a class="navbar-brand logo_h" href="./"><img src="img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                     aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="./">Home</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                 aria-expanded="false">Shop New</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="category.php">Shop Category</a></li>
                                </ul>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                 aria-expanded="false">Trade Market</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="trade.php">Trade</a></li>
                                    <li class="nav-item"><a class="nav-link" href="trade-in.php">Trade In</a></li>
                                </ul>
                            </li>
                            <li class="nav-item submenu dropdown active">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                 aria-expanded="false">About Us</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="about-us.php">About Us</a></li>
                                    <li class="nav-item active"><a class="nav-link" href="contact.php">Contact</a></li>
                                </ul>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                 aria-expanded="false">My Account</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                                    <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="nav-item"><a href="cart.php" class="cart"><span class="ti-bag"></span></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="search_input" id="search_input_box">
                <div class="container">
                    <form class="d-flex justify-content-between">
                        <!-- magnifier icon inside search bar-->
                        <span class="lnr lnr-magnifier" style="margin-top: 13px; margin-right: 4px" id="search"></span>
                        <input type="text" class="form-control" id="search_input" placeholder="Search">
                        <button type="submit" class="btn"></button>
                    </form>
                </div>
            </div>
        </div>
    </header>
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
