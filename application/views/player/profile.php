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
			<?php
				if ($_SESSION["player_data"])
				{
					$player = $_SESSION["player_data"];
					echo "<img src='" . base_url() . "/assets/img/" .  $player->player_image . "' height='60px' width='60px' class='player-profile-image' />";
				}
			?>
		</div>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/scripts.js"></script>
		<script src="js/custom.js"></script>
		<script src="js/bootstrap.min.js">
	</body>
</html>