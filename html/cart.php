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
                    <h1>Shopping Cart</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="category.php">Cart</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->


   	<!-------------------------------------- Modifications by Loren Isenhour: Cart Area --------------------------------------------
		* Added book picture placeholder for the each product
		* Adjusted overall checkout table formatting
	--------------------------------------------------------------------------------------------------------------------------------->
    <section class="cart_area" style="margin-top: -150px;">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"><h4>Product</h4></th>
                                <th scope="col"><h4>Price</h4></th>
                                <th scope="col"><h4>Quantity</h4></th>
                                <th scope="col"><h4>Total</h4></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                            <svg width="75" height="100" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="75" height="100" x="" y="" fill="var(--secondary-color3)" />
                                            </svg>
                                        </div>
                                        <div class="media-body">
                                            <p><i>Book 1 Title</i></p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h6>$360.00</h6>
                                </td>
                                <td>
                                    <div class="product_count">
                                        <input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:"
                                            class="input-text qty">
                                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                            class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                            class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                                    </div>
                                </td>
                                <td>
                                    <h6>$720.00</h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                            <svg width="75" height="100" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="75" height="100" x="" y="" fill="var(--secondary-color3)" />
                                            </svg>
                                        </div>
                                        <div class="media-body">
                                            <p><i>Book 2 Title</i></p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h6>$360.00</h6>
                                </td>
                                <td>
                                    <div class="product_count">
                                        <input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:"
                                            class="input-text qty">
                                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                            class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                            class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                                    </div>
                                </td>
                                <td>
                                    <h6>$720.00</h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                            <svg width="75" height="100" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="75" height="100" x="" y="" fill="var(--secondary-color3)" />
                                            </svg>
                                        </div>
                                        <div class="media-body">
                                            <p><i>Book 3 Title</i></p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h6>$360.00</h6>
                                </td>
                                <td>
                                    <div class="product_count">
                                        <input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:"
                                            class="input-text qty">
                                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                            class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                            class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                                    </div>
                                </td>
                                <td>
                                    <h6>$720.00</h6>
                                </td>
                            </tr>
                            <tr class="bottom_button">
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <h6>Subtotal</h6>
                                </td>
                                <td>
                                    <h6>$2160.00</h6>
                                </td>
                            </tr>
                            <tr>

                            </tr>
                            <tr class="shipping_area">
                            </tr>
                            <tr class="out_button_area">
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <div class="checkout_btn_inner d-flex align-items-center">
                                        <a class="gray_btn" href="category.php">Continue Shopping</a>
                                        <a class="primary-btn" href="checkout.php">Proceed to checkout</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!----------------------------------------------------------------------------End Changes -------------------------------------------------------------------->


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
