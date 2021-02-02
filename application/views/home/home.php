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
			<?php 
				if ($user_data)
					echo $user_menu;
				//else
					//echo "<a href='#' class='login-button btn btn-primary'>Login</a>";
			?>
		</nav>
		<div class="main-art">
			<a class="card card-quater-top-left" href="<?php echo site_url('home/game'); ?>">
				<div>
					Quick Game
				</div>
			</a>
			<a class="card card-quater-top-right" href="<?php echo site_url('member'); ?>">
				<div>
					Login
				</div>
			</a>
			<a class="card card-quater-bottom-left" href="<?php echo site_url('member/signup')?>">
				<div>
					Signup
				</div>
			</a>
			<a class="card card-quater-bottom-right" href="#">
				<div>
					About
				</div>
			</a>
		</div>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/scripts.js"></script>
		<script src="js/custom.js"></script>
		<script src="js/bootstrap.min.js">
	</body>
</html>
