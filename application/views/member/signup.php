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
				<div class="form-group">
					Sign Up
				</div>
				<form id="frmLogin" method="post" action="#" class="needs-validation" novalidate="">
					<div class="form-group">
						<input id="txtEmail" type="email" placeholder="Enter Email" class="form-control" name="txtEmail" tabindex="1" required autofocus>
						<div class="invalid-feedback">
							Please fill in your email
						</div>
					</div>
					<div class="form-group">
						<input id="txtPassword" placeholder="Enter Password" type="password" class="form-control" name="txtPassword" tabindex="2" required>
						<div class="invalid-feedback">
							please fill in your password
						</div>
					</div>
					<div class="form-group">
						<input id="txtConfirmPassword" placeholder="Confirm Password" type="password" class="form-control" name="txtConfirmPassword" tabindex="2" required>
					</div>
					<div class="form-group">
						<select class="form-control selectric" id="cmbCountry">
							<option>USA</option>
							<option>England</option>
							<option>Brazil</option>
							<option>Canada</option>
							<option>Germany</option>
						</select>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
							Sign Up
						</button>
					</div>
                </form>
			</div>
			<div class="two-col-right">
				<div class="form-group">
					<span>
						Sign Up with Social Media
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