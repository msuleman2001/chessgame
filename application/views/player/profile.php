<html>
	<head>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/chess.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fa/css/all.css">
		<script src="<?php echo base_url(); ?>assets/js/app.js"></script>
	</head>
	<body class="body-bg">
		<nav class="navbar navbar-expand-lg main-navbar">
			<div class="mr-auto" ></div>
			<?php 
				if ($player_menu_view)
					echo $player_menu_view; 
			?>
		</nav>
		<div class="main-art">
			<?php
				if ($_SESSION["player_data"])
				{
					$player = $_SESSION["player_data"];
					echo "<img src='" . base_url() . "/assets/img/" .  $player->player_image . "' height='60px' width='60px' class='player-profile-image' />";
				}
			?>
		</div>
		<script src="<?php echo base_url(); ?>assets/js/jquery-3.4.1.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		
	</body>
</html>