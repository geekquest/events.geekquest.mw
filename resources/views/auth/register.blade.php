<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
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
	<link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
<!--===============================================================================================-->
</head>
<body style=" background-color:#f3f4f6;">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form action="{{ route('register') }}" method="Post" class="login100-form validate-form p-l-55 p-r-55 p-t-178">
				     @csrf
                    <span class="login100-form-title">
						Create your Account
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter your full name">
						<input class="input100" type="text" name="name" placeholder="Name">
						<span class="focus-input100"></span>
					</div>
                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email address">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Please enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Please enter the exactpassword">
						<input class="input100" type="password" name="password_confirmation" placeholder="Password Confirmation">
						<span class="focus-input100"></span>
					</div>



					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Create Account
						</button>
					</div>

					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Already have an account?
						</span>

						<a href="{{ route('login') }}" class="txt3">
							Sign in now
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


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
	<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
