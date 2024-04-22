<!--
	This file was provided by a template and was modified to fit the needs of our website.
	The template can be found here:
	https://themewagon.com/themes/free-reponsive-bootstrap-4-html5-ecommerce-website-template-karma/  
	code modified by @author Diego Aguirre Guerra
-->
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

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Add a New Book</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="category.html">Add Product</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Add New Product=================-->
    <section class="tracking_box_area section_gap">
        <div class="container">
            <div class="tracking_box_inner">
                <p>To add a new book, please fill out the form below.</p>
                <form class="row tracking_form" action="add_book.php" method="post" enctype="multipart/form-data" novalidate="novalidate">
                    <div class="col-md-12 form-group">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Title" required onfocus="this.placeholder = ''" onblur="this.placeholder = 'Title'">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="text" class="form-control" id="author" name="author" placeholder="Author" required onfocus="this.placeholder = ''" onblur="this.placeholder = 'Author'">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="text" class="form-control" id="category" name="category" placeholder="Category" required onfocus="this.placeholder = ''" onblur="this.placeholder = 'Category'">
                    </div>
                    <div class="col-md-12 form-group">
                        <textarea class="form-control" id="description" name="description" placeholder="Description" rows="3" required onfocus="this.placeholder = ''" onblur="this.placeholder = 'Description'"></textarea>
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="text" class="form-control" id="isbn" name="isbn" placeholder="ISBN" required onfocus="this.placeholder = ''" onblur="this.placeholder = 'ISBN'">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="text" class="form-control" id="price" name="price" placeholder="Price" required onfocus="this.placeholder = ''" onblur="this.placeholder = 'Price'">
                    </div>
                    <div class="col-md-12 form-group">
                        <label for="image" class="form-control-label">Choose Image</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>
                    <div class="col-md-12 form-group">
                        <button type="submit" class="primary-btn">Add Book</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--================End Add New Product=================-->

    <!-- start footer Area -->
    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>About Us</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore dolore
                            magna aliqua.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Newsletter</h6>
                        <p>Stay update with our latest</p>
                        <div class="" id="mc_embed_signup">

                            <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="form-inline">

                                <div class="d-flex flex-row">

                                    <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter Email '" required="" type="email">


                                    <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right"
                                            aria-hidden="true"></i></button>
                                    <div style="position: absolute; left: -5000px;">
                                        <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                            type="text">
                                    </div>

                                    <div class="col-lg-4 col-md-4">
													<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
												</div>
                                </div>
                                <div class="info"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget mail-chimp">
                        <h6 class="mb-20">Instragram Feed</h6>
                        <ul class="instafeed d-flex flex-wrap">
                            <li><img src="img/i1.jpg" alt=""></li>
                            <li><img src="img/i2.jpg" alt=""></li>
                            <li><img src="img/i3.jpg" alt=""></li>
                            <li><img src="img/i4.jpg" alt=""></li>
                            <li><img src="img/i5.jpg" alt=""></li>
                            <li><img src="img/i6.jpg" alt=""></li>
                            <li><img src="img/i7.jpg" alt=""></li>
                            <li><img src="img/i8.jpg" alt=""></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Follow Us</h6>
                        <p>Let us be social</p>
                        <div class="footer-social d-flex align-items-center">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
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

