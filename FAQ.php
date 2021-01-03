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
					include("navigation.php");
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
					<li>FAQ</li>
				</ul>
			</div>
		</div>
		<!-- //banner_inner -->
	</div>
    <div>
    <div class="mid_services">
		<div id = "faq">
		<div class="col-md-6 according_inner_grids">
			<h3 class="heading two">FAQ</h3>
			<div class="according_info">
				<div class="panel-group about_panel" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title asd">
								<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true"
								    aria-controls="collapseOne">
							  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Ordering
							</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"  aria-labelledby="headingOne">
							<div class="panel-body panel_text" >
							<h4><b>Do I need an account to place an online order? <?php echo $_SESSION["mail"]; ?></b></h4>
                            <p>You can easily complete your online order using your own account. If you don't have an account yet, you can choose to continue as a guest or you can easily create an account. This way you can enjoy all our advantages.</p>
							<h4><b>How can I order?</b></h4>
                            <p>If you wish to place your order, you need to go through a few steps before we receive your order.
                            <p>STEP 1: Delivery. Choose your favorite delivery method in your shopping cart: at home or at work, in a Brontona store or at bpost. If necessary, complete your details in the next step.</p>
                            <p>STEP 2: personal data. Fill in your personal information, so we can contact you about your order.</p>
                            <p>STEP 3: payment method. Choose a payment method: Bancontact, Visa, MasterCard or Paypal.</p>


                            </div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
							<h4 class="panel-title asd">
								<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
								    aria-controls="collapseTwo">
							  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Returns
							</a>
							</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="panel-body panel_text">
                            <h4><b>Did you order the wrong item or do you want another item anyway?</b></h4>
                            <p>Please contact our customer care as soon as possible.
                                Have you not yet received a shipping confirmation? Then we will cancel your order, so you can place another order.
                                Have you already received a shipping confirmation? Then return your package as soon as you have received it and place a new order.</p>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingThree">
							<h4 class="panel-title asd">
								<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false"
								    aria-controls="collapseThree">
							  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Deliveries
							</a>
							</h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="panel-body panel_text">
                            <h4><b>Where can I have my parcel delivered? <?php echo $_SESSION['emaillogin']; ?></b></h4>
                            <p>Delivery at home or at work
                            For national shipments we work together with bpost as shipping partner.
                            During the day we deliver between 8h and 17h.
                            If you choose an evening delivery, your parcel will be delivered between 18h and 22h. You pay € 3 extra for this.
                            Would you like a delivery on Saturday? Then you pay € 1,25 extra and your package will be delivered between 8h and 17h.</p>
							</div>
						</div>
					</div>
                    <div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingFive">
							<h4 class="panel-title asd">
								<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false"
								    aria-controls="collapseFive">
							  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Payments
							</a>
							</h4>
						</div>
						<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
							<div class="panel-body panel_text">
                            <h4><b>How can I pay?</b></h4>
                            <p>- Payment with debit card: Bancontact 
                            You can choose to make your payment with your Bancontact card (card reader required) or via the Bancontact app.</p>
                            <p>- Payment by credit card: Visa or MasterCard
                            This payment method also requires the verification code of the card. This check verifies that your card is not being used by an unauthorized person. If you choose to pay by credit card, the amount will be debited from your card immediately after your payment confirmation.</p>
                            <p>- Payment with PayPal</p>
							</div>
						</div>
				</div>
	</div>
			</div>

</div>
    </div>
	
    <?php include('footer.php') 
    ?>
</body>

</html>