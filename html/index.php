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
	<link rel="stylesheet" href="/assets/css/linearicons.css">
	<link rel="stylesheet" href="/assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="/assets/css/themify-icons.css">
	<link rel="stylesheet" href="/assets/css/themify-icons.css">
	<link rel="stylesheet" href="/assets/css/bootstrap.css">
	<link rel="stylesheet" href="/assets/css/owl.carousel.css">
	<link rel="stylesheet" href="/assets/css/nice-select.css">
	<link rel="stylesheet" href="/assets/css/nouislider.min.css">
	<link rel="stylesheet" href="/assets/css/ion.rangeSlider.css">
	<link rel="stylesheet" href="/assets/css/ion.rangeSlider.skinFlat.css">
	<link rel="stylesheet" href="/assets/css/magnific-popup.css">
	<link rel="stylesheet" href="/assets/css/main.css">
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
					<!--<a class="navbar-brand logo_h" href="index.php"><img src="assets/img/logo.png" alt=""></a>-->
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="./">Home</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Shop New</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="category.html">Shop Category</a></li>
									<li class="nav-item"><a class="nav-link" href="single-product.html">Product Details</a></li>
									<li class="nav-item"><a class="nav-link" href="checkout.html">Product Checkout</a></li>
									<li class="nav-item"><a class="nav-link" href="cart.html">Shopping Cart</a></li>
									<li class="nav-item"><a class="nav-link" href="confirmation.html">Confirmation</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Trade Market</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
									<li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">About Us</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="tracking.html">Tracking</a></li>
									<li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                                                 aria-expanded="false">My Account</a>
								<ul class="dropdown-menu">
                                                                        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
									<li class="nav-item"><a class="nav-link" href="contact.php">Profile</a></li>
                                                        	</ul>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="cart.html" class="cart"><span class="ti-bag"></span></a></li>
							<!-- Button to open search bar -->
							<!--
							<li class="nav-item">
								<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
							</li>-->
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form class="d-flex justify-content-between">
					<!-- magnifier icon inside search bar-->
					<span class="lnr lnr-magnifier" style="margin-top: 13px; margin-right: 4px" id="search"></span> 
					<input type="text" class="form-control" id="search_input" placeholder="Search">
					<button type="submit" class="btn"></button>
					<!-- Button to hide the search bar -->
					<!--<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>-->
				</form>
			</div>
		</div>
	</header>
	<!-- End Header Area -->

	<!-- start banner Area -->
	<section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-start">
				<div class="col-lg-12">
					<div class="active-banner-slider owl-carousel">
						<!-- single-slide -->
						<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5 col-md-6">
								<div class="banner-content">
									<h1>New Book <br>available!</h1>
									<p>Check out Book-Title, the latest book on our website.</p>
									<div class="add-bag d-flex align-items-center">
										<a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
										<span class="add-text text-uppercase">Add to Bag</span>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img" style="margin-left: 175px;">
									<svg width="657" height="394" xmlns="http://www.w3.org/2000/svg">
										<rect width="294" height="394" x="10" y="10" fill="var(--primary-color)" />
									</svg>
									<!-- Banner product image -->
									<!--<img class="img-fluid" src="assets/img/banner/banner-img.png" alt="">-->
								</div>
							</div>
						</div>
						<!-- single-slide -->
						<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5">
								<div class="banner-content">
									<h1>New Book <br>available!</h1>
									<p>Check out Book-Title, the latest book on our website.</p>
									<div class="add-bag d-flex align-items-center">
										<a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
										<span class="add-text text-uppercase">Add to Bag</span>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img" style="margin-left: 175px;">
									<svg width="657" height="394" xmlns="http://www.w3.org/2000/svg">
										<rect width="294" height="394" x="10" y="10" fill="var(--secondary-color3)" />
									</svg>
									<!-- Banner product image -->
									<!--<img class="img-fluid" src="assets/img/banner/banner-img.png" alt="">-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- start product Area -->
	<!--<section class="owl-carousel active-product-area section_gap">-->
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Browse Books by Category</h1>
							<p>Select a category to start browsing for books.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-12 col-lg-8 col-md-7" style="margin-left: auto">
						<!-- Start Filter Bar -->
						<div class="filter-bar d-flex flex-wrap align-items-center">
							<div class="pagination" style="margin-left: auto">
								<a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
								<a href="#" class="active">1</a>
								<a href="#">2</a>
								<a href="#">3</a>
								<a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
								<a href="#">6</a>
								<a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
							</div>
						</div>
						<!-- End Filter Bar -->
					</div>
				</div>
				<br>
				<div class="row">
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<svg width="263" height="283" style="margin-left: -10px; margin-top: -10px; margin-bottom: 20px" xmlns="http://www.w3.org/2000/svg">
								<rect width="263" height="280" x="10" y="10" fill="var(--secondary-color3)" />
							</svg>
							<!-- Trending product image -->
							<!--<img class="img-fluid" src="assets/img/product/p6.jpg" alt="">-->
							<div class="product-details">
								<h6>Book-Category 1</h6>
								
								<div class="prd-bottom">
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text" style="color: var(--text-color);">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<svg width="263" height="283" style="margin-left: -10px; margin-top: -10px; margin-bottom: 20px" xmlns="http://www.w3.org/2000/svg">
								<rect width="263" height="280" x="10" y="10" fill="var(--secondary-color3)" />
							</svg>
							<!-- Trending product image -->
							<!--<img class="img-fluid" src="assets/img/product/p8.jpg" alt="">-->
							<div class="product-details">
								<h6>Book-Category 2</h6>

								<div class="prd-bottom">
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text" style="color: var(--text-color);">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<svg width="263" height="283" style="margin-left: -10px; margin-top: -10px; margin-bottom: 20px" xmlns="http://www.w3.org/2000/svg">
								<rect width="263" height="280" x="10" y="10" fill="var(--secondary-color3)" />
							</svg>
							<!-- Trending product image -->
							<!--<img class="img-fluid" src="assets/img/product/p3.jpg" alt="">-->
							<div class="product-details">
								<h6>Book-Category 3</h6>
								
								<div class="prd-bottom">
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text" style="color: var(--text-color);">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<svg width="263" height="283" style="margin-left: -10px; margin-top: -10px; margin-bottom: 20px" xmlns="http://www.w3.org/2000/svg">
								<rect width="263" height="280" x="10" y="10" fill="var(--secondary-color3)" />
							</svg>
							<!-- Trending product image -->
							<!--<img class="img-fluid" src="assets/img/product/p5.jpg" alt="">-->
							<div class="product-details">
								<h6>Book-Category 4</h6>
								
								<div class="prd-bottom">
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text" style="color: var(--text-color);">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<svg width="263" height="283" style="margin-left: -10px; margin-top: -10px; margin-bottom: 20px" xmlns="http://www.w3.org/2000/svg">
								<rect width="263" height="280" x="10" y="10" fill="var(--secondary-color3)" />
							</svg>
							<!-- Trending product image -->
							<!--<img class="img-fluid" src="assets/img/product/p1.jpg" alt="">-->
							<div class="product-details">
								<h6>Book-Category 5</h6>
								
								<div class="prd-bottom">
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text" style="color: var(--text-color);">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<svg width="263" height="283" style="margin-left: -10px; margin-top: -10px; margin-bottom: 20px" xmlns="http://www.w3.org/2000/svg">
								<rect width="263" height="280" x="10" y="10" fill="var(--secondary-color3)" />
							</svg>
							<!-- Trending product image -->
							<!--<img class="img-fluid" src="assets/img/product/p4.jpg" alt="">-->
							<div class="product-details">
								<h6>Book-Category 6</h6>
								
								<div class="prd-bottom">
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text" style="color: var(--text-color);">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<svg width="263" height="283" style="margin-left: -10px; margin-top: -10px; margin-bottom: 20px" xmlns="http://www.w3.org/2000/svg">
								<rect width="263" height="280" x="10" y="10" fill="var(--secondary-color3)" />
							</svg>
							<!-- Trending product image -->
							<!--<img class="img-fluid" src="assets/img/product/p1.jpg" alt="">-->
							<div class="product-details">
								<h6>Book-Category 7</h6>
								
								<div class="prd-bottom">
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text" style="color: var(--text-color);">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<svg width="263" height="283" style="margin-left: -10px; margin-top: -10px; margin-bottom: 20px" xmlns="http://www.w3.org/2000/svg">
								<rect width="263" height="280" x="10" y="10" fill="var(--secondary-color3)" />
							</svg>
							<!-- Trending product image -->
							<!--<img class="img-fluid" src="assets/img/product/p8.jpg" alt="">-->
							<div class="product-details">
								<h6>Book-Category 8</h6>
								
								<div class="prd-bottom">
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text" style="color: var(--text-color);">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-12 col-lg-8 col-md-7" style="margin-left: auto">
						<!-- Start Filter Bar -->
						<div class="filter-bar d-flex flex-wrap align-items-center">
							<div class="pagination" style="margin-left: auto">
								<a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
								<a href="#" class="active">1</a>
								<a href="#">2</a>
								<a href="#">3</a>
								<a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
								<a href="#">6</a>
								<a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
							</div>
						</div>
						<!-- End Filter Bar -->
						<br>
						<br>
						<br>
					</div>
				</div>
			</div>
		</div>

		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Recently Viewed</h1>
							<p>Find your most recently viewed books.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-12 col-lg-8 col-md-7" style="margin-left: auto">
						<!-- Start Filter Bar -->
						<div class="filter-bar d-flex flex-wrap align-items-center">
							<div class="pagination" style="margin-left: auto">
								<a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
								<a href="#" class="active">1</a>
								<a href="#">2</a>
								<a href="#">3</a>
								<a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
								<a href="#">6</a>
								<a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
							</div>
						</div>
						<!-- End Filter Bar -->
					</div>
				</div>
				<br>
				<div class="row">
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<svg width="263" height="283" style="margin-left: -10px; margin-top: -10px; margin-bottom: 20px" xmlns="http://www.w3.org/2000/svg">
								<rect width="263" height="280" x="10" y="10" fill="var(--secondary-color3)" />
							</svg>
							<!-- Trending product image -->
							<!--<img class="img-fluid" src="assets/img/product/p6.jpg" alt="">-->
							<div class="product-details">
								<h6>Book-Title 1</h6>
								<div class="price">
									<h6>$150.00</h6>
									<h6 class="l-through">$210.00</h6>
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text" style="color: var(--text-color);">add to bag</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text" style="color: var(--text-color);">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text" style="color: var(--text-color);">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text" style="color: var(--text-color);">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<svg width="263" height="283" style="margin-left: -10px; margin-top: -10px; margin-bottom: 20px" xmlns="http://www.w3.org/2000/svg">
								<rect width="263" height="280" x="10" y="10" fill="var(--secondary-color3)" />
							</svg>
							<!-- Trending product image -->
							<!--<img class="img-fluid" src="assets/img/product/p8.jpg" alt="">-->
							<div class="product-details">
								<h6>Book-Title 2</h6>
								<div class="price">
									<h6>$150.00</h6>
									<h6 class="l-through">$210.00</h6>
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text" style="color: var(--text-color);">add to bag</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text" style="color: var(--text-color);">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text" style="color: var(--text-color);">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text" style="color: var(--text-color);">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<svg width="263" height="283" style="margin-left: -10px; margin-top: -10px; margin-bottom: 20px" xmlns="http://www.w3.org/2000/svg">
								<rect width="263" height="280" x="10" y="10" fill="var(--secondary-color3)" />
							</svg>
							<!-- Trending product image -->
							<!--<img class="img-fluid" src="assets/img/product/p3.jpg" alt="">-->
							<div class="product-details">
								<h6>Book-Title 3</h6>
								<div class="price">
									<h6>$150.00</h6>
									<h6 class="l-through">$210.00</h6>
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text" style="color: var(--text-color);">add to bag</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text" style="color: var(--text-color);">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text" style="color: var(--text-color);">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text" style="color: var(--text-color);">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<svg width="263" height="283" style="margin-left: -10px; margin-top: -10px; margin-bottom: 20px" xmlns="http://www.w3.org/2000/svg">
								<rect width="263" height="280" x="10" y="10" fill="var(--secondary-color3)" />
							</svg>
							<!-- Trending product image -->
							<!--<img class="img-fluid" src="assets/img/product/p5.jpg" alt="">-->
							<div class="product-details">
								<h6>Book-Title 4</h6>
								<div class="price">
									<h6>$150.00</h6>
									<h6 class="l-through">$210.00</h6>
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text" style="color: var(--text-color);">add to bag</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text" style="color: var(--text-color);">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text" style="color: var(--text-color);">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text" style="color: var(--text-color);">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<svg width="263" height="283" style="margin-left: -10px; margin-top: -10px; margin-bottom: 20px" xmlns="http://www.w3.org/2000/svg">
								<rect width="263" height="280" x="10" y="10" fill="var(--secondary-color3)" />
							</svg>
							<!-- Trending product image -->
							<!--<img class="img-fluid" src="assets/img/product/p1.jpg" alt="">-->
							<div class="product-details">
								<h6>Book-Title 5</h6>
								<div class="price">
									<h6>$150.00</h6>
									<h6 class="l-through">$210.00</h6>
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text" style="color: var(--text-color);">add to bag</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text" style="color: var(--text-color);">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text" style="color: var(--text-color);">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text" style="color: var(--text-color);">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<svg width="263" height="283" style="margin-left: -10px; margin-top: -10px; margin-bottom: 20px" xmlns="http://www.w3.org/2000/svg">
								<rect width="263" height="280" x="10" y="10" fill="var(--secondary-color3)" />
							</svg>
							<!-- Trending product image -->
							<!--<img class="img-fluid" src="assets/img/product/p4.jpg" alt="">-->
							<div class="product-details">
								<h6>Book-Title 6</h6>
								<div class="price">
									<h6>$150.00</h6>
									<h6 class="l-through">$210.00</h6>
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text" style="color: var(--text-color);">add to bag</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text" style="color: var(--text-color);">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text" style="color: var(--text-color);">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text" style="color: var(--text-color);">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<svg width="263" height="283" style="margin-left: -10px; margin-top: -10px; margin-bottom: 20px" xmlns="http://www.w3.org/2000/svg">
								<rect width="263" height="280" x="10" y="10" fill="var(--secondary-color3)" />
							</svg>
							<!-- Trending product image -->
							<!--<img class="img-fluid" src="assets/img/product/p1.jpg" alt="">-->
							<div class="product-details">
								<h6>Book-Title 7</h6>
								<div class="price">
									<h6>$150.00</h6>
									<h6 class="l-through">$210.00</h6>
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text" style="color: var(--text-color);">add to bag</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text" style="color: var(--text-color);">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text" style="color: var(--text-color);">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text" style="color: var(--text-color);">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<svg width="263" height="283" style="margin-left: -10px; margin-top: -10px; margin-bottom: 20px" xmlns="http://www.w3.org/2000/svg">
								<rect width="263" height="280" x="10" y="10" fill="var(--secondary-color3)" />
							</svg>
							<!-- Trending product image -->
							<!--<img class="img-fluid" src="assets/img/product/p8.jpg" alt="">-->
							<div class="product-details">
								<h6>Book-Title 8</h6>
								<div class="price">
									<h6>$150.00</h6>
									<h6 class="l-through">$210.00</h6>
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text" style="color: var(--text-color);">add to bag</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text" style="color: var(--text-color);">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text" style="color: var(--text-color);">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text" style="color: var(--text-color);">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-12 col-lg-8 col-md-7" style="margin-left: auto">
						<!-- Start Filter Bar -->
						<div class="filter-bar d-flex flex-wrap align-items-center">
							<div class="pagination" style="margin-left: auto">
								<a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
								<a href="#" class="active">1</a>
								<a href="#">2</a>
								<a href="#">3</a>
								<a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
								<a href="#">6</a>
								<a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
							</div>
						</div>
						<!-- End Filter Bar -->
						<br>
					</div>
				</div>
			</div>
		</div>
	<!--</section>-->
	<!-- end product Area -->

	<!-- start footer Area -->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>About Us</h6>
						<p>
							RowdyBooks.
						</p>
					</div>
				</div>
			</div>						
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
				<p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->
	<script src="/js/vendor/jquery-2.2.4.min.js"></script>
        <script src="/js/https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
        <script src="/js/vendor/bootstrap.min.js"></script>
        <script src="/js/jquery.ajaxchimp.min.js"></script>
        <script src="/js/jquery.nice-select.min.js"></script>
        <script src="/js/jquery.sticky.js"></script>
        <script src="/js/nouislider.min.js"></script>
        <script src="/js/countdown.js"></script>
        <script src="/js/jquery.magnific-popup.min.js"></script>
        <script src="/js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="/js/gmaps.min.js"></script>
        <script src="/js/main.js"></script>

</body>

</html>
