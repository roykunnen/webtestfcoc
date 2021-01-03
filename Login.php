<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
<!--===============================================================================================-->
</head>
<body>
    
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-26">
						Login at Brontona
					</span>
					

<form method = "post">
					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="mail" id = "email" >
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="p" id ="pass" >
						<span class="focus-input100" data-placeholder="Password"></span>
                    </div>
					<span id="error"></span>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<input class="login100-form-btn" value="Login" id = "loginbutton" type = "submit">
							
						</div>
					</div>
					
</form>
	
					<div class="text-center p-t-115">
						<span class="txt1">
							New at Brontona?				
						</span>

						<a class="txt2" href="Register.php">
							Register <br>
						</a>
					
					 
						<span class="txt1 text-center p-t-115">
							Back to home page?
						</span>

						<a class="txt2" href="index.php">
							Click here
						</a>
					
					</div>
				</form>
			</div>
		</div>
	</div>
	


	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/mainregister.js"></script>
	<script>
	function redirect() {
         window.location.href="PersonalAccount.php";
	}
	
	$('form.login100-form').submit(function(event) {
		
    event.preventDefault();
	var email1 = $(this).serializeArray()[0].value;
    console.log(email1);
    var pass3 = $(this).serializeArray()[1].value;
	console.log(pass3);
	
	  
    $.get("http://localhost:15743/api/accounts")
    .done(function(result)   {
		
        for(var i=0;i<result.length;i++){
        if(email1 == result[i].email && pass3 == result[i].password){
			
			redirect();
        }
        else{
            document.getElementById("error").style.color = "red";
			document.getElementById("error").innerHTML = "Email or password is incorrect or does not match";
        }
	   }
	   
    })
    
});
</script>

</body>
</html>