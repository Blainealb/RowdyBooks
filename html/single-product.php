<!--
	This file was provided by a template and was modified to fit the needs of our website.
	The template can be found here:
	https://themewagon.com/themes/free-reponsive-bootstrap-4-html5-ecommerce-website-template-karma/  
	code modified by @author Kaleb Phillips
-->
<?php
	session_start();

	include 'dbconnect.php';

	if (isset($_GET['book']) && is_numeric($_GET['book'])) {
		$bookId = intval($_GET['book']);

		$stmt = $connection->prepare("SELECT title, author_name, isbn, category, description, image_path, price, publish_date, version, pages, type, dimensions, publisher FROM books WHERE id_books = ?");
		$stmt->bind_param("i", $bookId);
		$stmt->execute();
		$result = $stmt->get_result();

		if ($result->num_rows > 0) {
			$bookDetails = $result->fetch_assoc();
		} else {
			echo "<p>Book not found.</p>";
		}
		$stmt->close();
	} else {
		echo "<p>No book specified.</p>";
	}

	mysqli_close($connection);
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
				<!--  Product image begin -->
					<div class="item" style="max-width:400px; max-height:550">
						<div class="banner-img" style="max-width:400px; max-height:550"> 
							<image width="400" height="550" src="../assets/img/product/<?php echo $bookDetails['image_path']; ?>" alt=""/>
						</div>
					</div>
				<!--  product image end -->
				</div>
				<div class="col-lg-5 offset-lg-1">
					<!-- Product Details begin -->
					<div class="s_product_text">
						<h3><?php echo $bookDetails['title']; ?></h3>
						<h2>$<?php echo $bookDetails['price']; ?></h2>
						<ul class="list">
							<li>Category&nbsp;: &nbsp; <?php echo $bookDetails['category']; ?></li>
							<li>Type&nbsp;: &nbsp; <?php echo $bookDetails['type']; ?></li>
							<li>Availibility&nbsp;: &nbsp; In Stock</li>
						</ul>
						<p><?php echo $bookDetails['description']; ?>
						</p>
						<div class="card_area d-flex align-items-center">
                                                	<a href="javascript:void(0);" onclick="addToBag('<?= htmlspecialchars($bookDetails['isbn']) ?>');" class="primary-btn">
								Add to bag
							</a>
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
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
					<p>Title <t> : </t> <i><?php echo $bookDetails['title']; ?></i> </p>
					<p>Author <t> : </t> <?php echo $bookDetails['author_name']; ?></p>
					<p>Description <t> : </t> <?php echo $bookDetails['description']; ?>
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
										<h5><?php echo $bookDetails['isbn']; ?></h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Publisher</h5>
									</td>
									<td>
										<h5><?php echo $bookDetails['publisher']; ?></h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Publish Date</h5>
									</td>
									<td>
										<h5><?php echo $bookDetails['publish_date']; ?></h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Version</h5>
									</td>
									<td>
										<h5><?php echo $bookDetails['version']; ?></h5>
									</td>
								</tr>

								<tr>
									<td>
										<h5>Pages</h5>
									</td>
									<td>
										<h5><?php echo $bookDetails['pages']; ?></h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Type</h5>
									</td>
									<td>
										<h5><?php echo $bookDetails['type']; ?></h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Dimensions / File Size</h5>
									</td>
									<td>
										<h5><?php echo $bookDetails['dimensions']; ?></h5>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!---------------------------------------------------------- End Changes --------------------------------------------------------->

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



        <script>
                function addToBag(isbn) {
                        var user = <?php echo json_encode($_SESSION['userid'] ?? ''); ?>;  // Ensure you're getting the user ID correctly

                        $.ajax({
                                url: "bookFunctions.php",
                                type: "post",
                                dataType: 'json',
                                data: {add: isbn, userid: user},
                                success: function(result) {
                                if(result.addToCart === true) {
                                        alert("Book added to your cart!");
                                        window.location.href = "cart.php";  // Redirect to cart page or update the cart display dynamically
                                } else if(result.addToCart === "exists") {
                                        alert("This book is already in your cart");
                                } else if(result.addToCart === "full") {
                                        alert("Your cart is full");
                                } else {
                                        alert("Failed to add to the cart");
                                }
                                },
                        error: function(xhr, status, error) {
                        alert("Error: " + xhr.responseText);  // More detailed error message
                        }
                        });
                }
        </script>





</body>

</html>
