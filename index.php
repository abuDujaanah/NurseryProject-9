



<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/etc/lf/Login_v15/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Jan 2022 14:14:55 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
	<title>Nursery Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="assets/img/a.jpg" href="assets/images/icons/favicon.ico" />

	<link rel="stylesheet" type="text/css" href="assets//vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

	<link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">

	<link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="assets/vendor/animsition/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">

	<link rel="stylesheet" type="text/css" href="assets/vendor/daterangepicker/daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">

	<meta name="robots" content="noindex, follow">
</head>

<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(assets/img/nasary/1.jpg);">
					<span class="login100-form-title-1">
						Sign In
					</span>
				</div>
				<form class="login100-form validate-form" action="./assets/handler/login-dataHandle.php" method="post">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Your Email</span>
						<input class="input100" type="email" name="email" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>
					
					<div class="row flex-sb-m w-full p-b-30 mt-3">
					
						<div class="col-md-6 contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>
						<div class="col-md-6">
							<span class="txt1">
								Are you New? <a href="./register.php">Register</a>
							</span>
						</div>
					</div>
					<div class="container-login100-form-btn mt-3">
						<input class="login100-form-btn" name="login" type="submit" value="Login">
					</div>
				</form>
			</div>
		</div>
	</div>

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="vendor/animsition/js/animsition.min.js"></script>

	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="vendor/select2/select2.min.js"></script>

	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>

	<script src="vendor/countdowntime/countdowntime.js"></script>

	<script src="js/main.js"></script>

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');
	</script>
	<script defer
		src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
		integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
		data-cf-beacon='{"rayId":"6cbec13ed8d4f482","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}'
		crossorigin="anonymous"></script>
</body>

<!-- Mirrored from colorlib.com/etc/lf/Login_v15/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Jan 2022 14:15:25 GMT -->

</html>