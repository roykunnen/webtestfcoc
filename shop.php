<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
	<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome-icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome-icons -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/apicalls.js"></script>
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
					<li><a href="index.php">Home</a><i>|</i></li>
					<li>Shop</li>
				</ul>
			</div>
		</div>
		<!-- //banner_inner -->
	</div>

	<!-- //banner -->
	<!-- top Products -->
	<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			<!-- tittle heading -->

			<!-- //tittle heading -->
			<!-- product left -->
			<div class="side-bar col-md-3">
				<div class="search-hotel">
					<h3 class="agileits-sear-head">Search Here</h3>
					<form action="#" method="post" class="searchshop">
						<input type="search" placeholder="Product name..." name="search">
						<input type="submit" value=" ">
						<?php
						/*
				$servername = "localhost";
				$username = "root";
				$password = "";
				
				// Create connection
				$conn = new mysqli($servername, $username, $password);
				
				// Check connection
				if ($conn->connect_error) {
				  die("Connection failed: " . $conn->connect_error);
				}
				echo "Connected successfully";
				$query = 'SELECT distinct category FROM products'; 
				
            
               $result = pg_query($query);
               $arr = pg_fetch_all($result);
			   $count=0;
			   echo '<div class="left-side">
			   <h3 class="agileits-sear-head">Category</h3><form action="shop.php" method="post"><select name="category"><option value="" disabled selected>Select your option</option>';
			   
			   foreach($arr as $r)
			   {
				   echo '<option value="'.$r['category'].'">'.$r['category'].'</option>';
			   }
			   echo '</select>
			   </div>';
			   //material
			   $query = 'SELECT distinct material FROM products'; 
				
            
               $result = pg_query($query);
               $arr = pg_fetch_all($result);
			   $count=0;
			   echo '<div class="left-side">
			   <h3 class="agileits-sear-head">material</h3><select name="material"><option value="" disabled selected>Select your option</option>';
			   
			   foreach($arr as $r)
			   {
				   echo '<option value="'.$r['material'].'">'.$r['material'].'</option>';
			   }
			   echo '</select>
			   </div>';

			   //size
			   $query = 'SELECT distinct size FROM products order by size asc'; 
				
            
               $result = pg_query($query);
               $arr = pg_fetch_all($result);
			   $count=0;
			   echo '<div class="left-side">
			   <h3 class="agileits-sear-head">size</h3><select name="size"><option value="" disabled selected>Select your option</option>';
			   
			   foreach($arr as $r)
			   {
				   echo '<option value="'.$r['size'].'">'.$r['size'].'</option>';
			   }
			   echo '</select>
			   </div>';
			   pg_close($dbconn);  */

				?>
						
					
				</div>
				<!-- price range
				<div class="range">
					<h3 class="agileits-sear-head">Price range</h3>
					<ul class="dropdown-menu6">
						<li>

							<div id="slider-range"></div>
							<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
						</li>
					</ul>
				</div>
				 //price range -->
				<!--preference -->
				
				<!-- // preference -->
				<!-- discounts -->
				
				
				<!-- //discounts -->
				<!-- reviews -->
				<br>
				<h3 class="agileits-sear-head">Sorteren op</h3>
				<div class="customer-rev left-side">
						<select name="sort"> 
							<option value="Relevantie">Relevantie</option>
							<option value="Prijs: Laag - Hoog">Prijs: Laag - Hoog</option>
							<option value="Prijs: Hoog - Laag">Prijs: Hoog - Laag</option>
							<option value="Best beoordeeld">Best beoordeeld</option>
							<option value="Best verkocht">Best verkocht</option>
						</select>
			</form>
					
				</div>
				<!-- //reviews -->
                <!-- deals -->
                
				<div class="deal-leftmk left-side">
                <h3 class="agileits-sear-head" id="specialdeals">Special Deals</h3>
				<div class="special-sec1">
				<div class="col-xs-4 img-deals">
				<img class="special_deals_image" alt="">
				</div>
				<div class="col-xs-8 img-deal1"><h3 class="special_deals_product_name"></h3>
				<a  class="special_deals_link_single"></a></div>
				<div class="clearfix"></div>
				</div>
				<div class="special-sec1">
				<div class="col-xs-4 img-deals">
				<img class="special_deals_image" alt="">
				</div><div class="col-xs-8 img-deal1"><h3 class="special_deals_product_name"></h3>
				<a  class="special_deals_link_single" ></a></div><div class="clearfix"></div></div>
				<div class="special-sec1">
				<div class="col-xs-4 img-deals">
				<img class="special_deals_image" alt="">
				</div><div class="col-xs-8 img-deal1"><h3 class="special_deals_product_name"></h3>
				<a  class="special_deals_link_single" ></a></div><div class="clearfix"></div></div>
				<div class="special-sec1">
				<div class="col-xs-4 img-deals">
				<img class="special_deals_image" alt="">
				</div><div class="col-xs-8 img-deal1"><h3 class="special_deals_product_name"></h3>
				<a  class="special_deals_link_single" ></a></div><div class="clearfix"></div></div>
				<div class="special-sec1">
				<div class="col-xs-4 img-deals">
				<img class="special_deals_image"  alt="">
				</div><div class="col-xs-8 img-deal1"><h3 class="special_deals_product_name"></h3>
				<a  class="special_deals_link_single"></a></div><div class="clearfix"></div></div>
				
					
				</div>
				<!-- //deals -->

			</div>
			<!-- //product left -->
			<!-- product right -->
			<div class="left-ads-display col-md-9">
				<div class="wrapper_top_shop">
					<div class="col-md-6 shop_left">
						<img src="images/banner3.jpg" alt="">
						<h6>40% off</h6>
					</div>
					<div class="col-md-6 shop_right">
						<img src="images/banner2.jpg" alt="">
						<h6>50% off</h6>
					</div>
					<div class="clearfix"></div>
					<!-- product-sec1 -->
					<p id='no-products'></p>
					<div class="product-sec1">
					<div class="col-md-4 product-men">
					<div class="product-shoe-info shoe">
					<div class="men-pro-item">
					<div class="men-thumb-item">
					<img class="image" alt="">
					<div class="men-cart-pro">
					<div class="inner-men-cart-pro">
					<a class="link-product-add-cart link_single_1">Quick View</a></div></div>
					<span class="product-new-top">New</div><div class="item-info-product">
					<h4><a class="link_single_2"></a></h4><div class="info-product-price">
					<div class="grid_meta">
					<div class="product_price">
					<div class="grid-price "><span class="money"></span></div></div>
					<ul class="stars">
					</ul>
					</div>
					
						
											

										<div class="occasion-cart">
					<div class="shoe single-item single_page_b">
						<form action="#" method="post">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">
							<input type="hidden" class="shoe_item" name="shoe_item" value="">
							<input type="hidden" class="amount" name="amount" value="">
							<input type="hidden" name="currency_code" value="EUR" />
							<input type="submit" name="submit" value="Add to cart" class="button add">
							<a href="#" data-toggle="modal" data-target="#myModal1"></a>
						</form>
						

					</div>

				</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 product-men">
					<div class="product-shoe-info shoe">
					<div class="men-pro-item">
					<div class="men-thumb-item">
					<img class="image" alt="">
					<div class="men-cart-pro">
					<div class="inner-men-cart-pro">
					<a class="link-product-add-cart link_single_1">Quick View</a></div></div>
					<span class="product-new-top">New</div><div class="item-info-product">
					<h4><a class="link_single_2"></a></h4><div class="info-product-price">
					<div class="grid_meta">
					<div class="product_price">
					<div class="grid-price "><span class="money"></span></div></div>
					<ul class="stars">
					</ul>
					</div>
					
						
											

										<div class="occasion-cart">
					<div class="shoe single-item single_page_b">
						<form action="#" method="post">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">
							<input type="hidden" class="shoe_item" name="shoe_item" value="">
							<input type="hidden" class="amount" name="amount" value="">
							<input type="hidden" name="currency_code" value="EUR" />
							<input type="submit" name="submit" value="Add to cart" class="button add">
							<a href="#" data-toggle="modal" data-target="#myModal1"></a>
						</form>
						

					</div>

				</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 product-men">
					<div class="product-shoe-info shoe">
					<div class="men-pro-item">
					<div class="men-thumb-item">
					<img class="image" alt="">
					<div class="men-cart-pro">
					<div class="inner-men-cart-pro">
					<a class="link-product-add-cart link_single_1">Quick View</a></div></div>
					<span class="product-new-top">New</div><div class="item-info-product">
					<h4><a class="link_single_2"></a></h4><div class="info-product-price">
					<div class="grid_meta">
					<div class="product_price">
					<div class="grid-price "><span class="money"></span></div></div>
					<ul class="stars">
					</ul>
					</div>
					
						
											

										<div class="occasion-cart">
					<div class="shoe single-item single_page_b">
						<form action="#" method="post">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">
							<input type="hidden" class="shoe_item" name="shoe_item" value="">
							<input type="hidden" class="amount" name="amount" value="">
							<input type="hidden" name="currency_code" value="EUR" />
							<input type="submit" name="submit" value="Add to cart" class="button add">
							<a href="#" data-toggle="modal" data-target="#myModal1"></a>
						</form>
						

					</div>

				</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 product-men">
					<div class="product-shoe-info shoe">
					<div class="men-pro-item">
					<div class="men-thumb-item">
					<img class="image" alt="">
					<div class="men-cart-pro">
					<div class="inner-men-cart-pro">
					<a class="link-product-add-cart link_single_1">Quick View</a></div></div>
					<span class="product-new-top">New</div><div class="item-info-product">
					<h4><a class="link_single_2"></a></h4><div class="info-product-price">
					<div class="grid_meta">
					<div class="product_price">
					<div class="grid-price "><span class="money"></span></div></div>
					<ul class="stars">
					</ul>
					</div>
					
						
											

										<div class="occasion-cart">
					<div class="shoe single-item single_page_b">
						<form action="#" method="post">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">
							<input type="hidden" class="shoe_item" name="shoe_item" value="">
							<input type="hidden" class="amount" name="amount" value="">
							<input type="hidden" name="currency_code" value="EUR" />
							<input type="submit" name="submit" value="Add to cart" class="button add">
							<a href="#" data-toggle="modal" data-target="#myModal1"></a>
						</form>
						

					</div>

				</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 product-men">
					<div class="product-shoe-info shoe">
					<div class="men-pro-item">
					<div class="men-thumb-item">
					<img class="image" alt="">
					<div class="men-cart-pro">
					<div class="inner-men-cart-pro">
					<a class="link-product-add-cart link_single_1">Quick View</a></div></div>
					<span class="product-new-top">New</div><div class="item-info-product">
					<h4><a class="link_single_2"></a></h4><div class="info-product-price">
					<div class="grid_meta">
					<div class="product_price">
					<div class="grid-price "><span class="money"></span></div></div>
					<ul class="stars">
					</ul>
					</div>
					
						
											

										<div class="occasion-cart">
					<div class="shoe single-item single_page_b">
						<form action="#" method="post">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">
							<input type="hidden" class="shoe_item" name="shoe_item" value="">
							<input type="hidden" class="amount" name="amount" value="">
							<input type="hidden" name="currency_code" value="EUR" />
							<input type="submit" name="submit" value="Add to cart" class="button add">
							<a href="#" data-toggle="modal" data-target="#myModal1"></a>
						</form>
						

					</div>

				</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 product-men">
					<div class="product-shoe-info shoe">
					<div class="men-pro-item">
					<div class="men-thumb-item">
					<img class="image" alt="">
					<div class="men-cart-pro">
					<div class="inner-men-cart-pro">
					<a class="link-product-add-cart link_single_1">Quick View</a></div></div>
					<span class="product-new-top">New</div><div class="item-info-product">
					<h4><a class="link_single_2"></a></h4><div class="info-product-price">
					<div class="grid_meta">
					<div class="product_price">
					<div class="grid-price "><span class="money"></span></div></div>
					<ul class="stars">
					</ul>
					</div>
					
						
											

										<div class="occasion-cart">
					<div class="shoe single-item single_page_b">
						<form action="#" method="post">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">
							<input type="hidden" class="shoe_item" name="shoe_item" value="">
							<input type="hidden" class="amount" name="amount" value="">
							<input type="hidden" name="currency_code" value="EUR" />
							<input type="submit" name="submit" value="Add to cart" class="button add">
							<a href="#" data-toggle="modal" data-target="#myModal1"></a>
						</form>
						

					</div>

				</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 product-men">
					<div class="product-shoe-info shoe">
					<div class="men-pro-item">
					<div class="men-thumb-item">
					<img class="image" alt="">
					<div class="men-cart-pro">
					<div class="inner-men-cart-pro">
					<a class="link-product-add-cart link_single_1">Quick View</a></div></div>
					<span class="product-new-top">New</div><div class="item-info-product">
					<h4><a class="link_single_2"></a></h4><div class="info-product-price">
					<div class="grid_meta">
					<div class="product_price">
					<div class="grid-price "><span class="money"></span></div></div>
					<ul class="stars">
					</ul>
					</div>
					
						
											

										<div class="occasion-cart">
					<div class="shoe single-item single_page_b">
						<form action="#" method="post">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">
							<input type="hidden" class="shoe_item" name="shoe_item" value="">
							<input type="hidden" class="amount" name="amount" value="">
							<input type="hidden" name="currency_code" value="EUR" />
							<input type="submit" name="submit" value="Add to cart" class="button add">
							<a href="#" data-toggle="modal" data-target="#myModal1"></a>
						</form>
						

					</div>

				</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 product-men">
					<div class="product-shoe-info shoe">
					<div class="men-pro-item">
					<div class="men-thumb-item">
					<img class="image" alt="">
					<div class="men-cart-pro">
					<div class="inner-men-cart-pro">
					<a class="link-product-add-cart link_single_1">Quick View</a></div></div>
					<span class="product-new-top">New</div><div class="item-info-product">
					<h4><a class="link_single_2"></a></h4><div class="info-product-price">
					<div class="grid_meta">
					<div class="product_price">
					<div class="grid-price "><span class="money"></span></div></div>
					<ul class="stars">
					</ul>
					</div>
					
						
											

										<div class="occasion-cart">
					<div class="shoe single-item single_page_b">
						<form action="#" method="post">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">
							<input type="hidden" class="shoe_item" name="shoe_item" value="">
							<input type="hidden" class="amount" name="amount" value="">
							<input type="hidden" name="currency_code" value="EUR" />
							<input type="submit" name="submit" value="Add to cart" class="button add">
							<a href="#" data-toggle="modal" data-target="#myModal1"></a>
						</form>
						

					</div>

				</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 product-men">
					<div class="product-shoe-info shoe">
					<div class="men-pro-item">
					<div class="men-thumb-item">
					<img class="image" alt="">
					<div class="men-cart-pro">
					<div class="inner-men-cart-pro">
					<a class="link-product-add-cart link_single_1">Quick View</a></div></div>
					<span class="product-new-top">New</div><div class="item-info-product">
					<h4><a class="link_single_2"></a></h4><div class="info-product-price">
					<div class="grid_meta">
					<div class="product_price">
					<div class="grid-price "><span class="money"></span></div></div>
					<ul class="stars">
					</ul>
					</div>
					
						
											

										<div class="occasion-cart">
					<div class="shoe single-item single_page_b">
						<form action="#" method="post">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">
							<input type="hidden" class="shoe_item" name="shoe_item" value="">
							<input type="hidden" class="amount" name="amount" value="">
							<input type="hidden" name="currency_code" value="EUR" />
							<input type="submit" name="submit" value="Add to cart" class="button add">
							<a href="#" data-toggle="modal" data-target="#myModal1"></a>
						</form>
						

					</div>

				</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
					
					
						<!-- //mens -->
						<div class="clearfix"></div>

					</div>

					<!-- //product-sec1 -->
					<div class="col-md-6 shop_left shp">
						<img src="images/banner4.jpg" alt="">
						<h6>21% off</h6>
					</div>
					<div class="col-md-6 shop_right shp">
						<img src="images/banner1.jpg" alt="">
						<h6>31% off</h6>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //top products -->
	<div class="mid_slider_w3lsagile">
		<div class="col-md-3 mid_slider_text">
			<h5>Some More Shoes</h5>
		</div>
		<div class="col-md-9 mid_slider_info">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class=""></li>
					<li data-target="#myCarousel" data-slide-to="1" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="2" class=""></li>
					<li data-target="#myCarousel" data-slide-to="3" class=""></li>
				</ol>
				<div class="carousel-inner" role="listbox">
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
					<div class="item active">
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

		<div class="clearfix"> </div>
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

		<div class="clearfix"></div>
	</div>
	<!-- //newsletter-->
	<!-- footer -->
	<div class="footer_agileinfo_w3">
		<div class="footer_inner_info_w3ls_agileits">
			<div class="col-md-3 footer-left">
			<h2><a href="index.html"><span>B</span>rontona Shoes </a></h2>
				<p></p>
				<ul class="social-nav model-3d-0 footer-social social two">
					<li>
						<a href="#" class="facebook">
							<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="twitter">
							<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="instagram">
							<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="pinterest">
							<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-md-9 footer-right">
				<div class="sign-grds">
					<div class="col-md-4 sign-gd">
						<h4>Our <span>Information</span> </h4>
						
					<?php
					include_once("navigation.php");
					?>
					
					</div>

					<div class="col-md-5 sign-gd-two">
						<h4>Store <span>Information</span></h4>
						<div class="address">
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Phone Number</h6>
									<p>019 22 58 65</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Email Address</h6>
									<p>Email :<a href="mailto:example@email.com">Brontona.Shoes@Brontonashoes.net</a></p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-map-marker" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Location</h6>
									<p>Guido Gezellelaan 4, 2800 Mechelen, Belgium

									</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
					<div class="col-md-3 sign-gd flickr-post">
						<h4><span>De homies</span></h4>
						<ul>
							<img src = "images/tristan.jpg" width = "200px" height = "200px">
							<img src = "images/sven.jpg" width = "200px" height = "200px">
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>

			<p class="copy-right-w3ls-agileits">&copy 2020 Brontona Shoes. All rights reserved!</p>
		</div>
	</div>
	</div>
	<!-- //footer -->
<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- //js -->
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
		shoe.render();

		shoe.cart.on('shoe_checkout', function (evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();
				var arr = "";
				//localStorage.setItem('shoe_item', JSON.stringify(items));
				for (i = 0, len = items.length; i < len; i++) {
					
				}
			}
		});
	</script>
	<!-- //cart-js -->
	<!-- /nav -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/demo1.js"></script>
	<!-- //nav -->
	<!--search-bar-->
	<script src="js/search.js"></script>
	<!--//search-bar-->
	<!-- price range (top products) -->
	<script src="js/jquery-ui.js"></script>
	<script>
		//<![CDATA[ 
		$(window).load(function () {
			$("#slider-range").slider({
				range: true,
				min: 0,
				max: 9000,
				values: [50, 6000],
				slide: function (event, ui) {
					$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
				}
			});
			$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

		}); //]]>
	</script>
	<!-- //price range (top products) -->

	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smoth-scrolling -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>

</html>