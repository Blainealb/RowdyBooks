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
	<link rel="stylesheet" href="../assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/css/themify-icons.css">
	<link rel="stylesheet" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" href="../assets/css/owl.carousel.css">
	<link rel="stylesheet" href="../assets/css/nice-select.css">
	<link rel="stylesheet" href="../assets/css/nouislider.min.css">
	<link rel="stylesheet" href="../assets/css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="../assets/css/ion.rangeSlider.skinFlat.css" />
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
        </header>	
	<!-- End Header Area -->

	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Product Details Page</h1>
					<nav class="d-flex align-items-center">
						<a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Shop<span class="lnr lnr-arrow-right"></span></a>
						<a href="single-product.php">product-details</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->



	<!---------------------------------- Modifications by Loren Isenhour: Single Product Area ----------------------------------------
		* Added picture carousel for the single product
		* Currently pictures are placeholders
	--------------------------------------------------------------------------------------------------------------------------------->
	<div class="product_image_area" style="margin-top: -150px;">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<div class="s_Product_carousel">
						<div class="single-prd-item">
						<!--  Product image begin -->
							<div class="item">
								<div class="banner-img">
									<svg width="400" height="550" xmlns="http://www.w3.org/2000/svg">
										<rect width="400" height="550" x="" y="" fill="var(--secondary-color3)" />
									</svg>
								</div>
							</div>
						<!--  product image end -->
						</div>
						<div class="single-prd-item">
						<!-- Product image begin -->
							<div class="item">
								<div class="banner-img">
									<svg width="400" height="550" xmlns="http://www.w3.org/2000/svg">
										<rect width="400" height="550" x="" y="" fill="var(--secondary-color3)" />
									</svg>
								</div>
							</div>
						<!--  product image end -->
						</div>
						<div class="single-prd-item">
						<!-- Product image begin -->
							<div class="item">
								<div class="banner-img">
									<svg width="400" height="550" xmlns="http://www.w3.org/2000/svg">
										<rect width="400" height="550" x="" y="" fill="var(--secondary-color3)" />
									</svg>
								</div>
							</div>
						<!-- Product image end -->
						</div>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<!-- Product Details begin -->
					<div class="s_product_text">
						<h3>Book 1 Title</h3>
						<h2>$49.99</h2>
						<ul class="list">
							<li>Category&nbsp;: &nbsp; STEM</li>
							<li>Type&nbsp;: &nbsp; E-Book</li>
							<li>Availibility&nbsp;: &nbsp; In Stock</li>
						</ul>
						<p>This book provides a comprehensive overview of the foundational concepts in Computer
							science. Designed for students with little to no prior experience in informatics, this
							textbook covers a broad range of topics essential to understanding the discipline.
						</p>
						<div class="product_count">
							<label for="qty">Quantity:</label>
							<input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
							<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
							 class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
							<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
							 class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
						</div>
						<div class="card_area d-flex align-items-center">
							<a class="primary-btn" href="#">Add to Cart</a>
							<a class="icon_btn" href="#"><i class="lnr lnr lnr-diamond"></i></a>
							<a class="icon_btn" href="#"><i class="lnr lnr lnr-heart"></i></a>
						</div>
					</div>
					<!-- Product Details end -->
				</div>
			</div>
		</div>
	</div>
	<!--------------------------------------------------------End Single Product Area ---------------------------------------------------->



	<!---------------------------------- Modifications by Loren Isenhour: Product Description Area -----------------------------------------
		* Description to include Title, Author, and Desciption
		* Added details tab
		* Added Seller Comments tab
	--------------------------------------------------------------------------------------------------------------------------------------->
	<section class="product_description_area">
		<div class="container">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" 
					aria-selected="true">Description</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="details-tab" data-toggle="tab" href="#details" role="tab" aria-controls="details"
					 aria-selected="false">Details</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="sellercomments-tab" data-toggle="tab" href="#sellercomments" role="tab" aria-controls="sellercomments"
					 aria-selected="false">Seller Comments</a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
					<p>Title <t> : </t> <i>Introduction to Computer Science: A Textbook for Beginners in Informatics</i> </p>
					<p>Author <t> : </t> Unknown</p>
					<p>Description <t> : </t> This book provides a comprehensive overview of the foundational concepts in Computer
						science. Designed for students with little to no prior experience in informatics, this
						textbook covers a broad range of topics essential to understanding the discipline. 
					</p>
				</div>
				<div class="tab-pane fade" id="details" role="tabpanel" aria-labelledby="details-tab">
					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<td>
										<h5>ISBN</h5>
									</td>
									<td>
										<h5>9780003136170</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Publisher</h5>
									</td>
									<td>
										<h5>Amber Byte Press</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Publish Date</h5>
									</td>
									<td>
										<h5>03/14/2020</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Sold BY</h5>
									</td>
									<td>
										<h5>rbuser993</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>New / Used</h5>
									</td>
									<td>
										<h5>N/A</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Version</h5>
									</td>
									<td>
										<h5>2.3</h5>
									</td>
								</tr>

								<tr>
									<td>
										<h5>Pages</h5>
									</td>
									<td>
										<h5>456</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Type</h5>
									</td>
									<td>
										<h5>E-Book</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Required / Optional</h5>
									</td>
									<td>
										<h5>Required</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Chapters Read</h5>
									</td>
									<td>
										<h5>Chapters: 1, 2, 6, 7, and 12</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Dimensions / File Size</h5>
									</td>
									<td>
										<h5>980 KB</h5>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="tab-pane fade" id="sellercomments" role="tabpanel" aria-labelledby="sellercomments-tab">
					<div class="row">
						<div class="col-lg-8">
							<div class="comment_list"> 
								<div class="review_item">
									<div class="media">
										<div class="media-body">
											<h4>Seller: rbuser993</h4><br>
											<h5>Comments:</h5>
											<h6>I used this book for Intro to Computer Science with Professor John Doe.
												This book was used quite a bit throughout the semester. It was needed often for quizzes, test,
												and projects.
											</h6>
										</div>
									</div>
								</div>
								<div class="review_item">
									<div class="media">
										<div class="media-body">
											<h5>Feedback:</h5>
											<h6>I found this book to be extremely helpful for this class.
											</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!---------------------------------------------------------- End Changes --------------------------------------------------------->



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