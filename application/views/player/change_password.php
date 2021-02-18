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
					<h2>Change Your Password</h2>
				</div>
				<form id="frmLogin" method="post" action="#" class="needs-validation" novalidate="">
					<div class="form-group">
						<input id="txtEmail" type="email" placeholder="Enter Email" class="form-control" name="txtEmail" tabindex="1" required autofocus>
						<div class="invalid-feedback">
							Please fill in your email
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
							Submit
						</button>
					</div>
					
					<div class="form-group">
					<h2> Enter New Password </h2>
				</div>
				<div class="form-group">
						<input id="txtPassword" placeholder="Enter New Password" type="password" class="form-control" name="txtPassword" tabindex="2" required>
						<div class="invalid-feedback">
							please fill in your password
						</div>
					</div>
					<div class="form-group">
						<input id="txtConfirmPassword" placeholder="Confirm Password" type="password" class="form-control" name="txtConfirmPassword" tabindex="2" required>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
							Change Password
						</button>
					</div>
		</div>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/scripts.js"></script>
		<script src="js/custom.js"></script>
		<script src="js/bootstrap.min.js">
	</body>
</html>