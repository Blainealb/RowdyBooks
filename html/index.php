<!--------------------------------------------------------------------------------------------------------------------------------
	This file was provided by a template and was modified to fit the needs of our website.
	The template can be found here:
	https://themewagon.com/themes/free-reponsive-bootstrap-4-html5-ecommerce-website-template-karma/
	code modified by @author Kaleb Phillips
--------------------------------------------------------------------------------------------------------------------------------->
<?php
session_start();

/*-------------------------------------- Modifications by Kaleb Phillips: PHP --------------------------------------------------
        * Added functions for retrieving books from database.
        * Added variables to store book titles and covers.
--------------------------------------------------------------------------------------------------------------------------------*/

// Retrieve Products from Database
require "bookFunctions.php";
require "dbconnect.php";

// Retrieve the First Banner Book
$book = getBook("999-1234567890");
$banner_book1_title = $book['title'];
$banner_book1_cover = $book['image_path'];

// Retrieve the Second Banner Book
$book = getBook("999-0000000002");
$banner_book2_title = $book['title'];
$banner_book2_cover = $book['image_path'];

// Retrieve the Category Covers
$category = getBooks("999-1234567890", "999-0000000002", "999-0000000003",
"999-1234567890","999-1234567890", "999-1234567890",
"999-1234567890", "999-1234567890");
$category1_cover = $category[0]['image_path'];
$category2_cover = $category[1]['image_path'];
$category3_cover = $category[2]['image_path'];
$category4_cover = $category[3]['image_path'];
$category5_cover = $category[4]['image_path'];
$category6_cover = $category[5]['image_path'];
$category7_cover = $category[6]['image_path'];
$category8_cover = $category[7]['image_path'];

// Retrieve the Recently Viewed Books
$books = getBooks("999-1234567890", "999-0000000002", "999-0000000003",
"999-1234567890","999-1234567890", "999-1234567890",
"999-1234567890", "999-1234567890");
$recent_book1_title = $books[0]['title'];
$recent_book1_cover = $books[0]['image_path'];
$recent_book2_title = $books[1]['title'];
$recent_book2_cover = $books[1]['image_path'];
$recent_book3_title = $books[2]['title'];
$recent_book3_cover = $books[2]['image_path'];
$recent_book4_title = $books[3]['title'];
$recent_book4_cover = $books[3]['image_path'];
$recent_book5_title = $books[4]['title'];
$recent_book5_cover = $books[4]['image_path'];
$recent_book6_title = $books[5]['title'];
$recent_book6_cover = $books[5]['image_path'];
$recent_book7_title = $books[6]['title'];
$recent_book7_cover = $books[6]['image_path'];
$recent_book8_title = $books[7]['title'];
$recent_book8_cover = $books[7]['image_path'];

?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="/assets/img/fav.png">
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
	<!-------------------------------------- Modifications by Kaleb Phillips: Header Area ------------------------------------------
		* Removed default logo and added site name to header.
		* Updated the names of navbar dropdown toggle buttons.
		* Removed extra navbar dropdown toggle buttons.
		* Updated the color of the navbar to orange and the dropdown menu highlit color to blue.
		* Removed the button to drop down search bar from navbar.
		* Added magnifier icon inside search bar.
		* Updated the color of the search bar.
		* Removed button to hide the search bar.
	--------------------------------------------------------------------------------------------------------------------------------->

	<!-------------------------------------- Modifications by Blaine Byrd: Profile Page --------------------------------------------
                * Modified Navbar to fit site needs
        --------------------------------------------------------------------------------------------------------------------------------->

	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<!-- Logo -->
					<a class="navbar-brand logo_h" href="./">RowdyBooks</a>
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
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">About Us</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="about-us.php">About Us</a></li>
									<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
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
		</div>
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
	</header>
	<!-- End Header Area -->

	<!-------------------------------------- Modifications by Kaleb Phillips: Banner Area ------------------------------------------
		* Updated text in the banner for displaying new books.
		* Updated the text for book titles and the images for covers to load dynamiclky from the database.
		* Updated the color gradient of the add to bag button.
	--------------------------------------------------------------------------------------------------------------------------------->

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
									<p>Check out <?php echo $banner_book1_title ?>,
									the latest book on our website.</p>
									<div class="add-bag d-flex align-items-center">
										<a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
										<span class="add-text text-uppercase">Add to Bag</span>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img" style="margin-left: 175px;">
									<img class="img-fluid"
										style="width: 384px; height: 484px; 
											margin-left: auto; margin-right: auto;" 
										src="../assets/img/product/<?php echo $banner_book1_cover; ?>" 
										alt="">
								</div>
							</div>
						</div>
						<!-- single-slide -->
						<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5">
								<div class="banner-content">
									<h1>New Book <br>available!</h1>
									<p>Check out <?php echo $banner_book2_title ?>,
									the latest book on our website.</p>
									<div class="add-bag d-flex align-items-center">
										<a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
										<span class="add-text text-uppercase">Add to Bag</span>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img" style="margin-left: 175px;">
									<img class="img-fluid"
										style="width: 384px; height: 484px; 
											margin-left: auto; margin-right: auto;" 
										src="../assets/img/product/<?php echo $banner_book2_cover; ?>" 
										alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-------------------------------------- Modifications by Kaleb Phillips: Category Area ----------------------------------------
		* Removed carousel feature.
		* Updated the images for categories to be book covers to load dynamiclky from the database.
		* Updated categories text with placeholders for book categories.
		* Updated the color of the view more button.
		* Updated the color of the text for view more button.
		* Updated the color of the text for book categories.
		* Added filter bar above and below categories from the category page.
		* Updated color of filter bar to orange.
		* Updated color of selected page number in filter bar to blue.
		* Removed extra prd-buttons from below categories.
	--------------------------------------------------------------------------------------------------------------------------------->

	<!-- Start Category Area -->
		<!-- Section Title -->
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
					<!-- Category 1 -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<!-- Category Book Cover Image -->
							<img class="img-fluid" style="width: 230px; height: 330px;" 
								src="../assets/img/product/<?php echo $category1_cover; ?>" 
								alt="">
							<div class="product-details">
								<h6>Book-Category 1</h6>

								<!-- Button Below Category -->
								<div class="prd-bottom">
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text" style="color: var(--text-color);">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- Category 2 -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<!-- Category Book Cover Image -->
							<img class="img-fluid" style="width: 230px; height: 330px;" 
								src="../assets/img/product/<?php echo $category2_cover; ?>" 
								alt="">
							<div class="product-details">
								<h6>Book-Category 2</h6>

								<!-- Button Below Category -->
								<div class="prd-bottom">
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text" style="color: var(--text-color);">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- Category 3 -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<!-- Category Book Cover Image -->
							<img class="img-fluid" style="width: 230px; height: 330px;" 
								src="../assets/img/product/<?php echo $category3_cover; ?>" 
								alt="">
							<div class="product-details">
								<h6>Book-Category 3</h6>

								<!-- Button Below Category -->
								<div class="prd-bottom">
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text" style="color: var(--text-color);">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- Category 4 -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<!-- Category Book Cover Image -->
							<img class="img-fluid" style="width: 230px; height: 330px;" 
								src="../assets/img/product/<?php echo $category4_cover; ?>" 
								alt="">
							<div class="product-details">
								<h6>Book-Category 4</h6>

								<!-- Button Below Category -->
								<div class="prd-bottom">
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text" style="color: var(--text-color);">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- Category 5 -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<!-- Category Book Cover Image -->
							<img class="img-fluid" style="width: 230px; height: 330px;" 
								src="../assets/img/product/<?php echo $category5_cover; ?>" 
								alt="">
							<div class="product-details">
								<h6>Book-Category 5</h6>

								<!-- Button Below Category -->
								<div class="prd-bottom">
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text" style="color: var(--text-color);">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- Category 6 -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<!-- Category Book Cover Image -->
							<img class="img-fluid" style="width: 230px; height: 330px;" 
								src="../assets/img/product/<?php echo $category6_cover; ?>" 
								alt="">
							<div class="product-details">
								<h6>Book-Category 6</h6>

								<!-- Button Below Category -->
								<div class="prd-bottom">
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text" style="color: var(--text-color);">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- Category 7 -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<!-- Category Book Cover Image -->
							<img class="img-fluid" style="width: 230px; height: 330px;" 
								src="../assets/img/product/<?php echo $category7_cover; ?>" 
								alt="">
							<div class="product-details">
								<h6>Book-Category 7</h6>

								<!-- Button Below Category -->
								<div class="prd-bottom">
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text" style="color: var(--text-color);">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- Category 8 -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<!-- Category Book Cover Image -->
							<img class="img-fluid" style="width: 230px; height: 330px;" 
								src="../assets/img/product/<?php echo $category8_cover; ?>" 
								alt="">
							<div class="product-details">
								<h6>Book-Category 8</h6>

								<!-- Button Below Category -->
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

	<!-------------------------------------- Modifications by Kaleb Phillips: Recently Viewed Area ---------------------------------
		* Updated the text for book titles and the images for book covers to load dynamiclky from the database.
		* Updated the color of the prd-buttons.
		* Updated the color of the text for prd-buttons.
		* Updated the color of the text for book titles and prices.
		* Added filter bar above and below recently viewed from the category page.
		* Updated color of filter bar to orange.
		* Updated color of selected page number in filter bar to blue.
	--------------------------------------------------------------------------------------------------------------------------------->

	<!-- Start Recently Viewed Area -->
		<!-- Section Title -->
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
					<!-- Recently Viewed 1 -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<!-- Recently Viewed Book Cover Image -->
							<img class="img-fluid" style="width: 230px; height: 330px;" 
								src="../assets/img/product/<?php echo $recent_book1_cover; ?>" 
								alt="">
							<div class="product-details">
								<h6><?php echo $recent_book1_title ?></h6>
								<div class="price">
									<h6>$150.00</h6>
									<h6 class="l-through">$210.00</h6>
								</div>

								<!-- Buttons Below Book -->
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
					<!-- Recently Viewed 2 -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<!-- Recently Viewed Book Cover Image -->
							<img class="img-fluid" style="width: 230px; height: 330px;" 
								src="../assets/img/product/<?php echo $recent_book2_cover; ?>" 
								alt="">
							<div class="product-details">
								<h6><?php echo $recent_book2_title ?></h6>
								<div class="price">
									<h6>$150.00</h6>
									<h6 class="l-through">$210.00</h6>
								</div>

								<!-- Buttons Below Book -->
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
					<!-- Recently Viewed 3 -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<!-- Recently Viewed Book Cover Image -->
							<img class="img-fluid" style="width: 230px; height: 330px;" 
								src="../assets/img/product/<?php echo $recent_book3_cover; ?>" 
								alt="">
							<div class="product-details">
								<h6><?php echo $recent_book3_title ?></h6>
								<div class="price">
									<h6>$150.00</h6>
									<h6 class="l-through">$210.00</h6>
								</div>

								<!-- Buttons Below Book -->
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
					<!-- Recently Viewed 4 -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<!-- Recently Viewed Book Cover Image -->
							<img class="img-fluid" style="width: 230px; height: 330px;" 
								src="../assets/img/product/<?php echo $recent_book4_cover; ?>" 
								alt="">
							<div class="product-details">
								<h6><?php echo $recent_book4_title ?></h6>
								<div class="price">
									<h6>$150.00</h6>
									<h6 class="l-through">$210.00</h6>
								</div>

								<!-- Buttons Below Book -->
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
					<!-- Recently Viewed 5 -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<!-- Recently Viewed Book Cover Image -->
							<img class="img-fluid" style="width: 230px; height: 330px;" 
								src="../assets/img/product/<?php echo $recent_book5_cover; ?>" 
								alt="">
							<div class="product-details">
								<h6><?php echo $recent_book5_title ?></h6>
								<div class="price">
									<h6>$150.00</h6>
									<h6 class="l-through">$210.00</h6>
								</div>

								<!-- Buttons Below Book -->
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
					<!-- Recently Viewed 6 -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<!-- Recently Viewed Book Cover Image -->
							<img class="img-fluid" style="width: 230px; height: 330px;" 
								src="../assets/img/product/<?php echo $recent_book6_cover; ?>" 
								alt="">
							<div class="product-details">
								<h6><?php echo $recent_book6_title ?></h6>
								<div class="price">
									<h6>$150.00</h6>
									<h6 class="l-through">$210.00</h6>
								</div>

								<!-- Buttons Below Book -->
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
					<!-- Recently Viewed 7 -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<!-- Recently Viewed Book Cover Image -->
							<img class="img-fluid" style="width: 230px; height: 330px;" 
								src="../assets/img/product/<?php echo $recent_book7_cover; ?>" 
								alt="">
							<div class="product-details">
								<h6><?php echo $recent_book7_title ?></h6>
								<div class="price">
									<h6>$150.00</h6>
									<h6 class="l-through">$210.00</h6>
								</div>

								<!-- Buttons Below Book -->
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
					<!-- Recently Viewed 8 -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<!-- Recently Viewed Book Cover Image -->
							<img class="img-fluid" style="width: 230px; height: 330px;" 
								src="../assets/img/product/<?php echo $recent_book8_cover; ?>" 
								alt="">
							<div class="product-details">
								<h6><?php echo $recent_book8_title ?></h6>
								<div class="price">
									<h6>$150.00</h6>
									<h6 class="l-through">$210.00</h6>
								</div>

								<!-- Buttons Below Book -->
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
	<!-- end product Area -->

	<!-------------------------------------- Modifications by Kaleb Phillips: Footer Area ------------------------------------------
		* Updated text for About Us section to a placeholder.
		* Removed newsletter forom.
		* Removed Instagram feed section.
		* Removed social media account links.
	-------------------------------------------------------------------------------------------------------------------->

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
