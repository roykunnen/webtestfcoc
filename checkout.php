<?php
	session_start();
?>
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
	<div style = "background-color:white" id="home">
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
		<div class="clearfix">

		</div>
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
								
							
								$servername = "localhost";
								$username = "root";
								$password = "";
								$dbname = "forcryingoutcloud";
								
								// Create connection
								$conn = new mysqli($servername, $username, $password, $dbname);
								// Check connection
								if ($conn->connect_error) {
									  die("Connection failed: " . $conn->connect_error);
								} 

					
                        for ($i=1; $i<=$PodInCart; $i++)
                        {
                            $cont = "shoe_item_".$i."";
							$query = "SELECT quantityinstock,name,image FROM products where name ='{$_POST["$cont"]}'";
                            $result = $conn->query($query);
							if ($result->num_rows > 0)
							{
				  
					  		while($row = $result->fetch_assoc())
					  		{
                                echo '<tr class="rem'.$i.'">
                                
                                <td class="invert-image"><a href="single.php?name='.$row["name"].'"><img src="'.$row["image"].'" alt=" " ></a></td>
                                <td class="invert">
                                    <div class="quantity">
                                        <div class="quantity-select">
										<div class="entry value-minus">&nbsp;</div>
											<div class="entry value"><span class="quantity'.$i.'">'.$_POST["quantity_".$i.""].'</span></div>
											<div class="entry value-plus active">&nbsp;</div>

                                        </div>
                                    </div>
                                </td>
                                <td class="invert item'.$i.'"><b>'.$row["name"].'</b></td>
        
                                <td class="invert price'.$i.'"><b>€'.$_POST["amount_".$i.""].'</b></td>
                                <td class="invert">
                                    <div class="rem">
                                        <div class="'.$i.'"> <img src="./images/close_1.jpg"></div>
                                    </div>
        
                                </td>
							</tr>';
							
                            
                            }
                            
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
													<label class="control-label">Province: </label>
													<input class="form-control" type="text" placeholder="Province">
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
							<a href="payment.php" onclick = "Orderinfo()">Make a Payment </a>
							<script>
                        function Orderinfo(){
                            var date = date("Y/m/d");
                             
                                    $.ajax({
                                        url: "http://localhost:15743/api/accounts/100",
                                        method: "POST",
                                        data: "{\"orderid\":\"100\",\"customerid\":\"100\",\"supplierid\":\"string\",\"productid\":\"string\",\"totalprice\":$211,00,\"discount\":0,\"orderdate\":\""+date+"\"}", //Verander ID en Email nog - TIJDELIJK!!
                                        contentType: "application/json-patch+json"
                                    }).done(function () {
                                        console.log("Order posted");
                                    }).fail(function(error) {
                                        console.log(error);
                                    });
                                }
                                
                        
                        </script>
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

			
	<?php 
	include('footer.php'); 
	?>
</body>

</html>