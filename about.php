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
	<link rel="stylesheet" href="css/about.css" type="text/css" media="screen" property="" />
	<link rel="stylesheet" href="css/shop.css" type="text/css" media="screen" property="" />
	<link href="css/style7.css" rel="stylesheet" type="text/css" media="all" />
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
					<li>About</li>
				</ul>
			</div>
		</div>
		<!-- //banner_inner -->
	</div>


	<!-- //banner -->
	<!-- top Products -->
	<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			<h3 class="head">About Us</h3>
			<p class="head_para">Add Some Description</p>
			<div class="inner_section_w3ls">
				<div class="col-md-6 news-left">
					<img src="images/ab.jpg" alt=" " class="img-responsive">
				</div>
				<div class="col-md-6 news-right">
					<h4>Welcome to Brontona Shoes</h4>
					<p class="sub_p">
					</p>
					<p>
					</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>

	</div>
	<div class="mid_services">
		<div class="col-md-6 according_inner_grids">
			<h3 class="heading two">Who We Are</h3>
			<div class="according_info">
				<div class="panel-group about_panel" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title asd">
								<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true"
								    aria-controls="collapseOne">
							  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>
							</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"  aria-labelledby="headingOne">
							<div class="panel-body panel_text" >
								sesegsge
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
							<h4 class="panel-title asd">
								<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
								    aria-controls="collapseTwo">
							  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>
							</a>
							</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="panel-body panel_text">
								rgfsrdg
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingThree">
							<h4 class="panel-title asd">
								<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false"
								    aria-controls="collapseThree">
							  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>
							</a>
							</h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="panel-body panel_text">
								
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingThree">
							<h4 class="panel-title asd">
								<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false"
								    aria-controls="collapseThree">
							  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>
							</a>
							</h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="panel-body panel_text">
								
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="col-md-6 mid_services_img">
			<div class="bar-grids">
				<h3 class="heading two three">Our Skills</h3>
				<div class="skill_info">
					<h6>Development<span> 95% </span></h6>
					<div class="progress">
						<div class="progress-bar progress-bar-striped active" style="width: 95%">
						</div>
					</div>
					<h6>Pricing<span> 85% </span></h6>
					<div class="progress">
						<div class="progress-bar progress-bar-striped active" style="width: 85%">
						</div>
					</div>
					<h6>Production <span>90% </span></h6>
					<div class="progress">
						<div class="progress-bar progress-bar-striped active" style="width: 90%">
						</div>
					</div>
					<h6>Advertising <span>86% </span></h6>
					<div class="progress prgs-last">
						<div class="progress-bar progress-bar-striped active" style="width: 86%">
						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="clearfix"> </div>
	</div>
	<!-- /Properties -->
	<div class="mid_slider_w3lsagile">
		<div class="col-md-3 mid_slider_text">
			<h5>Some More Shoes</h5>
		</div>
		<div class="col-md-9 mid_slider_info">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1" class=""></li>
					<li data-target="#myCarousel" data-slide-to="2" class=""></li>
					<li data-target="#myCarousel" data-slide-to="3" class=""></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<div class="row">
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="images/g1.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="images/g2.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="images/g3.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="images/g4.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="row">
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="images/g5.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="images/g6.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="images/g2.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="images/g1.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="row">
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="images/g1.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="images/g2.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="images/g3.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="images/g4.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="row">
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="images/g1.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="images/g2.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="images/g3.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="images/g4.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="fa fa-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="fa fa-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
				<!-- The Modal -->

			</div>
		</div>

		

	<!-- /newsletter-->
	<?php 
	include('footer.php'); 
	?>
</body>

</html>