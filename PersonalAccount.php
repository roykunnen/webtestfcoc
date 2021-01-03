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

<body onload="Fill()">
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
				<!-- cart details -->
				
					
				<form action="#" method="post">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="display" value="1">
				</form>
					
				
			</div>
		</div>
		<!-- //cart details -->
		<!-- search -->
		<div class="search_w3ls_agileinfo">
		</div>
		<!-- //search -->
		<div class="clearfix"></div>
		<!-- /banner_inner -->
		<!-- //banner_inner -->
	</div>

	<!-- //banner -->
	<!-- top Products -->
    <script>
        function Fill(){
            $.get("http://localhost:15743/api/accounts/100") //Verander ID nog - TIJDELIJK!!
            .done(function(result){
                var email = result.email;
                var password = result.password;

                $("#email").val(email);
                $("#pwd").val(password);
            });
        }
    </script>

	<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			<h3 class="head">Personal account</h3>
			<div class="inner_section_w3ls">
				<div class="col-md-7 contact_grid_right">
					<h6 style = "margin-left: -15px;">Email</h6>
					<div>
                        <input type="email" id="email" name="email" readonly><br><br>
					</div>
					<br>
					
                    <div id="pwdDIV">
					<h6 çstyle = "margin-left: -15px;">Password</h6>
					<div>
                    <input type="Password" id="pwd" name="pwd" readonly> <br><br>
                        <button onclick="ToonWachtwoord()">Show Password </button><br> <br>
                        <button onclick="myFunction()">Change Password</button>
                        <script>
                            function ToonWachtwoord() {
                            var x = document.getElementById("pwd");
                            if (x.type === "password") {
                                x.type = "text";
                            } else {
                                x.type = "password";
                            }
                            }
                        </script>
                    </div>
					</div>

                    <div id="ChangePassword" style="display: none">
                        <h6>Enter new password</h6>
                        <input type="Password" id="newPWD1" name="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title = "Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required> <br><br>
                        <h6>Confirm new password</h6>
                        <input type="Password" id="newPWD2" name="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title = "Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required> <br>
                        <br>
                        <button onclick="TrySubmit()">Submit changed password</button>
                        <script>
                        function TrySubmit(){
                            var PWD1 = document.getElementById("newPWD1").value;
							var PWD2 = document.getElementById("newPWD2").value;
							var email = document.getElementById("email").value;
                            if(PWD1 == PWD2){
                                if(/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/.test(PWD1) && PWD1 == PWD2){
                                    $.ajax({
                                        url: "http://localhost:15743/api/accounts/100",
                                        method: "PUT",
                                        data: "{\"accountid\":\"100\",\"email\":\""+email+"\",\"password\":\""+PWD1+"\"}", //Verander ID en Email nog - TIJDELIJK!!
                                        contentType: "application/json-patch+json"
                                    }).done(function () {
                                        console.log("Account Posted");
                                    }).fail(function(error) {
                                        console.log(error);
                                    });
									alert("Password changed")
									Fill();
									myFunction();
                                }
                                else if(!(/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/.test(PWD1)) && PWD1== PWD2){
                                    alert("Password must contain at least one number, one uppercase and lowercase letter, and at least 8 or more characters!")
                                    
                                }
                                else{
                                    alert("Error!")
                                }

                            }
                            else{
                                alert("Passwords do not match.")
                            }
                        }
                        </script>
                    </div>

                    <script>
                    function myFunction() {
					var x = document.getElementById("ChangePassword");
                    if (x.style.display === "none") {
                        x.style.display = "block";
                    } else {
                        x.style.display = "none";
                    }
                    

                    var y = document.getElementById("pwdDIV");
                    if (y.style.display === "none") {
                        y.style.display = "block";
                    } else {
                        y.style.display = "none";
                    }
                    }
                    </script>
					<br><br>
                    <h6 style = "margin-left: -15px;">Personal Orders</h6>
                    <div>
                    <button onclick="ToonOrders()" >Show my order(s)</button> <br><br>   
                    <table id="customers" style="display: none">
                        <tr>
                            <th>OrderId </th>
                            <th>Price </th>
                            <th>Date of purchase </th>
						</tr>
						<tr id=>
							<td>100</td>
                            <td>€211,00</td>
							<td>13/12/2020</td>
							<td><button onclick="VerwijderOrder()">Delete</button></td>
                        <tr id="Order"></tr>
                    </table>
                    <script>
                        function ToonOrders(){
                            $.get("http://localhost:15743/api/orders/100")
                            .done(function(result){
                                var orderID = result.orderid;
                                var totalPrice = result.totalprice;
                                var orderdate = result.orderdate;
                                document.getElementById("Order").innerHTML=
                                "<td>"+orderID+"</td><td>"+totalPrice+"</td><td>"+orderdate+"</td>";
                            });
                            var x = document.getElementById("customers");
                            if (x.style.display === "none") {
                                x.style.display = "block";
                            }
							else{
                                x.style.display = "none";
                   			}
                        }

			 function VerwijderOrder(){
							var ID = 1;
							$.ajax({
                                url: "http://localhost:15743/api/orders"+ID,
                                method: "DELETE",
                                data: "", //moet nog worden meegegven --> delete werkt nog niet?
                                contentType: "application/json-patch+json"
                                }).done(function () {
                                    console.log("Order Deleted");
                                }).fail(function(error) {
                                    console.log(error);
                            });

							//hier code om de gegeven tr dan te refreshen.							
						}
                    </script>
					<style>
                    #customers {
                    font-family: Arial, Helvetica, sans-serif;
                    border-collapse: collapse;
                    width: 100%;
                    }

                    #customers td, #customers th {
                    border: 1px solid #ddd;
                    padding: 8px;
                    }

                    #customers tr:nth-child(even){background-color: #f2f2f2;}

                    #customers tr:hover {background-color: #ddd;}

                    #customers th {
                    padding-top: 12px;
                    padding-bottom: 12px;
                    text-align: left;
                    background-color: #fb383b;
                    color: white;
                    }
                    </style>
				</div>
				<div class="clearfix"> </div>

			</div>

			<div class="clearfix"></div>

		</div>
	</div>
	<!-- //newsletter-->
	<!-- footer -->
	<!-- //footer -->

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
	<!-- script for responsive tabs -->
	<script src="js/easy-responsive-tabs.js"></script>
	<script>
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>
	<!--search-bar-->
	<script src="js/search.js"></script>
	<!--//search-bar-->
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
