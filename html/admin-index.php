<!--------------------------------------------------------------------------------------------------------------------------------
	This file was provided by a template and was modified to fit the needs of our website.
	The template can be found here:
	https://themewagon.com/themes/free-reponsive-bootstrap-4-html5-ecommerce-website-template-karma/
	code modified by @author Kaleb Phillips
--------------------------------------------------------------------------------------------------------------------------------->
<?php
// session_start();

// // Check if user is logged in and if they are get the userid from the session
// if(isset($_SESSION['userid'])) {
// 	$id = $_SESSION['userid'];
// 	$loggedin = true;
// }
// else {
// 	$loggedin = false;
// }

// /*-------------------------------------- Modifications by Kaleb Phillips: PHP --------------------------------------------------
// 	* Added functions for retrieving books from database.
// 	* Added variables to store book titles and covers.
// 	* Added array for page changing buttuns in the category area filter bar.
// 	* Added array for page changing buttuns in the recent viewed filter bar.
// --------------------------------------------------------------------------------------------------------------------------------*/

// // Holds the data for page changing buttuns in category area
// $category_pages = array("button1"=>"active", "button2"=>"inactive",
// 			   "button3"=>"inactive", "button4"=>"inactive",
// 			   "display1"=>1, "display2"=>2,
// 			   "display3"=>3, "display4"=>6,
// 			   "total"=>6, "area"=>"category");

// // Holds the data for page changing buttuns in recent viewed area
// $recent_pages = array("button1"=>"active", "button2"=>"inactive",
// 			   "button3"=>"inactive", "button4"=>"inactive",
// 			   "display1"=>1, "display2"=>2,
// 			   "display3"=>3, "display4"=>6,
// 			   "total"=>6, "area"=>"recent");

// // Retrieve Products from Database
// require "bookFunctions.php";
// require "dbconnect.php";

// // Retrieve the First Banner Book
// $banner_book1 = getBook("999-1234567890");

// // Retrieve the Second Banner Book
// $banner_book2 = getBook("999-0000000002");

// // Retrieve the Category Covers
// $category_books = getBooks("999-1234567890", "999-0000000002", "999-0000000003",
// "999-1234567891","999-1234567892", "999-1234567893",
// "999-1234567894", "999-1234567895");

// // Retrieve the Recently Viewed Books
// $recent_books = getBooks("999-1234567896", "999-0000000002", "999-1234567897",
// "999-1234567893","999-1234567891", "999-1234567894",
// "999-1234567890", "999-1234567892");

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
	<link rel="stylesheet" href="../assets/css/ion.rangeSlider.css">
	<link rel="stylesheet" href="../assets/css/ion.rangeSlider.skinFlat.css">
	<link rel="stylesheet" href="../assets/css/magnific-popup.css">
	<link rel="stylesheet" href="../assets/css/main.css">
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

	<!---- Modifications by Diego Aguirre ----->
<!-- Start Header Area -->
<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
                    <!-- Logo -->
                    <a class="navbar-brand logo_h" href="./">RowdyBooks - Admin</a>
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
							<li class="nav-item"><a class="nav-link" href="admin-index.php">Home</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Shop New</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="admin-category.php">Shop Category</a></li>
								</ul>
							</li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                 aria-expanded="false">Trade Market</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="admin-trade.php">Trade</a></li>
                                    <li class="nav-item"><a class="nav-link" href="admin-trade-in.php">Trade In</a></li>
                                </ul>
                            </li>
                            <li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Admin</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="dashboard_admin.php">DashBoard</a></li>
									<li class="nav-item"><a class="nav-link" href="addNewBook_admin.php">Products</a></li>
									<li class="nav-item"><a class="nav-link" href="orders_admin.php">Orders</a></li>
									<li class="nav-item"><a class="nav-link" href="users_admin.php">Users</a></li>
									<li class="nav-item"><a class="nav-link" href="messages_admin.php">Messages</a></li>
								</ul>
							</li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                 aria-expanded="false">My Account</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="admin-check-user.php">Login</a></li>
                                    <li class="nav-item"><a class="nav-link" href="admin-profile.php">Profile</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="nav-item"><a href="admin-cart.php" class="cart"><span class="ti-bag"></span></a></li>
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
									<p>Check out <?php echo $banner_book1['title'] ?>,
									the latest book on our website.</p>
									<div class="add-bag d-flex align-items-center"
										id="banner_add_to_bag_button1" onclick="addToBag(banner_book1)">
										<a class="add-btn"><span class="lnr lnr-cross"></span></a>
										<span class="add-text text-uppercase">Add to Bag</span>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img" style="margin-left: 175px;">
									<a href="single-product.php?book=<?php echo $banner_book1['id_books'] ?>">
										<img class="img-fluid" style="width: 384px; height: 484px;
											margin-left: auto; margin-right: auto;"
											src="../assets/img/product/<?php echo $banner_book1['image_path']; ?>"
											alt="">
									</a>
								</div>
							</div>
						</div>
						<!-- single-slide -->
						<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5">
								<div class="banner-content">
									<h1>New Book <br>available!</h1>
									<p>Check out <?php echo $banner_book2['title'] ?>,
									the latest book on our website.</p>
									<div class="add-bag d-flex align-items-center"
										id="banner_add_to_bag_button2" onclick="addToBag(banner_book2)">
										<a class="add-btn"><span class="lnr lnr-cross"></span></a>
										<span class="add-text text-uppercase">Add to Bag</span>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img" style="margin-left: 175px;">
									<a href="single-product.php?book=<?php echo $banner_book2['id_books'] ?>">
										<img class="img-fluid" style="width: 384px; height: 484px;
											margin-left: auto; margin-right: auto;"
											src="../assets/img/product/<?php echo $banner_book2['image_path']; ?>"
											alt="">
									</a>
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
		* Added functionality for page changing buttons in filter bar.
		* Added link to category page when clicking on the book cover.
		* Added link to category page when clicking on the view more button.
		* Added link to category page when clicking on the category title.
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
								<!-- Start Page Buttons -->
								<a type="button" class="prev-arrow" onclick="category_prev()"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
								<a type="button" id="category_button1" onclick="category_direct('button1')" class="<?php echo $category_pages["button1"] ?>"><?php echo $category_pages["display1"] ?></a>
								<a class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
								<a type="button" id="category_button2" onclick="category_direct('button2')" class="<?php echo $category_pages["button2"] ?>"><?php echo $category_pages["display2"] ?></a>
								<a type="button" id="category_button3" onclick="category_direct('button3')" class="<?php echo $category_pages["button3"] ?>"><?php echo $category_pages["display3"] ?></a>
								<a class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
								<a type="button" id="category_button4" onclick="category_direct('button4')" class="<?php echo $category_pages["button4"] ?>"><?php echo $category_pages["display4"] ?></a>
								<a type="button" class="next-arrow" onclick="category_next()"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
								<!-- End Page Buttons -->
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
							<a href="category.php?category=Arts%20and%20Humanities">
								<img class="img-fluid" style="width: 230px; height: 330px;"
									src="../assets/img/product/<?php echo $category_books[0]['image_path']; ?>"
									alt="">
							</a>

							<!-- Category Title -->
							<div class="product-details">
								<a href="category.php?category=Arts%20and%20Humanities">
									<h6>Arts and Humanities</h6>
								</a>

								<!-- Button Below Category -->
								<div class="prd-bottom">
									<a href="category.php?category=Arts%20and%20Humanities" class="social-info">
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
							<a href="category.php?category=Business">
								<img class="img-fluid" style="width: 230px; height: 330px;"
									src="../assets/img/product/<?php echo $category_books[1]['image_path']; ?>"
									alt="">
							</a>

							<!-- Category Title -->
							<div class="product-details">
								<a href="category.php?category=Business">
									<h6>Business</h6>
								</a>

								<!-- Button Below Category -->
								<div class="prd-bottom">
									<a href="category.php?category=Business" class="social-info">
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
							<a href="category.php?category=Health%20and%20Medicine">
								<img class="img-fluid" style="width: 230px; height: 330px;"
									src="../assets/img/product/<?php echo $category_books[2]['image_path']; ?>"
									alt="">
							</a>

							<!-- Category Title -->
							<div class="product-details">
								<a href="category.php?category=Health%20and%20Medicine">
									<h6>Health and Medicine</h6>
								</a>

								<!-- Button Below Category -->
								<div class="prd-bottom">
									<a href="category.php?category=Health%20and%20Medicine" class="social-info">
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
							<a href="category.php?category=Multi-Interdisciplinary">
								<img class="img-fluid" style="width: 230px; height: 330px;"
									src="../assets/img/product/<?php echo $category_books[3]['image_path']; ?>"
									alt="">
							</a>

							<!-- Category Title -->
							<div class="product-details">
								<a href="category.php?category=Multi-Interdisciplinary">
									<h6>Multi-Interdisciplinary</h6>
								</a>

								<!-- Button Below Category -->
								<div class="prd-bottom">
									<a href="category.php?category=Multi-Interdisciplinary" class="social-info">
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
							<a href="category.php?category=STEM">
								<img class="img-fluid" style="width: 230px; height: 330px;"
									src="../assets/img/product/<?php echo $category_books[4]['image_path']; ?>"
									alt="">
							</a>

							<!-- Category Title -->
							<div class="product-details">
								<a href="category.php?category=STEM">
									<h6>STEM</h6>
								</a>

								<!-- Button Below Category -->
								<div class="prd-bottom">
									<a href="category.php?category=STEM" class="social-info">
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
							<a href="category.php?category=Social%20Sciences">
								<img class="img-fluid" style="width: 230px; height: 330px;"
									src="../assets/img/product/<?php echo $category_books[5]['image_path']; ?>"
									alt="">
							</a>

							<!-- Category Title -->
							<div class="product-details">
								<a href="category.php?category=Social%20Sciences">
									<h6>Social Sciences</h6>
								</a>

								<!-- Button Below Category -->
								<div class="prd-bottom">
									<a href="category.php?category=Social%20Sciences" class="social-info">
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
							<a href="category.php?category=STEM">
								<img class="img-fluid" style="width: 230px; height: 330px;"
									src="../assets/img/product/<?php echo $category_books[6]['image_path']; ?>"
									alt="">
							</a>

							<!-- Category Title -->
							<div class="product-details">
								<a href="category.php?category=STEM">
									<h6>Computer Science</h6>
								</a>

								<!-- Button Below Category -->
								<div class="prd-bottom">
									<a href="category.php?category=STEM" class="social-info">
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
							<a href="category.php?category=STEM">
								<img class="img-fluid" style="width: 230px; height: 330px;"
									src="../assets/img/product/<?php echo $category_books[7]['image_path']; ?>"
									alt="">
							</a>

							<!-- Category Title -->
							<div class="product-details">
								<a href="category.php?category=STEM">
									<h6>Math</h6>
								</a>

								<!-- Button Below Category -->
								<div class="prd-bottom">
									<a href="category.php?category=STEM" class="social-info">
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
								<!-- Start Page Buttons -->
								<a type="button" class="prev-arrow" onclick="category_prev()"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
								<a type="button" id="below_category_button1" onclick="category_direct('button1')" class="<?php echo $recent_pages["button1"] ?>"><?php echo $category_pages["display1"] ?></a>
								<a class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
								<a type="button" id="below_category_button2" onclick="category_direct('button2')" class="<?php echo $recent_pages["button2"] ?>"><?php echo $category_pages["display2"] ?></a>
								<a type="button" id="below_category_button3" onclick="category_direct('button3')" class="<?php echo $recent_pages["button3"] ?>"><?php echo $category_pages["display3"] ?></a>
								<a class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
								<a type="button" id="below_category_button4" onclick="category_direct('button4')" class="<?php echo $recent_pages["button4"] ?>"><?php echo $category_pages["display4"] ?></a>
								<a type="button" class="next-arrow" onclick="category_next()"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
								<!-- End Page Buttons -->
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
		* Added functionality for page changing buttons in filter bar.
		* Added link to single product page when clicking on the book cover.
		* Added link to single product page when clicking on the book title.
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
								<!-- Start Page Buttons -->
								<a type="button" class="prev-arrow" onclick="recent_prev()"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
								<a type="button" id="recent_button1" onclick="recent_direct('button1')" class="<?php echo $recent_pages["button1"] ?>"><?php echo $recent_pages["display1"] ?></a>
								<a class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
								<a type="button" id="recent_button2" onclick="recent_direct('button2')" class="<?php echo $recent_pages["button2"] ?>"><?php echo $recent_pages["display2"] ?></a>
								<a type="button" id="recent_button3" onclick="recent_direct('button3')" class="<?php echo $recent_pages["button3"] ?>"><?php echo $recent_pages["display3"] ?></a>
								<a class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
								<a type="button" id="recent_button4" onclick="recent_direct('button4')" class="<?php echo $recent_pages["button4"] ?>"><?php echo $recent_pages["display4"] ?></a>
								<a type="button" class="next-arrow" onclick="recent_next()"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
								<!-- End Page Buttons -->
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
							<a href="single-product.php?book=<?php echo $recent_books[0]['id_books'] ?>">
								<img class="img-fluid" style="width: 230px; height: 330px;"
									src="../assets/img/product/<?php echo $recent_books[0]['image_path']; ?>"
									alt="">
							</a>

							<!-- Book Title and Price -->
							<div class="product-details">
								<a href="single-product.php?book=<?php echo $recent_books[0]['id_books'] ?>">
									<h6><?php echo $recent_books[0]['title'] ?></h6>
								</a>
								<div class="price">
									<h6>$<?php echo $recent_books[0]['price'] ?></h6>
									<!-- Previous price -->
									<!--<h6 class="l-through">$210.00</h6>-->
								</div>

								<!-- Start Buttons Below Book -->
								<div class="prd-bottom">

									<a type="button" id="add_to_bag_button1" onclick="addToBag(book1)" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text" style="color: var(--text-color);">add to bag</p>
									</a>
									<a href="single-product.php?book=<?php echo $recent_books[0]['id_books'] ?>" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>

								</div>
								<!-- End Buttons Below Book -->
							</div>
						</div>
					</div>
					<!-- Recently Viewed 2 -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<!-- Recently Viewed Book Cover Image -->
							<a href="single-product.php?book=<?php echo $recent_books[1]['id_books'] ?>">
								<img class="img-fluid" style="width: 230px; height: 330px;"
									src="../assets/img/product/<?php echo $recent_books[1]['image_path']; ?>"
									alt="">
							</a>

							<!-- Book Title and Price -->
							<div class="product-details">
								<a href="single-product.php?book=<?php echo $recent_books[1]['id_books'] ?>">
									<h6><?php echo $recent_books[1]['title'] ?></h6>
								</a>
								<div class="price">
									<h6>$<?php echo $recent_books[1]['price'] ?></h6>
									<!-- Previous price -->
									<!--<h6 class="l-through">$210.00</h6>-->
								</div>

								<!-- Start Buttons Below Book -->
								<div class="prd-bottom">

									<a type="button" id="add_to_bag_button2" onclick="addToBag(book2)" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text" style="color: var(--text-color);">add to bag</p>
									</a>
									<a href="single-product.php?book=<?php echo $recent_books[1]['id_books'] ?>" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>

								</div>
								<!-- End Buttons Below Book -->
							</div>
						</div>
					</div>
					<!-- Recently Viewed 3 -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<!-- Recently Viewed Book Cover Image -->
							<a href="single-product.php?book=<?php echo $recent_books[2]['id_books'] ?>">
								<img class="img-fluid" style="width: 230px; height: 330px;"
									src="../assets/img/product/<?php echo $recent_books[2]['image_path']; ?>"
									alt="">
							</a>

							<!-- Book Title and Price -->
							<div class="product-details">
								<a href="single-product.php?book=<?php echo $recent_books[2]['id_books'] ?>">
									<h6><?php echo $recent_books[2]['title'] ?></h6>
								</a>
								<div class="price">
									<h6>$<?php echo $recent_books[2]['price'] ?></h6>
									<!-- Previous price -->
									<!--<h6 class="l-through">$210.00</h6>-->
								</div>

								<!-- Start Buttons Below Book -->
								<div class="prd-bottom">

									<a type="button" id="add_to_bag_button3" onclick="addToBag(book3)" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text" style="color: var(--text-color);">add to bag</p>
									</a>
									<a href="single-product.php?book=<?php echo $recent_books[2]['id_books'] ?>" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>

								</div>
								<!-- End Buttons Below Book -->
							</div>
						</div>
					</div>
					<!-- Recently Viewed 4 -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<!-- Recently Viewed Book Cover Image -->
							<a href="single-product.php?book=<?php echo $recent_books[3]['id_books'] ?>">
								<img class="img-fluid" style="width: 230px; height: 330px;"
									src="../assets/img/product/<?php echo $recent_books[3]['image_path']; ?>"
									alt="">
							</a>

							<!-- Book Title and Price -->
							<div class="product-details">
								<a href="single-product.php?book=<?php echo $recent_books[3]['id_books'] ?>">
									<h6><?php echo $recent_books[3]['title'] ?></h6>
								</a>
								<div class="price">
									<h6>$<?php echo $recent_books[3]['price'] ?></h6>
									<!-- Previous price -->
									<!--<h6 class="l-through">$210.00</h6>-->
								</div>

								<!-- Start Buttons Below Book -->
								<div class="prd-bottom">

									<a type="button" id="add_to_bag_button4" onclick="addToBag(book4)" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text" style="color: var(--text-color);">add to bag</p>
									</a>
									<a href="single-product.php?book=<?php echo $recent_books[3]['id_books'] ?>" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>

								</div>
								<!-- End Buttons Below Book -->
							</div>
						</div>
					</div>
					<!-- Recently Viewed 5 -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<!-- Recently Viewed Book Cover Image -->
							<a href="single-product.php?book=<?php echo $recent_books[4]['id_books'] ?>">
								<img class="img-fluid" style="width: 230px; height: 330px;"
									src="../assets/img/product/<?php echo $recent_books[4]['image_path']; ?>"
									alt="">
							</a>

							<!-- Book Title and Price -->
							<div class="product-details">
								<a href="single-product.php?book=<?php echo $recent_books[4]['id_books'] ?>">
									<h6><?php echo $recent_books[4]['title'] ?></h6>
								</a>
								<div class="price">
									<h6>$<?php echo $recent_books[4]['price'] ?></h6>
									<!-- Previous price -->
									<!--<h6 class="l-through">$210.00</h6>-->
								</div>

								<!-- Start Buttons Below Book -->
								<div class="prd-bottom">

									<a type="button" id="add_to_bag_button5" onclick="addToBag(book5)" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text" style="color: var(--text-color);">add to bag</p>
									</a>
									<a href="single-product.php?book=<?php echo $recent_books[4]['id_books'] ?>" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>

								</div>
								<!-- End Buttons Below Book -->
							</div>
						</div>
					</div>
					<!-- Recently Viewed 6 -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<!-- Recently Viewed Book Cover Image -->
							<a href="single-product.php?book=<?php echo $recent_books[5]['id_books'] ?>">
								<img class="img-fluid" style="width: 230px; height: 330px;"
									src="../assets/img/product/<?php echo $recent_books[5]['image_path']; ?>"
									alt="">
							</a>

							<!-- Book Title and Price -->
							<div class="product-details">
								<a href="single-product.php?book=<?php echo $recent_books[5]['id_books'] ?>">
									<h6><?php echo $recent_books[5]['title'] ?></h6>
								</a>
								<div class="price">
									<h6>$<?php echo $recent_books[5]['price'] ?></h6>
									<!-- Previous price -->
									<!--<h6 class="l-through">$210.00</h6>-->
								</div>

								<!-- Start Buttons Below Book -->
								<div class="prd-bottom">

									<a type="button" id="add_to_bag_button6" onclick="addToBag(book6)" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text" style="color: var(--text-color);">add to bag</p>
									</a>
									<a href="single-product.php?book=<?php echo $recent_books[5]['id_books'] ?>" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>

								</div>
								<!-- End Buttons Below Book -->
							</div>
						</div>
					</div>
					<!-- Recently Viewed 7 -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<!-- Recently Viewed Book Cover Image -->
							<a href="single-product.php?book=<?php echo $recent_books[6]['id_books'] ?>">
								<img class="img-fluid" style="width: 230px; height: 330px;"
									src="../assets/img/product/<?php echo $recent_books[6]['image_path']; ?>"
									alt="">
							</a>

							<!-- Book Title and Price -->
							<div class="product-details">
								<a href="single-product.php?book=<?php echo $recent_books[6]['id_books'] ?>">
									<h6><?php echo $recent_books[6]['title'] ?></h6>
								</a>
								<div class="price">
									<h6>$<?php echo $recent_books[6]['price'] ?></h6>
									<!-- Previous price -->
									<!--<h6 class="l-through">$210.00</h6>-->
								</div>

								<!-- Start Buttons Below Book -->
								<div class="prd-bottom">

									<a type="button" id="add_to_bag_button7" onclick="addToBag(book7)" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text" style="color: var(--text-color);">add to bag</p>
									</a>
									<a href="single-product.php?book=<?php echo $recent_books[6]['id_books'] ?>" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>

								</div>
								<!-- End Buttons Below Book -->
							</div>
						</div>
					</div>
					<!-- Recently Viewed 8 -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<!-- Recently Viewed Book Cover Image -->
							<a href="single-product.php?book=<?php echo $recent_books[7]['id_books'] ?>">
								<img class="img-fluid" style="width: 230px; height: 330px;"
									src="../assets/img/product/<?php echo $recent_books[7]['image_path']; ?>"
									alt="">
							</a>

							<!-- Book Title and Price -->
							<div class="product-details">
								<a href="single-product.php?book=<?php echo $recent_books[7]['id_books'] ?>">
									<h6><?php echo $recent_books[7]['title'] ?></h6>
								</a>
								<div class="price">
									<h6>$<?php echo $recent_books[7]['price'] ?></h6>
									<!-- Previous price -->
									<!--<h6 class="l-through">$210.00</h6>-->
								</div>

								<!-- Start Buttons Below Book -->
								<div class="prd-bottom">

									<a type="button" id="add_to_bag_button8" onclick="addToBag(book8)" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text" style="color: var(--text-color);">add to bag</p>
									</a>
									<a href="single-product.php?book=<?php echo $recent_books[7]['id_books'] ?>" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>

								</div>
								<!-- End Buttons Below Book -->
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-12 col-lg-8 col-md-7" style="margin-left: auto">
						<!-- Start Filter Bar -->
						<div class="filter-bar d-flex flex-wrap align-items-center">
							<div class="pagination" style="margin-left: auto">
								<!-- Start Page Buttons -->
								<a type="button" class="prev-arrow" onclick="recent_prev()"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
								<a type="button" id="below_recent_button1" onclick="recent_direct('button1')" class="<?php echo $recent_pages["button1"] ?>"><?php echo $recent_pages["display1"] ?></a>
								<a class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
								<a type="button" id="below_recent_button2" onclick="recent_direct('button2')" class="<?php echo $recent_pages["button2"] ?>"><?php echo $recent_pages["display2"] ?></a>
								<a type="button" id="below_recent_button3" onclick="recent_direct('button3')" class="<?php echo $recent_pages["button3"] ?>"><?php echo $recent_pages["display3"] ?></a>
								<a class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
								<a type="button" id="below_recent_button4" onclick="recent_direct('button4')" class="<?php echo $recent_pages["button4"] ?>"><?php echo $recent_pages["display4"] ?></a>
								<a type="button" class="next-arrow" onclick="recent_next()"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
								<!-- End Page Buttons -->
							</div>
						</div>
						<!-- End Filter Bar -->
						<br>
					</div>
				</div>
			</div>
		</div>
	<!-- end product Area -->

	<!-- Include footer -->
	<?php include('footer.php'); ?>

	<!-------------------------------------- Modifications by Kaleb Phillips: JavaScript -------------------------------------------
		* Added functionality for page changing buttons in filter bars of the category area.
		* Added functionality for page changing buttons in filter bars of the recently viewed area.
		* Added variables to store book info and retrieve it from php variables.
		* Added a functino to add books to the cart when the add to cart button is clicked.
		* Added ajax to update the cart database after adding a book to the user's cart.
	--------------------------------------------------------------------------------------------------------------------------------->

	<!-- Start Category Page Button Script -->
	<script type="text/javascript" src="../js/pageFunctions.js"></script>
	<script>
		// Get the PHP page arrey and save as JavaScript array
		category_array = <?php echo json_encode($category_pages) ?>

		// Previous arraow button function
		function category_prev () {
			prevPage(category_array)
		}
		// Next arraow button function
		function category_next () {
			nextPage(category_array)
		}
		// Direct page button function
		function category_direct(button) {
			directPage(category_array, button)
		}
	</script>
	<!-- End Category Page Button Script -->

	<!-- Start Recently Viewed Page Button Script -->
	<script type="text/javascript" src="../js/pageFunctions.js"></script>
	<script>
		// Get the PHP page arrey and save as JavaScript array
		recent_array = <?php echo json_encode($recent_pages) ?>

		// Previous arraow button function
		function recent_prev () {
			prevPage(recent_array)
		}
		// Next arraow button function
		function recent_next () {
			nextPage(recent_array)
		}
		// Direct page button function
		function recent_direct(button) {
			directPage(recent_array, button)
		}
	</script>
	<!-- End Recently Viewed Page Button Script -->

	<!-- Start Add To Bag Script -->
	<script type="text/javascript" src="../js/pageFunctions.js"></script><!-- Remove-->
	<script>

		// ISBN of Books
		var banner_book1 = <?php echo json_encode($banner_book1['isbn']); ?>;
		var banner_book2 = <?php echo json_encode($banner_book2['isbn']); ?>;
		var book1 = <?php echo json_encode($recent_books[0]['isbn']); ?>;
		var book2 = <?php echo json_encode($recent_books[1]['isbn']); ?>;
		var book3 = <?php echo json_encode($recent_books[2]['isbn']); ?>;
		var book4 = <?php echo json_encode($recent_books[3]['isbn']); ?>;
		var book5 = <?php echo json_encode($recent_books[4]['isbn']); ?>;
		var book6 = <?php echo json_encode($recent_books[5]['isbn']); ?>;
		var book7 = <?php echo json_encode($recent_books[6]['isbn']); ?>;
		var book8 = <?php echo json_encode($recent_books[7]['isbn']); ?>;

		// Add to bag button function
		function addToBag (isbn) {
		var user = <?php echo json_encode($id); ?>;

		$.ajax({
			url:"bookFunctions.php",
			type: "post",
			dataType: 'json',
			data: {add: isbn, userid: user},
			success:function(result){
				console.log(result.addToCart);
				// If the book was added to the cart
				if(result.addToCart == true) {
					alert("Book added to your cart!");
					window.location.href = "cart.php";
				}
				// If the book is already in the cart
				else if (result.addToCart == "exists") {
					alert("This book is already in your cart");
				}
				else if(result.addToCart == "full") {
					alert("Your cart is full");
				}
				// If there was an error adding to cart
				else {
					alert("Failed to add to the cart");
				}
			}
		});

	}
	</script>
	<!-- End Add To Bag Script -->

	<script src="../js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="../js/vendor/bootstrap.min.js"></script>
	<script src="../js/jquery.ajaxchimp.min.js"></script>
	<script src="../js/jquery.nice-select.min.js"></script>
	<script src="../js/jquery.sticky.js"></script>
	<script src="../js/nouislider.min.js"></script>
	<script src="../js/countdown.js"></script>
	<script src="../js/jquery.magnific-popup.min.js"></script>
	<script src="../js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="../js/gmaps.min.js"></script>
	<script src="../js/main.js"></script>
</body>

</html>
