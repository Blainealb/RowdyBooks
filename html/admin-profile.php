<!--
        This file was provided by a template and was modified to fit the needs of our website.
        The template can be found here:
        https://themewagon.com/themes/free-reponsive-bootstrap-4-html5-ecommerce-website-template-karma/
        code modified by @author Kaleb Phillips
-->
<?php
// // Start the session (if not already started)
// session_start();

// // Check if the user is logged in
// function isLoggedIn() {
//     // Check if the 'user_id' session variable is set
//     return isset($_SESSION['userid']);
// }

// // Redirect to the login page if the user is not logged in
// if (!isLoggedIn()) {
//     header("Location: login.php");
//     exit(); // Stop further execution
// }

// // Get user's information from the session
// $userName = $_SESSION['username']; // Assuming you store user's name in the session
// $userEmail = $_SESSION['email'];
?>

<!-------------------------------------- Modifications by Blaine Byrd: Profile Page --------------------------------------------
                * Modified Navbar to fit site needs
		* Set up user session for when they log in 
		* Created log out buttion to end user session
        --------------------------------------------------------------------------------------------------------------------------------->

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
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-start">
				<div class="col-first">
					<h1>Profile</h1>
					<h2>Welcome, <?php echo $userName; ?>!</h2>
				
				</div>
			</div>
			<div class="sidebar-categories">
                                        <div class="head">Profile Options</div>
                                        <ul class="main-categories">
                                                <li class="main-nav-list"><a href="edit-profile.php"><span 
                                                                 class="lnr lnr-arrow-right"></span>Edit Profile</a>
                                                </li>
                                                <li class="main-nav-list"><a href="#"><span 
                                                                 class="lnr lnr-arrow-right"></span>View Wishlist</a>
                                                </li>
                                                <li class="main-nav-list"><a href="logout.php"><span
                                                                 class="lnr lnr-arrow-right"></span>Log Out</a>
                                                </li>

                                        </ul>
                                </div>

                    <div class="col-md-6 offset-md-3">
		</div>
	</section>
	<!-- End Banner Area -->

	<!-- Profile Content -->
        <section class="profile-section">
            <div class="container">
		<div class="row">

                    <div class="col-md-6 offset-md-3">
	
		<div class="profile">
			<?php
                    $isLoggedIn = true; // You should replace this with your actual check for user login status
                    if ($isLoggedIn) {
?>

		    <?php
                    } else {
                        // If the user is not logged in, redirect them to the login page
                        header("Location: login.php");
                        exit(); // Stop further execution
                    }
                    ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Profile Content -->

	<!-- Include footer -->
    <?php include('footer.php'); ?>



	<!--================Contact Success and Error message Area =================-->
	<div id="success" class="modal modal-message fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i class="fa fa-close"></i>
					</button>
					<h2>Thank you</h2>
					<p>Your message is successfully sent...</p>
				</div>
			</div>
		</div>
	</div>

	<!-- Modals error -->

	<div id="error" class="modal modal-message fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i class="fa fa-close"></i>
					</button>
					<h2>Sorry !</h2>
					<p> Something went wrong </p>
				</div>
			</div>
		</div>
	</div>
	<!--================End Contact Success and Error message Area =================-->


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
