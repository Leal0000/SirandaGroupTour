<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V7</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?=base_url();?>assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter" >
		<div class="container-login100"style="background-image: radial-gradient(circle at 27.59% 1.94%, #e6ff62 0, #c8ff6d 10%, #a7ff78 20%, #83ff83 30%, #58fb8c 40%, #0ced93 50%, #00de99 60%, #00d19f 70%, #00c6a5 80%, #00bdac 90%, #00b6b4 100%); ">
			<div class="wrap-login100 p-t-90 p-b-30">
				<form class="login100-form validate-form" method="POST" action="<?=base_url();?>index.php/Welcome/login" id="formlogin">
					<span class="login100-form-title p-b-40">
						Login
					</span>
				
					<div class="wrap-input100 validate-input m-b-16 form-group" id="email1" data-validate="Please enter email: ex@abc.xyz">
						<input class="input100" type="text" id="email" name="email" placeholder="Email">
						<div class="invalid-feedback">
						<span class="focus-input100"></span>

						</div>
					</div>

					<div class="wrap-input100 validate-input m-b-20" id="password1" data-validate = "Please enter password">
						<span class="btn-show-pass">
							<i class="fa fa fa-eye"></i>
						</span>
						<input class="input100" type="password" id="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					<div class="form-group" id="alert">

					</div>

	

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Login
						</button>
					</div>

					
					
					<div class="flex-col-c p-t-224">
						<span class="txt2 p-b-10">
							Don’t have an account?
						</span>

						<a href="<?=base_url();?>index.php/Welcome/register" class="txt3 bo1 hov1">
							Sign up now
						</a>
					</div>
					
				</form>

				<?php
					if(isset($error)){
						echo $error;
					}

				?>

				
				<ul>
				</ul>

				
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="<?=base_url();?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url();?>assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url();?>assets/vendor/bootstrap/js/popper.js"></script>
	<script src="<?=base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url();?>assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url();?>assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?=base_url();?>assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url();?>assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url();?>assets/js/main.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="<?=base_url();?>assets/js/auth/login.js"></script>


</body>
</html>