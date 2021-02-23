<html>
	<head>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/chess.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fa/css/all.css">
		
		<meta name="google-signin-client_id" content="726505064962-466c8l12n8d7i6ctt5di26npl1uej3jf.apps.googleusercontent.com">
		<script src="https://apis.google.com/js/platform.js" async defer></script>
	</head>
	<body class="body-bg">
		<nav class="navbar navbar-expand-lg main-navbar">
			<div class="mr-auto"></div>
		</nav>
		
		<div class="main-art">
			<div class="two-col-left">
				<form id="frmLogin" method="post" action="<?php echo site_url('Player/perform_login'); ?>" class="needs-validation" novalidate="">
					<div class="form-group">
						<label for="email">Email</label>
						<input id="txtPlayerEmail" type="email" class="form-control" name="txtPlayerEmail" tabindex="1" required autofocus>
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
						<input id="txtPlayerPassword" type="password" class="form-control" name="txtPlayerPassword" tabindex="2" required>
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
				
			</div>
		</div>
		<script src="<?php echo base_url(); ?>assets/js/jquery-3.4.1.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js">
	</body>
</html>