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
			<table class="table">
				<thead>
				<tr>
					<th width="10%">#</th>
					<th width="20%">Name</th>
					<th width="20%">Email</th>
					<th width="30%">Last Seen</th>
					<th>Time Elapsed</th>
				</tr>
				</thead>
				<tbody>
					<?php
						if ($loggedin_players)
						{
							for ($count = 0; $count < count($loggedin_players); $count++)
							{
								echo "<tr>";
								echo "<td>" . ($count + 1) . "</td>";
								echo "<td>" . $loggedin_players[$count]->player_name . "</td>";
								echo "<td>" . $loggedin_players[$count]->player_email . "</td>";
								echo "<td>" . $loggedin_players[$count]->last_seen . "</td>";
								echo "<td>" . $loggedin_players[$count]->time_elapsed . "</td>";
							}
						}
					?>
				</tbody>
			</table>
		</div>
		<script src="<?php echo base_url(); ?>assets/js/jquery-3.4.1.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		
	</body>
</html>