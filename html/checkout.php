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

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Checkout</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="single-product.html">Checkout</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->



	<!-------------------------------------------Modifications by Loren Isenhour: Check Out Area------------------------------------------
        * Rearranged entire checkout section
		* Added Credit/Debit Card Information section and card radios
        * Your Order section
	------------------------------------------------------------------------------------------------------------------------------------->
    <section class="checkout_area section_gap" style="margin-top: -150px;">
        <div class="container">
            <div class="billing_details" >
                <div class="row">
                    <div class="col-lg-8">
                        <!------ Start Card Info Section ----->
                        <h4>Credit/Debit Card Information</h4>
                        <h3></h3>
                        <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="namecard" name="namecard" placeholder="Name On Card">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="cardnumber" name="cardnumber" placeholder="Card Number">
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="cardexpire" name="cardexpire" placeholder="Expiration Date">
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="cvv" name="cvv" placeholder="CVV">
                            </div>
                        </form>

                        <style>
                            .filter-list2 {
                                display: inline-block; 
                                margin-right: 20px; 
                            }
                        </style>
                        <form action="#">
                            <ul>
                                <li class="filter-list2"><input class="pixel-radio" type="radio" id="visa" name="typefilter"><label for="visa">Visa</label></li>
                                <li class="filter-list2"><input class="pixel-radio" type="radio" id="mastercard" name="typefilter"><label for="mastercard">MasterCard</label></li>
                                <li class="filter-list2"><input class="pixel-radio" type="radio" id="amex" name="typefilter"><label for="amex">Amex</label></li>
                            </ul>
                        </form><br><br>
                        <!------ End Card Info Section ----->
                        <!------ Start Billing Details Section ----->
                        <h4>Billing Details</h4>
                        <h3></h3>
                        <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name">
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="Phone Number">
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="emailaddress" name="emailaddress" placeholder="Email Address">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="country" name="country" placeholder="Country">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="add1" name="add1" placeholder="Address line 01">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="add2" name="add2" placeholder="Address line 02">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="city" name="city" placeholder="City">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="county" name="county" placeholder="County">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="zip" name="zip" placeholder="Postcode/ZIP"><br>
                            </div>
                        </form>
                        <!------ End Card Info Section ----->
                        <form>
                            <div class="col-md-12 form-group" style="margin-left: -15px;">
                                <div class="creat_account">
                                    <h4>Shipping Details</h4>
                                    <h3></h3>
                                    <input type="checkbox" id="f-option3" name="selector">
                                    <label for="f-option3">Ship to a different address?</label>
                                </div><br>

<!------------------------NOT IMPLEMENTED: Add Later. If selector is checked, show second form, otherwise leave hidden ------------------------->
                                <!-- <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                                    <div class="col-md-6 form-group p_star">
                                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name">
                                    </div>
                                    <div class="col-md-6 form-group p_star">
                                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
                                    </div>
                                    <div class="col-md-6 form-group p_star">
                                        <input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="Phone Number">
                                    </div>
                                    <div class="col-md-6 form-group p_star">
                                        <input type="text" class="form-control" id="emailaddress" name="emailaddress" placeholder="Email Address">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="country" name="country" placeholder="Country">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="add1" name="add1" placeholder="Address line 01">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="add2" name="add2" placeholder="Address line 02">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="city" name="city" placeholder="City">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="county" name="county" placeholder="County">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input type="text" class="form-control" id="zip" name="zip" placeholder="Postcode/ZIP"><br>
                                    </div>
                                </form> -->
<!--------------------------------------------------------------------------------------------------------------------------------------------->

                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Order Notes"></textarea>
                            </div>
                        </form>
                    </div>
                    <!------ Start Your Order Section ----->
                    <div class="col-lg-4" style="margin-top: 38px;">
                        <div class="order_box">
                            <h2>Your Order</h2>
                            <ul class="list">
                                <li><a href="#">Product <span>Total</span></a></li>
                                <li><a href="#">Book 1 <span class="middle">x 01</span> <span class="last">$49.99</span></a></li>
                                <li><a href="#">Book 2 <span class="middle">x 01</span> <span class="last">$89.99</span></a></li>
                            </ul>
                            <hr>
                            <ul class="list list_2">
                                <li><a href="#">Subtotal <span>$159.99</span></a></li>
                                <li><a href="#">Shipping <span>Flat rate: $9.99</span></a></li>
                                <li><a href="#">Total <span>$169.99</span></a></li>
                            </ul>
                            <br><br>
                            <div class="creat_account">
                                <input type="checkbox" id="f-option4" name="selector">
                                <label for="f-option4">I’ve read and accept the </label>
                                <a href="#">terms & conditions*</a>
                            </div>
                            <a class="primary-btn" href="confirmation.php">Place Order</a>
                        </div>
                    </div>
                    <!------ End Card Info Section ----->
                </div>
            </div>
        </div>
    </section>
    <!----------------------------------------------------------------- End Changes --------------------------------------------------------->



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
