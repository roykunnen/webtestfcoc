<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Brontona Shoes</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Brontona Shoes ecommerce website" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //custom-theme -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="css/shop.css" type="text/css" media="screen" property="" />
	<link href="css/style7.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Owl-carousel-CSS -->
	<link rel="stylesheet" type="text/css" href="css/contact.css">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome-icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome-icons -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>
	<!-- banner -->
<div class="banner_top innerpage" id="home">
		<div class="wrapper_top_w3layouts">
			<div class="header_agileits">
				<div class="logo inner_page_log">
					<h1><a class="navbar-brand" href="index.php"><span>Brontona</span> <i>Shoes</i></a></h1>
				</div>
				<div class="overlay overlay-contentpush">
					<button type="button" class="overlay-close"><i class="fa fa-times" aria-hidden="true"></i></button>

					<nav>
					<?php
					include_once("navigation.php");
					?>
					</nav>
				</div>
				<div class="mobile-nav-button">
					<button id="trigger-overlay" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
				</div>
				<!-- cart details -->
				<!-- Login profile -->
				<div>
					<a href="login.php"><button class="top_profile top_nav_right" type="submit" name="submit" value="" ><img src= "images/profile.png" width = "36px" height = "36px"></button></a>
				</div>					
				<form action="#" method="post">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="display" value="1">
							<button class="top_shoe_cart top_nav_right" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
				</form>
					
				
			</div>
		</div>
		<!-- //cart details -->
		<!-- search -->
		<div class="search_w3ls_agileinfo">
			<div class="cd-main-header">
				<ul class="cd-header-buttons">
					<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
				</ul>
			</div>
			<div id="cd-search" class="cd-search">
				<form action="#" method="post">
					<input name="Search" type="search" placeholder="Click enter after typing...">
				</form>
			</div>
		</div>
		<!-- //search -->
		<div class="clearfix"></div>
		<!-- /banner_inner -->
		<div class="services-breadcrumb_w3ls_agileinfo">
			<div class="inner_breadcrumb_agileits_w3">

				<ul class="short">
					<li><a href="index.html">Home</a><i>|</i></li>
					<li>Contact</li>
				</ul>
			</div>
		</div>
		<!-- //banner_inner -->
	</div>

	<!-- //banner -->
	<!-- top Products -->
	<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			<h3 class="head">Contact Us</h3>
			<p class="head_para">Add Some Description</p>
			<div class="inner_section_w3ls">
				<div class="col-md-7 contact_grid_right">
					<h6>Please fill in this form to contact us.</h6>
					<form action="#" method="post">
						<div class="col-md-6 col-sm-6 contact_left_grid">
							<input type="text" name="Name" placeholder="Name" required="">
							<input type="email" name="Email" placeholder="Email" required="">
						</div>
						<div class="col-md-6 col-sm-6 contact_left_grid">
							<input type="text" name="Telephone" placeholder="Telephone" required="">
							<input type="text" name="Subject" placeholder="Subject" required="">
						</div>
						<div class="clearfix"> </div>
						<textarea name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
						<input type="submit" value="Submit">
						<input type="reset" value="Clear">
					</form>
				</div>
				<div class="col-md-5 contact-left">
					<h6>Contact Info</h6>
					<div class="visit">
						<div class="col-md-2 col-sm-2 col-xs-2 contact-icon">
							<span class="fa fa-home" aria-hidden="true"></span>
						</div>
						<div class="col-md-10 col-sm-10 col-xs-10 contact-text">
							<h4>Visit us</h4>
							<p>Guido Gezellelaan 4, 2800 Mechelen, Belgium</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="mail-us">
						<div class="col-md-2 col-sm-2 col-xs-2 contact-icon">
							<span class="fa fa-envelope" aria-hidden="true"></span>
						</div>
						<div class="col-md-10 col-sm-10 col-xs-10 contact-text">
							<h4>Mail us</h4>
							<p><a href="mailto:info@example.com">Brontona.Shoes@gmail.com</a></p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="call">
						<div class="col-md-2 col-sm-2 col-xs-2 contact-icon">
							<span class="fa fa-phone" aria-hidden="true"></span>
						</div>
						<div class="col-md-10 col-sm-10 col-xs-10 contact-text">
							<h4>Call us</h4>
							<p>+18044261149</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="visit">
						<div class="col-md-2 col-sm-2 col-xs-2 contact-icon">
							<span class="fa fa-fax" aria-hidden="true"></span>
						</div>
						<div class="col-md-10 col-sm-10 col-xs-10 contact-text">
							<h4>Fax</h4>
							<p>+1804426349</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"> </div>

			</div>

			<div class="clearfix"></div>

		</div>
	</div>
	<div class="contact-map">

	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2509.054542407284!2d4.470112915911977!3d51.033613353053745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3e5b8fffb3341%3A0x946baec8a77f00fc!2sMcDonald&#39;s%20Mechelen!5e0!3m2!1snl!2sbe!4v1607525498783!5m2!1snl!2sbe" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
		    class="map" style="border:0" allowfullscreen=""></iframe>
	</div>

	<!-- /newsletter-->
	<div class="newsletter_w3layouts_agile">
		<div class="col-sm-6 newsleft">
			<h3>Sign up for Newsletter !</h3>
		</div>
		<div class="col-sm-6 newsright">
			<form action="#" method="post">
				<input type="email" placeholder="Enter your email..." name="email" required="">
				<input type="submit" value="Submit">
			</form>
		</div>

		<?php 
	include('footer.php'); 
	?>


</body>

</html>