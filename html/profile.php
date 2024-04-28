<!--
        This file was provided by a template and was modified to fit the needs of our website.
        The template can be found here:
        https://themewagon.com/themes/free-reponsive-bootstrap-4-html5-ecommerce-website-template-karma/
        code modified by @author Kaleb Phillips
-->
<?php
// Start the session (if not already started)
session_start();

// Check if the user is logged in
function isLoggedIn() {
    // Check if the 'user_id' session variable is set
    return isset($_SESSION['userid']);
}

// Redirect to the login page if the user is not logged in
if (!isLoggedIn()) {
    header("Location: login.php");
    exit(); // Stop further execution
}

// Get user's information from the session
$userName = $_SESSION['username']; // Assuming you store user's name in the session
$userEmail = $_SESSION['email'];
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
	<!-- Start Header Area -->
	<!-- Include header -->
 	<?php include('header.php'); ?>

	<!-- Set active navbar items -->
	<script>
		document.getElementById("navMyAccount").className = "nav-item submenu dropdown active";
		document.getElementById("navProfile").className = "nav-item active";
	</script>
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
                                                <li class="main-nav-list"><a href="wishlist.php"><span 
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
                    $isLoggedIn = true; 
                    if ($isLoggedIn) {
?>

		    <?php
                    } else {
                        // If the user is not logged in, redirect them to the login page
                        header("Location: user-check.php");
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
