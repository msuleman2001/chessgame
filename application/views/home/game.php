<html>
	<head>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/chess.css">
		
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/stylew.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fa/css/all.css">
		
		<script src="js/chess.js"></script>
	</head>
	<body class="body-bg">
		<nav class="navbar navbar-expand-lg main-navbar">
			<div class="mr-auto"></div>
			<?php 
				//if ($user_data)
					//echo $user_menu;
				//else
					//echo "<a href='#' class='login-button btn btn-primary'>Login</a>";
			?>
		</nav>
		<div class="main-art">
			<div id="divTimer" class="timer">
				Game will be start in 5 seconds
			</div>
			<div id="divGizmo" class="gizmo">
				<table border="1" width="100%" height="100%">
					<tr>
						<td id="a1">
						</td>
						<td id="a2">
						</td>
						<td id="a3">
						</td>
						<td id="a4">
						</td>
						<td id="a5">
						</td>
						<td id="a6">
						</td>
						<td id="a7">
						</td>
						<td id="a8">
						</td>
					</tr>
					<tr>
						<td id="b1">
						</td>
						<td id="b2">
						</td>
						<td id="b3">
						</td>
						<td id="b4">
						</td>
						<td id="b5">
						</td>
						<td id="b6">
						</td>
						<td id="b7">
						</td>
						<td id="b8">
						</td>
					</tr>
					<tr>
						<td id="c1">
						</td>
						<td id="c2">
						</td>
						<td id="c3">
						</td>
						<td id="c4">
						</td>
						<td id="c5">
						</td>
						<td id="c6">
						</td>
						<td id="c7">
						</td>
						<td id="c8">
						</td>
					</tr>
					<tr>
						<td id="d1">
						</td>
						<td id="d2">
						</td>
						<td id="d3">
						</td>
						<td id="d4">
						</td>
						<td id="d5">
						</td>
						<td id="d6">
						</td>
						<td id="d7">
						</td>
						<td id="d8">
						</td>
					</tr>
					<tr>
						<td id="e1">
						</td>
						<td id="e2">
						</td>
						<td id="e3">
						</td>
						<td id="e4">
						</td>
						<td id="e5">
						</td>
						<td id="e6">
						</td>
						<td id="e7">
						</td>
						<td id="e8">
						</td>
					</tr>
					<tr>
						<td id="f1">
						</td>
						<td id="f2">
						</td>
						<td id="f3">
						</td>
						<td id="f4">
						</td>
						<td id="f5">
						</td>
						<td id="f6">
						</td>
						<td id="f7">
						</td>
						<td id="f8">
						</td>
					</tr>
					<tr>
						<td id="g1">
						</td>
						<td id="g2">
						</td>
						<td id="g3">
						</td>
						<td id="g4">
						</td>
						<td id="g5">
						</td>
						<td id="g6">
						</td>
						<td id="g7">
						</td>
						<td id="g8">
						</td>
					</tr>
					<tr>
						<td id="h1">
						</td>
						<td id="h2">
						</td>
						<td id="h3">
						</td>
						<td id="h4">
						</td>
						<td id="h5">
						</td>
						<td id="h6">
						</td>
						<td id="h7">
						</td>
						<td id="h8">
						</td>
					</tr>
				</table>
			</div>
			<div class="card player-card-you">
				<div>
					<img />
				</div>
			</div>
			<div class="card player-card-opponent"></div>
		</div>
		<script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/chess.js"></script>
		<script>
			$( document ).ready(function() {
				loadGizmo();
			});
			
			var timer = setInterval(gameStartTimer, 1000);
			var seconds_rem = 5;
			var divTimer = document.getElementById('divTimer');

			function gameStartTimer() 
			{
				divTimer.innerHTML = "Game will be start in " + seconds_rem + " seconds";
				seconds_rem--;
	
				if (seconds_rem < 0)
					clearInterval(timer);
			}
			
		</script>
	</body>
</html>
