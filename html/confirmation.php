<!--------------------------------------------------------------------------------------------------------------------------------
	This file was provided by a template and was modified to fit the needs of our website.
	The template can be found here:
	https://themewagon.com/themes/free-reponsive-bootstrap-4-html5-ecommerce-website-template-karma/
	code modified by @author Kaleb Phillips
--------------------------------------------------------------------------------------------------------------------------------->
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
	<!-- Include header -->
	<?php include('header.php'); ?>

	<!-- Set active navbar items -->
	<script>
		document.getElementById("navShop").className = "nav-item submenu dropdown active";
		document.getElementById("navShopCategory").className = "nav-item active";
	</script>
	<!-- End Header Area -->

	<!-------------------------------------- Modifications by Kaleb Phillips: Header Area ------------------------------------------
		* Removed banner.
	--------------------------------------------------------------------------------------------------------------------------------->
	 <!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
		</div>
	</section>
	<!-- End Banner Area -->

	<!--===================================== Order Details Area ==========================================-->
	<!-------------------------------------- Modifications by Kaleb Phillips: Order Details Area -----------------------------------
		* Updated text color to make text more visible against website background.
		* Increaded font size to make text easier to read.
		* Updated text color to be visible against order details container.
		* Updated placeholder product names to placeholder book titles.
	--------------------------------------------------------------------------------------------------------------------------------->
	<section class="order_details section_gap">
		<div class="container">
			<h3 class="title_confirmation">Thank you. Your order has been received.</h3>
			<div class="row order_d_inner">
				<div class="col-lg-4">
					<div class="details_item" >
						<h4>Order Info</h4>
						<ul class="list">
							<li><a href="#"><span>Order number</span> : 60235</a></li>
							<li><a href="#"><span>Date</span> : Los Angeles</a></li>
							<li><a href="#"><span>Total</span> : USD 2210</a></li>
							<li><a href="#"><span>Payment method</span> : Check payments</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Billing Address</h4>
						<ul class="list">
							<li><a href="#"><span>Street</span> : 56/8</a></li>
							<li><a href="#"><span>City</span> : Los Angeles</a></li>
							<li><a href="#"><span>Country</span> : United States</a></li>
							<li><a href="#"><span>Postcode </span> : 36952</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Shipping Address</h4>
						<ul class="list">
							<li><a href="#"><span>Street</span> : 56/8</a></li>
							<li><a href="#"><span>City</span> : Los Angeles</a></li>
							<li><a href="#"><span>Country</span> : United States</a></li>
							<li><a href="#"><span>Postcode </span> : 36952</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="order_details_table">
				<h2>Order Details</h2>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col" style="font-size: 16px; color: #000000;">Product</th>
								<th scope="col" style="font-size: 16px; color: #000000;">Quantity</th>
								<th scope="col" style="font-size: 16px; color: #000000;">Total</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td style="font-size: 14px; color: #000000;">
									<p>Book1</p>
								</td>
								<td>
									<h5>x 02</h5>
								</td>
								<td style="font-size: 14px; color: #000000;">
									<p>$720.00</p>
								</td>
							</tr>
							<tr>
								<td style="font-size: 14px; color: #000000;">
									<p>Book2</p>
								</td>
								<td>
									<h5>x 01</h5>
								</td>
								<td style="font-size: 14px; color: #000000;">
									<p>$720.00</p>
								</td>
							</tr>
							<tr>
								<td style="font-size: 14px; color: #000000;">
									<p>Book3</p>
								</td>
								<td>
									<h5>x 01</h5>
								</td>
								<td style="font-size: 14px; color: #000000;">
									<p>$720.00</p>
								</td>
							</tr>
							<tr>
								<td>
									<h4>Subtotal</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td style="font-size: 14px; color: #000000;">
									<p>$2160.00</p>
								</td>
							</tr>
							<tr>
								<td>
									<h4>Shipping</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td style="font-size: 14px; color: #000000;">
									<p>Flat rate: $50.00</p>
								</td>
							</tr>
							<tr>
								<td>
									<h4>Total</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>$2210.00</p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	<!--================End Order Details Area =================-->

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
