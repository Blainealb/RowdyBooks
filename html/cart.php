<!--
	This file was provided by a template and was modified to fit the needs of our website.
	The template can be found here:
	https://themewagon.com/themes/free-reponsive-bootstrap-4-html5-ecommerce-website-template-karma/
	code modified by @author Kaleb Phillips
-->
<?php
require "dbconnect.php";
session_start();

// Check if user is logged in and if they are get the user ID from the session
if(isset($_SESSION['userid'])) {
	$id = $_SESSION['userid'];
	$loggedin = true;
}
else {
	$loggedin = false;
}

/*-------------------------------------- Modifications by Kaleb Phillips: PHP --------------------------------------------------
	* Added functions for retrieving books from database.
	* Added variables to store book titles and covers.
--------------------------------------------------------------------------------------------------------------------------------*/

// Retrieve Products from Database
require "bookFunctions.php";
require "dbconnect.php";

// Retrieve the books in the user's cart
$cart = getCartBooks("$id");
$cart_book1_title = $cart[0]['title'];
$cart_book1_cover = $cart[0]['image_path'];
$cart_book1_isbn = $cart[0]['isbn'];
$cart_book1_price = $cart[0]['price'];
$cart_book2_title = $cart[1]['title'];
$cart_book2_cover = $cart[1]['image_path'];
$cart_book2_isbn = $cart[1]['isbn'];
$cart_book2_price = $cart[1]['price'];
$cart_book3_title = $cart[2]['title'];
$cart_book3_cover = $cart[2]['image_path'];
$cart_book3_isbn = $cart[2]['isbn'];
$cart_book3_price = $cart[2]['price'];

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
							<li class="nav-item"><a class="nav-link" href="./">Home</a></li>
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
							</li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="cart.php" class="cart"><span class="ti-bag"></span></a></li>
						</ul>
						</div>
					</div>
				</div>
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
			</nav>
		</div>
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
	</header>
	<!-- End Header Area -->

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Shopping Cart</h1>
                    <nav class="d-flex align-items-center">
                        <a href="./">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="category.php">Shop<span class="lnr lnr-arrow-right"></span></a>
						<a href="cart.php">Cart</a>
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

    <!-------------------------------------- Modifications by Kaleb Phillips: Cart Area --------------------------------------------
        * Added functionality for displaying book titles and covers from the database.
	* Added message and button to prompt the user to lgin if they are not currently.
        * Added functionality to show and hide login message.
        * Added message and button to indicate that the cart is empty if there are no books in it currently.
        * Added functionality to show and hide empty cart message.
        * Added functionality to show and hide table rows for books depending on the number of books in the cart.
        * Added button to remove books from cart and implemented the functionality for removing books.
        * Added extra comments.
    --------------------------------------------------------------------------------------------------------------------------------->

    <!-- Start Cart Area -->
    <section class="cart_area" style="margin-top: -150px;">
        <div class="container">
            <!-- Login message and login page button -->
            <div id="loginMessage" style="text-align: center; display: none;">
                <h1> Your Are Not Logged In </h1>
                <h1> Please log in to access your cart </h1>
                <br>
                <a href="login.php" type="button" class="genric-btn primary large" style="font-size : 20px; color: var(--primary_color)">Login</a>
            </div>
            <!-- Empty cart message and shop page button -->
            <div id="emptyCart" style="text-align: center; display: none;">
                <h1> Your Cart is Empty </h1>
                <br>
                <a href="category.php" type="button" class="genric-btn primary large" style="font-size : 20px; color: var(--primary_color)">Shop For Books To Add</a>
            </div>

            <!-- Cart column headers -->
            <div class="cart_inner">
                <div class="table-responsive">
                    <table id="cartTable" class="table">
                        <thead>
                            <tr>
                                <th scope="col"><h4>Product</h4></th>
                                <th scope="col"><h4>Price</h4></th>
                                <th scope="col"><h4>Quantity</h4></th>
                                <th scope="col"><h4>Total</h4></th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Cart table 1 -->
                            <tr id="table1">
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
											<a href="single-product.php?book=<?php echo $cart[0]['id_books']; ?>">
                                            	<img id="book1_cover" class="img-fluid" style="width: 75px; height: 100px;"
                                                	src="../assets/img/product/<?php echo $cart_book1_cover; ?>"
                                                	alt="">
											</a>
                                        </div>
                                        <div id="book1_title" class="media-body">
											<a href="single-product.php?book=<?php echo $cart[0]['id_books']; ?>">
                                                <h6><i><?php echo $cart_book1_title ?></i></h6>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td  id="book1_price">
                                    <h6><?php echo $cart_book1_price ?></h6>
                                </td>
                                <td>
                                    <br>
                                    <div class="product_count">
                                        <input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:"
                                            class="input-text qty">
                                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                            class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                            class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                                    </div>

                                    <div>
                                        <br>
                                        <!-- Cart table 1 remove button -->
                                        <a type="button" class="genric-btn primary small" onclick="remove('button1', book1_isbn)" style="color: var(--primary_color)">Remove</a>
                                    </div>
                                </td>

                                <td id="book1_total_price">
                                    <h6><?php echo $cart_book1_price ?></h6>
                                </td>
                            </tr>
                            <!-- Cart table 2 -->
                            <tr id="table2">
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
											<a href="single-product.php?book=<?php echo $cart[1]['id_books']; ?>">
                                            	<img id="book2_cover" class="img-fluid" style="width: 75px; height: 100px;"
                                                	src="../assets/img/product/<?php echo $cart_book2_cover; ?>"
                                                	alt="">
											</a>
                                        </div>
                                        <div id="book2_title" class="media-body">
											<a href="single-product.php?book=<?php echo $cart[1]['id_books']; ?>">
                                                <h6><i><?php echo $cart_book2_title ?></i></h6>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td id="book2_price">
                                    <h6><?php echo $cart_book2_price ?></h6>
                                </td>
                                <td>
                                    <br>
                                    <div class="product_count">
                                        <input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:"
                                            class="input-text qty">
                                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                            class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                            class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                                    </div>

                                    <div>
                                        <br>
                                        <!-- Cart table 2 remove button -->
                                        <a type="button" class="genric-btn primary small" onclick="remove('button2', book2_isbn)" style="color: var(--primary_color)">Remove</a>
                                    </div>
                                </td>
                                <td id="book2_total_price">
                                    <h6><?php echo $cart_book2_price ?></h6>
                                </td>
                            </tr>
                            <!-- Cart table 3 -->
                            <tr id="table3">
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
											<a href="single-product.php?book=<?php echo $cart[2]['id_books']; ?>">
                                            	<img id="book3_cover" class="img-fluid" style="width: 75px; height: 100px;"
                                                	src="../assets/img/product/<?php echo $cart_book3_cover; ?>"
                                                	alt="">
											</a>
                                        </div>
                                        <div id="book3_title" class="media-body">
											<a href="single-product.php?book=<?php echo $cart[2]['id_books']; ?>">
                                            	<h6><i><?php echo $cart_book3_title ?></i></h6>
											</a>
                                        </div>
                                    </div>
                                </td>
                                <td id="book3_price">
                                    <h6><?php echo $cart_book3_price ?></h6>
                                </td>
                                <td>
                                    <br>
                                    <div class="product_count">
                                        <input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:"
                                            class="input-text qty">
                                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                            class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                            class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                                    </div>

                                    <div>
                                        <br>
                                        <!-- Cart table 3 remove button -->
                                        <a type="button" class="genric-btn primary small" onclick="remove('button3', book3_isbn)" style="color: var(--primary_color)">Remove</a>
                                    </div>
                                </td>
                                <td id="book3_total_price">
                                    <h6><?php echo $cart_book3_price ?></h6>
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
                                    <h6><?php echo $cart_book1_price + $cart_book2_price + $cart_book3_price ?></h6>
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
                                        <a class="gray_btn" style="white-space: nowrap;" href="category.php">Continue Shopping</a>
                                        <a class="primary-btn" style="white-space: nowrap;" href="checkout.php">Proceed to checkout</a>
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

	<!-- Include footer -->
    <?php include('footer.php'); ?>

    <!-------------------------------------- Modifications by Kaleb Phillips: JavaScript -------------------------------------------
        * Added functionality for displaying book titles and covers from the database.
	* Added variables to store book info and retrieve it from php variables.
	* Added variable to store login status and retrieve it from php the variable.
        * Added a functino to remove books when the remove button is clicked.
        * Added ajax to update the cart database after removing a book from the cart.
        * Added a function for hiding table rows that don't have books.
        * Added a function for hidding all table rows.
        * Added checks for empty table rows.
        * Added functionality to determine user login status and display or hide a message accordingly.
        * Added function to determine if the cart is empty display or hide a message accordingly.
    --------------------------------------------------------------------------------------------------------------------------------->

    <script>

        // Books
        var book1_title = <?php echo json_encode($cart_book1_title); ?>;
        var book1_cover = <?php echo json_encode($cart_book1_cover); ?>;
        var book1_isbn = <?php echo json_encode($cart_book1_isbn); ?>;
	var book1_price = <?php echo json_encode($cart_book1_price); ?>;
        var book2_title = <?php echo json_encode($cart_book2_title); ?>;
        var book2_cover = <?php echo json_encode($cart_book2_cover); ?>;
        var book2_isbn = <?php echo json_encode($cart_book2_isbn); ?>;
	var book2_price = <?php echo json_encode($cart_book2_price); ?>;
        var book3_title = <?php echo json_encode($cart_book3_title); ?>;
        var book3_cover = <?php echo json_encode($cart_book3_cover); ?>;
        var book3_isbn = <?php echo json_encode($cart_book3_isbn); ?>;
	var book3_price = <?php echo json_encode($cart_book3_price); ?>;

        // Loggedin status
        loggedin = <?php echo json_encode($loggedin); ?>;


        // Hide cart table elements with empty book slots
        if (book1_title == null) {
            // Hide the table for the first book
            hideTable("table1");
        }
        if (book2_title == null) {
            // Hide the table for the second book
            hideTable("table2");
        }
        if (book3_title == null) {
            // Hide the table for the third book
            hideTable("table3");
        }

        // Check if the user is logged in
        if (loggedin == false) {
            // Show log in message
            document.getElementById("loginMessage").style = "text-align: center; display: block";
            // Show empty cart message
            document.getElementById("emptyCart").style = "text-align: center; display: none";
            // Hide the table for the cart
            document.getElementById("cartTable").style = "text-align: center; display: none"; 
        }

        /**
         * Function: remove
         * Description: Uses ajax to remove a book from a user's cart in the database
         * and hides the row of the book that was removed from the cart.
         * @param button - the remove button that was clicked on.
         * @param isbn - the isbn of the book to remove.
         */
        function remove(button, isbn) {
            var user = <?php echo json_encode($id); ?>;

            $.ajax({
                url:"bookFunctions.php",
                type: "post",
                dataType: 'json',
                data: {remove: isbn, userid: user},
                success:function(result){
                    console.log(result.abc);
                }
            });

            // Update the books displayed in cart
            if (button == 'button1') {
                // Hide the table for the first book
                book1_title = null;
                hideTable("table1");
            }
            else if (button == 'button2') {
                // Hide the table for the second book
                book2_title = null;
                hideTable("table2");
            }
            else if (button == 'button3') {
                // Hide the table for the third book
                book3_title = null;
                hideTable("table3");
            }
        }

        /**
         * Function: hideTable
         * Description: Hides the table row of table row id passed in
         * and checks to see if the cart is now empty.
         * @param table - the id of the table row to hide.
         */
        function hideTable (table) {
            document.getElementById(table).style = "display: none";
            // Check if cart is empty
            cartIsEmpty();
        }

         /**
         * Function: cartIsEmpty
         * Description: Checks if the cart is empty and hides the
         * table and displays the empty cart message accordingly.
         */
        function cartIsEmpty () {
            // If the cart is empty
            if (book1_title == null && book2_title == null && book3_title == null && loggedin == true) {
                // Show empty cart message
                document.getElementById("emptyCart").style = "text-align: center; display: block";
                // Hide the table for the cart
                document.getElementById("cartTable").style = "text-align: center; display: none";            
            }
        }
    </script>

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
