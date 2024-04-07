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


	<style>
		.owl-carousel .owl-nav .owl-prev,
		.owl-carousel .owl-nav .owl-next {
			position: absolute;
			top: 100%; 
			transform: translateY(-600%); 
		}
		.owl-carousel .owl-nav .owl-prev {
			left: -530px; 
		}
		.owl-carousel .owl-nav .owl-next {
			right: 310px; 
		}
	</style>

</head>

<body id="category">

	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<!-- Logo -->
                                        <a class="navbar-brand logo_h" href="./">RowdyBooks</a>
					<a class="navbar-brand logo_h" href="index.php"><img src="img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
							<li class="nav-item submenu dropdown active">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Shop New</a>
								<ul class="dropdown-menu">
									<li class="nav-item active"><a class="nav-link" href="category.php">Shop Category</a></li>
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

						</ul>
							
						<ul class="nav navbar-nav navbar-right">
                                                        <li class="nav-item"><a href="cart.php" class="cart"><span class="ti-bag"></span></a></li>
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
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!-- End Header Area -->


	<!-------------------------------------- Modifications by Loren Isenhour: Banner Area --------------------------------------------
		* Added picture carousel for the category banner
		* Currently pictures are placeholders
	--------------------------------------------------------------------------------------------------------------------------------->
	<section class="banner-area organic-breadcrumb">
		<div class="container" style="margin-bottom: -40px;">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-lg-7">
                <!-- Carousel starts -->
                <div class="active-banner-slider owl-carousel">
                    <!-- single-slide -->
                    <div class="item">
                        <div class="banner-img" style="margin-left: 50px;">
                            <svg width="657" height="394" xmlns="http://www.w3.org/2000/svg">
                                <rect width="294" height="394" x="10" y="10" fill="var(--primary-color)" />
                            </svg>
                        </div>
                    </div>
                    <!-- single-slide -->
                    <div class="item">
                        <div class="banner-img" style="margin-left: 50px;">
                            <svg width="657" height="394" xmlns="http://www.w3.org/2000/svg">
                                <rect width="294" height="394" x="10" y="10" fill="var(--secondary-color3)" />
                            </svg>
                        </div>
                    </div>
                </div>
                <!-- Carousel ends -->
				</div>
				<div class="col-first">
					<h1>Shop By Category</h1> 
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Shop<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Category</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area --------------------------------------------------------------------------------------->



	<!-----------------------------------------Modifications by Loren Isenhour: Browse Category Area--------------------------------------
		* Updated Categories in Browse Categories - NOTE: currently no functionality
		* Updated and Added filter sections  - NOTE: currently no functionality but buttons are interactive
		* Updated Sorting drowdowns - NOTE: currently does not sort but dropdowns are interactive
		* Added picture placeholders to book items
		* Updated "View More" button to navigate to single item page
	------------------------------------------------------------------------------------------------------------------------------------->
	<div class="container">
		<div class="row">
			<div class="col-xl-3 col-lg-4 col-md-5">
				<div class="sidebar-categories">
					<div class="head">Browse Categories</div>
					<ul class="main-categories">
						<li class="main-nav-list"><a href="#"><span
								 class="lnr lnr-arrow-right"></span>Arts and Humanities</a>
						</li>
						<li class="main-nav-list"><a href="#"><span
								 class="lnr lnr-arrow-right"></span>Business</a>
						</li>

						<li class="main-nav-list"><a href="#"><span
								 class="lnr lnr-arrow-right"></span>Health and Medicine</a>
						</li>
						<li class="main-nav-list"><a href="#"><span
								 class="lnr lnr-arrow-right"></span>Multi-Interdisciplinary</a>
						</li>
						<li class="main-nav-list"><a href="#"><span
								 class="lnr lnr-arrow-right"></span>STEM</a>
						</li>
						<li class="main-nav-list"><a href="#"><span
								 class="lnr lnr-arrow-right"></span>Social Sciences</a>
						</li>
					</ul>
				</div>
				<div class="sidebar-filter mt-50">
					<div class="top-filter-head">Filters</div>
					<div class="common-filter">
					<div class="head">New / Used</div>
						<form action="#">
							<ul>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="newbook" name="newusedfilter"><label for="newbook">New</label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="usedBook" name="newusedfilter"><label for="usedBook">Used</label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="allBooks" name="newusedfilter"><label for="allBooks">All</label></li>
							</ul>
						</form>
					</div>
					<div class="common-filter">
						<div class="head">Required / Optional</div>
						<form action="#">
							<ul>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="requirebooks" name="requiredfilter"><label for="requirebooks">Required</label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="optionalbooks" name="requiredfilter"><label for="optionalbooks">Optional</label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="allBooks" name="requiredfilter"><label for="allBooks">All</label></li>
							</ul>
						</form>
					</div>
					<div class="common-filter">
						<div class="head">Type</div>
						<form action="#">
							<ul>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="ebooktype" name="typefilter"><label for="ebooktype">E-Book</label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="hardcovertype" name="typefilter"><label for="hardcovertype">Hardcover</label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="allBooks" name="typefilter"><label for="allBooks">All Types</label></li>
							</ul>
						</form>
					</div>
					<div class="common-filter">
						<div class="head">Price</div>
						<div class="price-range-area">
							<div id="price-range"></div>
							<div class="value-wrapper d-flex">
								<div class="price">Price:</div>
								<span>$</span>
								<div id="lower-value"></div>
								<div class="to">to</div>
								<span>$</span>
								<div id="upper-value"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-9 col-lg-8 col-md-7">
				<!-- Start Filter Bar -->
				<div class="filter-bar d-flex flex-wrap align-items-center">
					<div class="sorting" style="color: black;">
						<select>
							<option value="1">Default sorting</option>
							<option value="1">Sort by title</option>
							<option value="1">Sort by author</option>
						</select>
					</div>
					<div class="sorting mr-auto" style="color: black;">
						<select>
							<option value="1">Show Default</option>
							<option value="1">Show 12</option>
							<option value="1">Show 24</option>
						</select>
					</div>
					<div class="pagination">
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
				<!-- Start Book List -->
				<section class="lattest-product-area pb-40 category-list" style="margin-left: 60px; margin-top: 20px;">
					<div class="row">
						<!-- single product -->
						<div class="col-lg-4 col-md-6">
							<div class="single-product">
								<!-- Banner product image begin -->
								<div class="item">
                        		 	<div class="banner-img" >
                            			<svg width="180" height="200" xmlns="http://www.w3.org/2000/svg">
                                			<rect width="180" height="200" x="-30" y="-15" fill="var(--secondary-color3)" />
                            			</svg>
                        			</div>
                    			</div>
								<!-- Banner product image end -->
								<div class="product-details">
									<h6>book 1</h6>
									<div class="shop-subcategory">
										<h7>e-book</h7>
									</div>
									<div class="price">
										<h6>$52.00</h6>
										<h6 class="l-through">$100.00</h6>
									</div>
									<div class="prd-bottom">
										<a href="" class="social-info">
											<span class="ti-bag"></span>
											<p class="hover-text">add to bag</p>
										</a>
										<a href="single-product.php" class="social-info">
											<span class="lnr lnr-move"></span>
											<p class="hover-text">view more</p>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- single product -->
						<div class="col-lg-4 col-md-6">
							<div class="single-product">
								<!-- Banner product image begin -->
								<div class="item">
                        		 	<div class="banner-img">
                            			<svg width="180" height="200" xmlns="http://www.w3.org/2000/svg">
                                			<rect width="180" height="200" x="-30" y="-15" fill="var(--secondary-color3)" />
                            			</svg>
                        			</div>
                    			</div>
								<!-- Banner product image end -->
								<div class="product-details">
									<h6>book 2</h6>
									<div class="shop-subcategory">
										<h7>e-book</h7>
									</div>
									<div class="price">
										<h6>$52.00</h6>
										<h6 class="l-through">$100.00</h6>
									</div>
									<div class="prd-bottom">
										<a href="" class="social-info">
											<span class="ti-bag"></span>
											<p class="hover-text">add to bag</p>
										</a>
										<a href="single-product.php" class="social-info">
											<span class="lnr lnr-move"></span>
											<p class="hover-text">view more</p>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- single product -->
						<div class="col-lg-4 col-md-6">
							<div class="single-product">
								<!-- Banner product image begin -->
								<div class="item">
                        		 	<div class="banner-img">
                            			<svg width="180" height="200" xmlns="http://www.w3.org/2000/svg">
                                			<rect width="180" height="200" x="-30" y="-15" fill="var(--secondary-color3)" />
                            			</svg>
                        			</div>
                    			</div>
								<!-- Banner product image end -->
								<div class="product-details">
									<h6>book 3</h6>
									<div class="shop-subcategory">
										<h7>e-book</h7>
									</div>
									<div class="price">
										<h6>$52.00</h6>
										<h6 class="l-through">$100.00</h6>
									</div>
									<div class="prd-bottom">
										<a href="" class="social-info">
											<span class="ti-bag"></span>
											<p class="hover-text">add to bag</p>
										</a>
										<a href="single-product.php" class="social-info">
											<span class="lnr lnr-move"></span>
											<p class="hover-text">view more</p>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- single product -->
						<div class="col-lg-4 col-md-6">
							<div class="single-product">
								<!-- Banner product image begin -->
								<div class="item">
                        		 	<div class="banner-img">
                            			<svg width="180" height="200" xmlns="http://www.w3.org/2000/svg">
                                			<rect width="180" height="200" x="-30" y="-15" fill="var(--secondary-color3)" />
                            			</svg>
                        			</div>
                    			</div>
								<!-- Banner product image end -->
								<div class="product-details">
									<h6>book 4</h6>
									<div class="shop-subcategory">
										<h7>e-book</h7>
									</div>
									<div class="price">
										<h6>$52.00</h6>
										<h6 class="l-through">$100.00</h6>
									</div>
									<div class="prd-bottom">
										<a href="" class="social-info">
											<span class="ti-bag"></span>
											<p class="hover-text">add to bag</p>
										</a>
										<a href="single-product.php" class="social-info">
											<span class="lnr lnr-move"></span>
											<p class="hover-text">view more</p>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- single product -->
						<div class="col-lg-4 col-md-6">
							<div class="single-product">
								<!-- Banner product image begin -->
								<div class="item">
                        		 	<div class="banner-img">
                            			<svg width="180" height="200" xmlns="http://www.w3.org/2000/svg">
                                			<rect width="180" height="200" x="-30" y="-15" fill="var(--secondary-color3)" />
                            			</svg>
                        			</div>
                    			</div>
								<!-- Banner product image end -->
								<div class="product-details">
									<h6>book 5</h6>
									<div class="shop-subcategory">
										<h7>e-book</h7>
									</div>
									<div class="price">
										<h6>$52.00</h6>
										<h6 class="l-through">$100.00</h6>
									</div>
									<div class="prd-bottom">
										<a href="" class="social-info">
											<span class="ti-bag"></span>
											<p class="hover-text">add to bag</p>
										</a>
										<a href="single-product.php" class="social-info">
											<span class="lnr lnr-move"></span>
											<p class="hover-text">view more</p>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- single product -->
						<div class="col-lg-4 col-md-6">
							<div class="single-product">
								<!-- Banner product image begin -->
								<div class="item">
                        		 	<div class="banner-img">
                            			<svg width="180" height="200" xmlns="http://www.w3.org/2000/svg">
                                			<rect width="180" height="200" x="-30" y="-15" fill="var(--secondary-color3)" />
                            			</svg>
                        			</div>
                    			</div>
								<!-- Banner product image end -->
								<div class="product-details">
									<h6>book 6</h6>
									<div class="shop-subcategory">
										<h7>e-book</h7>
									</div>
									<div class="price">
										<h6>$52.00</h6>
										<h6 class="l-through">$100.00</h6>
									</div>
									<div class="prd-bottom">
										<a href="" class="social-info">
											<span class="ti-bag"></span>
											<p class="hover-text">add to bag</p>
										</a>
										<a href="single-product.php" class="social-info">
											<span class="lnr lnr-move"></span>
											<p class="hover-text">view more</p>
										</a>
									</div>
								</div>
							</div>
						</div>
				</section>
			</div>
		</div>
	</div>
	<!--------------------------------------------------------------------- End Changes ---------------------------------------------------------------------------->

	<!-- Start Extra space -->
	<section class="related-product-area section_gap">
		<div class="container">
		</div>
	</section>
	<!-- End related-product Area -->





	<!-- Start footer Area -->
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

	

	<!-- Modal Quick Product View -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="container relative">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<div class="product-quick-view">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<div class="quick-view-carousel">
								<div class="item" style="background: url(img/organic-food/q1.jpg);">

								</div>
								<div class="item" style="background: url(img/organic-food/q1.jpg);">

								</div>
								<div class="item" style="background: url(img/organic-food/q1.jpg);">

								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="quick-view-content">
								<div class="top">
									<h3 class="head">Mill Oil 1000W Heater, White</h3>
									<div class="price d-flex align-items-center"><span class="lnr lnr-tag"></span> <span class="ml-10">$149.99</span></div>
									<div class="category">Category: <span>Household</span></div>
									<div class="available">Availibility: <span>In Stock</span></div>
								</div>
								<div class="middle">
									<p class="content">Mill Oil is an innovative oil filled radiator with the most modern technology. If you are
										looking for something that can make your interior look awesome, and at the same time give you the pleasant
										warm feeling during the winter.</p>
									<a href="#" class="view-full">View full Details <span class="lnr lnr-arrow-right"></span></a>
								</div>
								<div class="bottom">
									<div class="color-picker d-flex align-items-center">Color:
										<span class="single-pick"></span>
										<span class="single-pick"></span>
										<span class="single-pick"></span>
										<span class="single-pick"></span>
										<span class="single-pick"></span>
									</div>
									<div class="quantity-container d-flex align-items-center mt-15">
										Quantity:
										<input type="text" class="quantity-amount ml-15" value="1" />
										<div class="arrow-btn d-inline-flex flex-column">
											<button class="increase arrow" type="button" title="Increase Quantity"><span class="lnr lnr-chevron-up"></span></button>
											<button class="decrease arrow" type="button" title="Decrease Quantity"><span class="lnr lnr-chevron-down"></span></button>
										</div>

									</div>
									<div class="d-flex mt-20">
										<a href="#" class="view-btn color-2"><span>Add to Cart</span></a>
										<a href="#" class="like-btn"><span class="lnr lnr-layers"></span></a>
										<a href="#" class="like-btn"><span class="lnr lnr-heart"></span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



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
