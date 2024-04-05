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
