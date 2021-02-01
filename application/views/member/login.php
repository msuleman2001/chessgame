<html>
	<head>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/chess.css">
		
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/stylew.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fa/css/all.css">
	</head>
	<body class="body-bg">
		<nav class="navbar navbar-expand-lg main-navbar">
			<div class="mr-auto"></div>
		</nav>
		<div class="main-art">
			<div class="two-col-left">
				<form id="frmLogin" method="post" action="#" class="needs-validation" novalidate="">
					<div class="form-group">
						<label for="email">Email</label>
						<input id="txtEmail" type="email" class="form-control" name="txtEmail" tabindex="1" required autofocus>
						<div class="invalid-feedback">
							Please fill in your email
						</div>
					</div>

					<div class="form-group">
						<div class="d-block">
							<label for="password" class="control-label">Password</label>
							<div class="float-right">
								<a href="auth-forgot-password.html" class="text-small">
								Forgot Password?
								</a>
							</div>
						</div>
						<input id="txtPassword" type="password" class="form-control" name="txtPassword" tabindex="2" required>
						<div class="invalid-feedback">
							please fill in your password
						</div>
					</div>

					<div class="form-group">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" name="chkRememberMe" class="custom-control-input" tabindex="3" id="chkRememberMe">
							<label class="custom-control-label" for="remember-me">Remember Me</label>
						</div>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
							Login
						</button>
					</div>
                </form>
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
						Sign Up
					</button>
				</div>
			</div>
			<div class="two-col-right">
				<div class="form-group">
					<span>
						Login with Social Media
					</span>
				</div>
				<div class="form-group">
					<a href="#" class="fb btn-social" tabindex="4">
						<i class="fab fa-facebook-f"></i> 
						Facebook
					</a>
				</div>
				<div class="form-group">
					<a href="#" class="tw btn-social" tabindex="4">
						<i class="fab fa-twitter"></i>
						Twitter
					</a>
				</div>
				<div class="form-group">
					<a href="#" class="gg btn-social" tabindex="4">
						<i class="fab fa-google"></i>
						Google
					</a>
				</div>
				<div class="form-group">
					<a href="#" class="ya btn-social" tabindex="4">
						<i class="fab fa-yahoo"></i>
						Yahoo!
					</a>
				</div>
			</div>
		</div>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/scripts.js"></script>
		<script src="js/custom.js"></script>
		<script src="js/bootstrap.min.js">
	</body>
</html>