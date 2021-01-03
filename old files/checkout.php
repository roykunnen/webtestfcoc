
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Brontona Shoes</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Brontona Shoes ecommerce website">
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
	<link rel="stylesheet" type="text/css" href="css/checkout.css">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome-icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome-icons -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

</head>

<body>
    <!-- banner -->
    <?php 
        
        $PodInCart=(sizeof($_POST)-8)/5+1;
        
		
		?>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/minicart/3.0.5/minicart.min.js"></script>
		<script>
			alert(paypal.minicart.cart.items());
		</script>
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
				<div>
						<form action="#" method="post">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="display" value="1">
							<button class="top_shoe_cart top_nav_right" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
						</form>
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
					<li>Check Out</li>
				</ul>
			</div>
		</div>
		<!-- //banner_inner -->
	</div>

	<!-- //banner -->
    <!-- top Products -->
	<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			<div class="privacy about">
				<h3>Chec<span>kout</span></h3>

				<div class="checkout-right">
					
					<table class="timetable_sub">
						<thead>
							<tr>
								
								<th>Product</th>
								<th>Quantity</th>
								<th>Product Name</th>

								<th>Price</th>
								<th>Remove</th>
								<th>Add to basket</th>
							</tr>
						</thead>
						<tbody>
                        <?php
								
							
						$dbconn = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=postgres"); 

					   // make the query with: pg_query
					   
                        for ($i=1; $i<=$PodInCart; $i++)
                        {
                            $cont = "shoe_item_".$i."";
							$query = "SELECT quantityinstock,name,image FROM products where name ='{$_POST["$cont"]}'";
                            $result = pg_query($query);
							$arr = pg_fetch_all($result);
							
                            foreach($arr as $r)
                            {
                                echo '<tr class="rem'.$i.'">
                                
                                <td class="invert-image"><a href="single.php?name='.$r["name"].'"><img src="'.$r["image"].'" alt=" " ></a></td>
                                <td class="invert">
                                    <div class="quantity">
                                        <div class="quantity-select">
										<div class="entry value-minus">&nbsp;</div>
											<div class="entry value"><span class="quantity'.$i.'">'.$_POST["quantity_".$i.""].'</span></div>
											<div class="entry value-plus active">&nbsp;</div>

                                        </div>
                                    </div>
                                </td>
                                <td class="invert item'.$i.'"><b>'.$r["name"].'</b></td>
        
                                <td class="invert price'.$i.'"><b>€'.$_POST["amount_".$i.""].'</b></td>
                                <td class="invert">
                                    <div class="rem">
                                        <div class="'.$i.'"> <img src="./images/close_1.jpg"></div>
                                    </div>
        
                                </td>
							</tr>';
							
                            
                            }
                            
                
                        }
                        
                        ?>

							
							
						</tbody>
					</table>
					</div>
				<div class="checkout-left">
					<div class="col-md-4 checkout-left-basket">
                        <h4><a href="shop.php" style="color:white">Continue to shop</a></h4>
						<ul class="basket">
							<script>
								var total = 0;
								var rowCount = <?php echo round($PodInCart,0);?>;
								for(var i=1;i<=rowCount;i++)
								{
									var sum = $(".price"+i).eq(0).text().substr(1)*$(".quantity"+i).eq(0).text();
									total+=sum;
									document.write("<li>"+$(".item"+i).eq(0).text()+" <span class='sum"+i+"'> €"+Number((sum).toFixed(2))+" </span></li>");
								}
								document.write("<li>Total<span class='total'>€"+Number((total).toFixed(2)) +"</span></li>");
							</script>
                            
							
							
							
						</ul>
					</div>
					<div class="col-md-8 address_form">
						<h4>Add a new Details</h4>
						<form action="payment.php" method="post" class="creditly-card-form agileinfo_form">
							<section class="creditly-wrapper wrapper">
								<div class="information-wrapper">
									<div class="first-row form-group">
										<div class="controls">
											<label class="control-label">Full name: </label>
											<input class="billing-address-name form-control" type="text" name="name" placeholder="Full name">
										</div>
										<div class="card_number_grids">
											<div class="card_number_grid_left">
												<div class="controls">
													<label class="control-label">Mobile number:</label>
													<input class="form-control" type="text" placeholder="Mobile number">
												</div>
											</div>
											<div class="card_number_grid_right">
												<div class="controls">
													<label class="control-label">Landmark: </label>
													<input class="form-control" type="text" placeholder="Landmark">
												</div>
											</div>
											<div class="clear"> </div>
										</div>
										<div class="controls">
											<label class="control-label">Town/City: </label>
											<input class="form-control" type="text" placeholder="Town/City">
										</div>
										<div class="controls">
											<label class="control-label">Address type: </label>
											<select class="form-control option-w3ls">
																							<option>Office</option>
																							<option>Home</option>
																							<option>Commercial</option>
							
																					</select>
										</div>
									</div>
									<button class="submit check_out">Delivery to this Address</button>
								</div>
							</section>
						</form>
						<div class="checkout-right-basket">
							<a href="payment.php">Make a Payment </a>
						</div>
					</div>

					<div class="clearfix"> </div>


					<div class="clearfix"></div>
				</div>
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
				<h3>Sign up for our Newsletter !</h3>
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
				<h2><a href="index.php"><span>B</span>rontona Shoes </a></h2>
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
										<p>Zandpoortvest 60, 2800 Mechelen, Belgium

										</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<div class="col-md-3 sign-gd flickr-post">
							<h4>Flickr <span>Posts</span></h4>
							<ul>
								<li><a href="single.html"><img src="images/t1.jpg" alt=" " class="img-responsive" /></a></li>
								<li><a href="single.html"><img src="images/t2.jpg" alt=" " class="img-responsive" /></a></li>
								<li><a href="single.html"><img src="images/t3.jpg" alt=" " class="img-responsive" /></a></li>
								<li><a href="single.html"><img src="images/t4.jpg" alt=" " class="img-responsive" /></a></li>
								<li><a href="single.html"><img src="images/t1.jpg" alt=" " class="img-responsive" /></a></li>
								<li><a href="single.html"><img src="images/t2.jpg" alt=" " class="img-responsive" /></a></li>
								<li><a href="single.html"><img src="images/t3.jpg" alt=" " class="img-responsive" /></a></li>
								<li><a href="single.html"><img src="images/t2.jpg" alt=" " class="img-responsive" /></a></li>
								<li><a href="single.html"><img src="images/t4.jpg" alt=" " class="img-responsive" /></a></li>
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

				for (i = 0, len = items.length; i < len; i++) {}
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
	<!--quantity-->
	<script>
		$('.value-plus').on('click', function () {
			
			var divUpd = $(this).parent().find('span'),
				newVal = parseInt(divUpd.text(), 10) + 1;
			divUpd.text(newVal);
			var total = 0;
			var rowCount = <?php echo round($PodInCart,0);?>;
			for(var i=1;i<=rowCount;i++)
			{
					var sum = $(".price"+i).eq(0).text().substr(1)*$(".quantity"+i).eq(0).text();
					total+=sum;
					$(".sum"+i).replaceWith("<span class='sum"+i+"'>€"+Number((sum).toFixed(2))+"</span>");
			}
			
			$(".total").replaceWith("<span class='total'>€"+Number((total).toFixed(2))+"</span>");
			
							

			
		});

		$('.value-minus').on('click', function () {
			var divUpd = $(this).parent().find('span'),
				newVal = parseInt(divUpd.text(), 10) - 1;
			if (newVal >= 1) divUpd.text(newVal);
			var total = 0;
			var rowCount = <?php echo round($PodInCart,0);?>;
			for(var i=1;i<=rowCount;i++)
			{
					var sum = $(".price"+i).eq(0).text().substr(1)*$(".quantity"+i).eq(0).text();
					total+=sum;
					$(".sum"+i).replaceWith("<span class='sum"+i+"'>€"+Number((sum).toFixed(2))+"</span>");
			}
			
			$(".total").replaceWith("<span class='total'>€"+Number((total).toFixed(2))+"</span>");
		});
		
	</script>
	<!--quantity-->
	<script>
		$(document).ready(function (c) {
			var rowCount = <?php echo round($PodInCart,0);?>;
            for(var i=1;i<=rowCount;i++)
            {
                $('.'+i).on('click', function (c) {
					$(this).closest('tr').remove();
					var shoeItem = $(this).closest('tr').find("b").eq(0).text();
					$("li:contains("+shoeItem+")").remove();
					var total = 0;
				for(var j=1;j<=rowCount;j++)
				{
					var sum = $(".price"+j).eq(0).text().substr(1)*$(".quantity"+j).eq(0).text();
					total+=sum;
					$(".sum"+j).replaceWith("<span class='sum"+j+"'>€"+Number((sum).toFixed(2))+"</span>");
				}
			
			$(".total").replaceWith("<span class='total'>€"+Number((total).toFixed(2))+"</span>");
										
				
			});
            }
			
		});
	</script>
	

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

	<?php 
	include('footer.php'); 
	?>
</body>

</html>