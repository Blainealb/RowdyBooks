<!--------------------------------------------------------------------------------------------------------------------------------
	This file was provided by a template and was modified to fit the needs of our website.
	The template can be found here:
	https://themewagon.com/themes/free-reponsive-bootstrap-4-html5-ecommerce-website-template-karma/
	code modified by @author Kaleb Phillips
--------------------------------------------------------------------------------------------------------------------------------->

<!-------------------------------------- Modifications by Kaleb Phillips: Header Area --------------------------------------------
	* Removed default logo and added site name to header.
	* Updated the names of navbar dropdown toggle buttons.
	* Removed extra navbar dropdown toggle buttons.
	* Updated the color of the navbar to orange and the dropdown menu highlit color to blue.
	* Removed the button to drop down search bar from navbar.
	* Added magnifier icon inside search bar.
	* Updated the color of the search bar.
	* Removed button to hide the search bar.
--------------------------------------------------------------------------------------------------------------------------------->

<!-------------------------------------- Modifications by Blaine Byrd: Profile Page ----------------------------------------------
	* Modified Navbar to fit site needs
--------------------------------------------------------------------------------------------------------------------------------->

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
						<li id="navHome" class="nav-item"><a class="nav-link" href="./">Home</a></li>
						<li id="navShop" class="nav-item submenu dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Shop New</a>
							<ul class="dropdown-menu">
								<li id="navShopCategory" class="nav-item"><a class="nav-link" href="category.php">Shop Category</a></li>
							</ul>
						</li>
						<li id="navTradeMarket" class="nav-item submenu dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Trade Market</a>
							<ul class="dropdown-menu">
								<li id="navTrade" class="nav-item"><a class="nav-link" href="trade.php">Trade</a></li>
								<li id="navTradeIn" class="nav-item"><a class="nav-link" href="trade-in.php">Trade In</a></li>
							</ul>
						</li>
						<li id="navAboutUs" class="nav-item submenu dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">About Us</a>
							<ul class="dropdown-menu">
								<li id="navDropdownAboutUs" class="nav-item"><a class="nav-link" href="about-us.php">About Us</a></li>
								<li id="navContact" class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
							</ul>
						</li>
						<li id="navMyAccount" class="nav-item submenu dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">My Account</a>
							<ul class="dropdown-menu">
								<li id="navLogin" class="nav-item"><a class="nav-link" href="check-user.php">Login</a></li>
								<li id="navProfile" class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="nav-item"><a href="cart.php" class="cart"><span class="ti-bag"></span></a></li>
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
