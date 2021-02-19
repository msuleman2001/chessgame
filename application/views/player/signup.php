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
				<form id="frmLogin" method="post" action="<?php echo site_url('Member/new_member'); ?>" class="needs-validation" novalidate="">
					<div class="form-group">
						<input id="txtPlayerEmail" type="email" placeholder="Enter Email" class="form-control" name="txtPlayerEmail" tabindex="1" required autofocus>
						<div class="invalid-feedback">
							Please fill in your email
						</div>
					</div>
					<div class="form-group">
						<input id="txtPlayerPassword" placeholder="Enter Password" type="password" class="form-control" name="txtPlayerPassword" tabindex="2" required>
						<div class="invalid-feedback">
							please fill in your password
						</div>
					</div>
					<div class="form-group">
						<input id="txtConfirmPassword" placeholder="Confirm Password" type="password" class="form-control" name="txtConfirmPassword" tabindex="2" required>
					</div>
					<div class="form-group">
						<select class="form-control selectric" id="cmbCountry" name="cmbCountry">
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
			
		</div>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/scripts.js"></script>
		<script src="js/custom.js"></script>
		<script src="js/bootstrap.min.js">
	</body>
</html>