<!--
	This file was provided by a template and was modified to fit the needs of our website.
	The template can be found here:
	https://themewagon.com/themes/free-reponsive-bootstrap-4-html5-ecommerce-website-template-karma/  
	code modified by @author Kaleb Phillips
-->
<!--<?php
session_start();
?> -->

<?php
session_start();
if (!isset($_SESSION['userid'])) {
    // Redirect to login or handle the case where the user ID is not set
}
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

	<?php
	include 'dbconnect.php';

	$sql = "SELECT image_path FROM books ORDER BY RAND() LIMIT 2";
	$result = mysqli_query($connection, $sql);
	$randomBooks = [];

	if (mysqli_num_rows($result) > 0) {
    		while($book = mysqli_fetch_assoc($result)) {
        		$randomBooks[] = $book;
    		}
	}
	mysqli_close($connection);
	?>


	<section class="banner-area organic-breadcrumb">
		<div class="container" style="margin-bottom: -40px;">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-lg-7">
		<!-- Carousel starts -->
		<div class="active-banner-slider owl-carousel">

	<?php foreach ($randomBooks as $book): ?>
                    <!-- single-slide -->
                    <div class="item">
                        <div class="banner-img" style="margin-left: 50px;">
				<img src="../assets/img/product/<?php echo htmlspecialchars($book['image_path']); ?>" alt="Book Image" style="width: 294px; height: 394px;">	
			</div>
		    </div>
	<?php endforeach; ?>
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
						<?php
						$categories = ['Arts and Humanities', 'Business', 'Health and Medicine', 'Multi-Interdisciplinary', 'STEM', 'Social Sciences', 'ALL'];
						foreach ($categories as $cat) {
							$link = "?category=$cat";
							$link .= isset($_GET['sort']) ? "&sort=" . urlencode($_GET['sort']) : "";
							$link .= isset($_GET['show']) ? "&show=" . urlencode($_GET['show']) : "";
							$active = (isset($_GET['category']) && $_GET['category'] === $cat) ? "style='font-weight:bold;'" : "";
							echo "<li class='main-nav-list'><a href='$link' $active><span class='lnr lnr-arrow-right'></span>$cat</a></li>";
						}
						?>

					</ul>
				</div>
				<div class="sidebar-filter mt-50">
					<div class="top-filter-head">Filters</div>
					<div class="common-filter">
						<div class="head">Type</div>
						<form action="#" method="get">
							<ul>
								<li class="filter-list">
									<input class="pixel-radio" type="radio" id="ebooktype" name="type" value="E-Book" <?= (isset($_GET['type']) && $_GET['type'] == "E-Book") ? "checked" : ""; ?> onchange="this.form.submit()">
									<label for="ebooktype">E-Book</label>
								</li>
								<li class="filter-list">
									<input class="pixel-radio" type="radio" id="hardcovertype" name="type" value="Hardcover" <?= (isset($_GET['type']) && $_GET['type'] == "Hardcover") ? "checked" : ""; ?> onchange="this.form.submit()">
									<label for="hardcovertype">Hardcover</label>
								</li>
								<li class="filter-list">
									<input class="pixel-radio" type="radio" id="alltype" name="type" value="All Types" <?= (!isset($_GET['type']) || $_GET['type'] == "All Types") ? "checked" : ""; ?> onchange="this.form.submit()">
									<label for="alltype">All Types</label>
								</li>
							</ul>
							<input type="hidden" name="category" value="<?= isset($_GET['category']) ? htmlspecialchars($_GET['category']) : 'ALL'; ?>">
							<input type="hidden" name="sort" value="<?= isset($_GET['sort']) ? htmlspecialchars($_GET['sort']) : 'default'; ?>">
							<input type="hidden" name="show" value="<?= isset($_GET['show']) ? htmlspecialchars($_GET['show']) : '12'; ?>">
							<input type="hidden" name="price" value="<?= isset($_GET['price']) ? htmlspecialchars($_GET['price']) : 'All'; ?>">
						</form>
					</div>
					<div class="common-filter">
						<div class="head">Price</div>
						<form action="#" method="get">
							<ul>
								<li class="filter-list">
									<input class="pixel-radio" type="radio" id="free" name="price" value="Free" <?= (isset($_GET['price']) && $_GET['price'] == "Free") ? "checked" : ""; ?> onchange="this.form.submit()">
									<label for="free">Free</label>
								</li>
								<li class="filter-list">
									<input class="pixel-radio" type="radio" id="under10" name="price" value="Under $10" <?= (isset($_GET['price']) && $_GET['price'] == "Under $10") ? "checked" : ""; ?> onchange="this.form.submit()">
									<label for="under10">Under $10</label>
								</li>
								<li class="filter-list">
									<input class="pixel-radio" type="radio" id="under25" name="price" value="Under $25" <?= (isset($_GET['price']) && $_GET['price'] == "Under $25") ? "checked" : ""; ?> onchange="this.form.submit()">
									<label for="under25">Under $25</label>
								</li>
								<li class="filter-list">
									<input class="pixel-radio" type="radio" id="under50" name="price" value="Under $50" <?= (isset($_GET['price']) && $_GET['price'] == "Under $50") ? "checked" : ""; ?> onchange="this.form.submit()">
									<label for="under50">Under $50</label>
								</li>
								<li class="filter-list">
									<input class="pixel-radio" type="radio" id="allprice" name="price" value="All" <?= (!isset($_GET['price']) || $_GET['price'] == "All") ? "checked" : ""; ?> onchange="this.form.submit()">
									<label for="allprice">All</label>
								</li>
							</ul>
							<input type="hidden" name="category" value="<?= isset($_GET['category']) ? htmlspecialchars($_GET['category']) : 'ALL'; ?>">
							<input type="hidden" name="sort" value="<?= isset($_GET['sort']) ? htmlspecialchars($_GET['sort']) : 'default'; ?>">
							<input type="hidden" name="show" value="<?= isset($_GET['show']) ? htmlspecialchars($_GET['show']) : '12'; ?>">
							<input type="hidden" name="type" value="<?= isset($_GET['type']) ? htmlspecialchars($_GET['type']) : 'All Types'; ?>">
						</form>
					</div>
				</div>
			</div>
			<div class="col-xl-9 col-lg-8 col-md-7">



			<!------------------------------ Start Updating Filter Bar ------------------------------->

			<form action="category.php" method="get">
				<div class="filter-bar d-flex flex-wrap align-items-center">
					<div class="sorting" style="color: black;">
						<select name="sort" onchange="this.form.submit()">
							<option value="default" <?= (isset($_GET['sort']) && $_GET['sort'] == "default") ? "selected" : "" ?>>Default sorting</option>
							<option value="title" <?= (isset($_GET['sort']) && $_GET['sort'] == "title") ? "selected" : "" ?>>Sort by title</option>
							<option value="author" <?= (isset($_GET['sort']) && $_GET['sort'] == "author") ? "selected" : "" ?>>Sort by author</option>
						</select>
						<input type="hidden" name="category" value="<?= htmlspecialchars(isset($_GET['category']) ? $_GET['category'] : 'ALL') ?>">

					</div>
					
					<div class="sorting" style="color: black;">
						<select name="show" onchange="this.form.submit()">
							<option value="12" <?= (isset($_GET['show']) && $_GET['show'] == "12") ? "selected" : "" ?>>Show Default</option>
							<option value="3" <?= (isset($_GET['show']) && $_GET['show'] == "3") ? "selected" : "" ?>>Show 3</option>
							<option value="6" <?= (isset($_GET['show']) && $_GET['show'] == "6") ? "selected" : "" ?>>Show 6</option>
							<option value="9" <?= (isset($_GET['show']) && $_GET['show'] == "9") ? "selected" : "" ?>>Show 9</option>
						</select>
					</div>
				</div>
			</form>

			<!---------------------------------------------------------------------------------------->


			<!------------------------------------ Start Book List ----------------------------------->

				<section class="lattest-product-area pb-40 category-list" style="margin-left: 60px; margin-top: 20px;">
					<div class="row">
						<?php
						include 'dbconnect.php'; 


						$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
						$sortOrder = isset($_GET['sort']) && in_array($_GET['sort'], ['default', 'title', 'author']) ? $_GET['sort'] : 'id_books';
						$limit = isset($_GET['show']) && in_array($_GET['show'], ['3', '6', '9']) ? (int)$_GET['show'] : 12;
						$category = isset($_GET['category']) ? $_GET['category'] : 'ALL';
						$type = isset($_GET['type']) ? $_GET['type'] : 'All Types';
						$price = isset($_GET['price']) ? $_GET['price'] : 'All';
						
						$sortField = $sortOrder === 'default' ? 'id_books' : ($sortOrder === 'author' ? 'author_name' : $sortOrder);
						$offset = ($page - 1) * $limit;
						
						$where = "WHERE 1=1";
						if ($category !== 'ALL') {
							$where .= " AND category = '" . mysqli_real_escape_string($connection, $category) . "'";
						}
						if ($type !== 'All Types') {
							$where .= " AND type = '" . mysqli_real_escape_string($connection, $type) . "'";
						}
						if ($price !== 'All') {
							switch ($price) {
								case 'Free':
									$where .= " AND price = 0";
									break;
								case 'Under $10':
									$where .= " AND price < 10";
									break;
								case 'Under $25':
									$where .= " AND price < 25";
									break;
								case 'Under $50':
									$where .= " AND price < 50";
									break;
							}
						}
						
						$countSql = "SELECT COUNT(*) AS total FROM books $where";
						$countResult = mysqli_query($connection, $countSql);
						$countRow = mysqli_fetch_assoc($countResult);
						$totalBooks = $countRow['total'];
						$totalPages = ceil($totalBooks / $limit);
						
						$sql = "SELECT id_books, title, author_name, isbn, category, price, type, description, image_path FROM books $where ORDER BY $sortField LIMIT $limit OFFSET $offset";
						$result = mysqli_query($connection, $sql);



						//loop through and display all books in db
						if (mysqli_num_rows($result) > 0):
							while($book = mysqli_fetch_assoc($result)):
						?>
							<div class="col-lg-4 col-md-6">
								<div class="single-product" style="max-width:200px;">
									<image width="100" height="260" style="padding-right:10px" src="../assets/img/product/<?php echo $book['image_path']; ?>" alt=""/>
									<div class="product-details">
										<h6><?php echo $book['title']; ?></h6>
										<div class="shop-subcategory">
											<h7><?php echo $book['author_name']; ?></h7>
										</div>
										<div class="price">
											<h6>$<?php echo $book['price']; ?></h6>
										</div>
										<div class="prd-bottom">
											<a href="javascript:void(0);" onclick="addToBag('<?= htmlspecialchars($book['isbn']) ?>');" class="social-info">
    												<span class="ti-bag"></span>
    												<p class="hover-text">add to bag</p>
											</a>


											<a href="single-product.php?book=<?php echo $book['id_books']; ?>" class="social-info">
												<span class="lnr lnr-move"></span>
												<p class="hover-text">view more</p>
											</a>
										</div>
									</div>
								</div>
							</div>
						<?php
						endwhile;
						else:
							echo '<p>No Books Available.</p>';
						endif;
						?>
						</div>
 


						<?php

						// Pagination links
						if ($totalPages > 1) {
							echo '<div class="pagination-container" style="clear: both; overflow: auto; max-width: 500px; display: block; text-align: center; margin-top: 20px;">';
							echo '<div class="pagination">';
						
							if($page > 1) {
								echo '<a href="?page=' . ($page - 1) . '&sort=' . $sortOrder . '&show=' . $limit . '" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>';
							}
							for($i = 1; $i <= $totalPages; $i++) {
								echo '<a href="?page=' . $i . '&sort=' . $sortOrder . '&show=' . $limit . '"' . ($i == $page ? ' class="active"' : '') . '>' . $i . '</a>';
							}
							if($page < $totalPages) {
								echo '<a href="?page=' . ($page + 1) . '&sort=' . $sortOrder . '&show=' . $limit . '" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>';
							}
							echo '</div>';
							echo '</div>';
						}
						mysqli_close($connection);
						?>
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
<!----<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
--->


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
