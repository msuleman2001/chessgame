<html>
	<head>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/chess.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fa/css/all.css">
		
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
			<div id="divChessboard" class="chessboard">
				<table id="tblChessboard" width="100%" height="100%">
					<tr>
						<td height="50px" width="50px" align="center" valign="middle" id="c00" ondrop="drop(event)" ondragover="allowDrop(event)">
							<img id="br1" height="30px" draggable="true" ondragstart="drag(event)" src="<?php echo base_url();?>assets/img/pawns/br.png">
						</td>
						<td height="50px" style="position: absolute;" width="50px" align="center" valign="middle" id="c01" ondrop="drop(event)" ondragover="allowDrop(event)">
							<img id="bn1" height="30px" draggable="true" ondragstart="drag(event)" src="<?php echo base_url();?>assets/img/pawns/bn.png">
						</td>
						<td height="50px" width="50px" align="center" valign="middle" id="c02" ondrop="drop(event)" ondragover="allowDrop(event)">
							<img id="bb1" height="30px" draggable="true" ondragstart="drag(event)" src="<?php echo base_url();?>assets/img/pawns/bb.png">
						</td>
						<td height="50px" width="50px" align="center" valign="middle" id="c03" ondrop="drop(event)" ondragover="allowDrop(event)">
							<img id="bk" height="30px" draggable="true" ondragstart="drag(event)" src="<?php echo base_url();?>assets/img/pawns/bk.png">
						</td>
						<td height="50px" width="50px" align="center" valign="middle" id="c04" ondrop="drop(event)" ondragover="allowDrop(event)">
							<img id="bq" height="30px" draggable="true" ondragstart="drag(event)" src="<?php echo base_url();?>assets/img/pawns/bq.png">
						</td>
						<td height="50px" width="50px" align="center" valign="middle" id="c05" ondrop="drop(event)" ondragover="allowDrop(event)">
							<img id="bb2" height="30px" draggable="true" ondragstart="drag(event)" src="<?php echo base_url();?>assets/img/pawns/bb.png">
						</td>
						<td height="50px" width="50px" align="center" valign="middle" id="c06" ondrop="drop(event)" ondragover="allowDrop(event)">
							<img id="bn2" height="30px" draggable="true" ondragstart="drag(event)" src="<?php echo base_url();?>assets/img/pawns/bn.png">
						</td>
						<td height="50px" width="50px" align="center" valign="middle" id="c07" ondrop="drop(event)" ondragover="allowDrop(event)">
							<img id="br2" height="30px" draggable="true" ondragstart="drag(event)" src="<?php echo base_url();?>assets/img/pawns/br.png">
						</td>
					</tr>
					<tr>
						<td height="50px" width="50px" align="center" valign="middle" id="c10" ondrop="drop(event)" ondragover="allowDrop(event)">
							<img id="bp1" height="30px" draggable="true" ondragstart="drag(event)" src="<?php echo base_url();?>assets/img/pawns/bp.png">
						</td>
						<td height="50px" width="50px" align="center" valign="middle" id="c11" ondrop="drop(event)" ondragover="allowDrop(event)">
							<img id="bp2" height="30px" draggable="true" ondragstart="drag(event)" src="<?php echo base_url();?>assets/img/pawns/bp.png">
						</td>
						<td height="50px" width="50px" align="center" valign="middle" id="c12" ondrop="drop(event)" ondragover="allowDrop(event)">
							<img id="bp3" height="30px" draggable="true" ondragstart="drag(event)" src="<?php echo base_url();?>assets/img/pawns/bp.png">
						</td>
						<td height="50px" width="50px" align="center" valign="middle" id="c13" ondrop="drop(event)" ondragover="allowDrop(event)">
							<img id="bp4" height="30px" draggable="true" ondragstart="drag(event)" src="<?php echo base_url();?>assets/img/pawns/bp.png">
						</td>
						<td height="50px" width="50px" align="center" valign="middle" id="c14" ondrop="drop(event)" ondragover="allowDrop(event)">
							<img id="bp5" height="30px" draggable="true" ondragstart="drag(event)" src="<?php echo base_url();?>assets/img/pawns/bp.png">
						</td>
						<td height="50px" width="50px" align="center" valign="middle" id="c15" ondrop="drop(event)" ondragover="allowDrop(event)">
							<img id="bp6" height="30px" draggable="true" ondragstart="drag(event)" src="<?php echo base_url();?>assets/img/pawns/bp.png">
						</td>
						<td height="50px" width="50px" align="center" valign="middle" id="c16" ondrop="drop(event)" ondragover="allowDrop(event)">
							<img id="bp7" height="30px" draggable="true" ondragstart="drag(event)" src="<?php echo base_url();?>assets/img/pawns/bp.png">
						</td>
						<td height="50px" width="50px" align="center" valign="middle" id="c17" ondrop="drop(event)" ondragover="allowDrop(event)">
							<img id="bp8" height="30px" draggable="true" ondragstart="drag(event)" src="<?php echo base_url();?>assets/img/pawns/bp.png">
						</td>
					</tr>
					<tr>
						<td height="50px" width="50px" align="center" valign="middle" id="c20" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
						<td height="50px" width="50px" align="center" valign="middle" id="c21" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
						<td height="50px" width="50px" align="center" valign="middle" id="c22" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
						<td height="50px" width="50px" align="center" valign="middle" id="c23" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
						<td height="50px" width="50px" align="center" valign="middle" id="c24" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
						<td height="50px" width="50px" align="center" valign="middle" id="c25" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
						<td height="50px" width="50px" align="center" valign="middle" id="c26" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
						<td height="50px" width="50px" align="center" valign="middle" id="c27" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
					</tr>
					<tr>
						<td height="50px" width="50px" align="center" valign="middle" id="c30" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
						<td height="50px" width="50px" align="center" valign="middle" id="c31" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
						<td height="50px" width="50px" align="center" valign="middle" id="c32" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
						<td height="50px" width="50px" align="center" valign="middle" id="c33" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
						<td height="50px" width="50px" align="center" valign="middle" id="c34" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
						<td height="50px" width="50px" align="center" valign="middle" id="c35" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
						<td height="50px" width="50px" align="center" valign="middle" id="c36" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
						<td height="50px" width="50px" align="center" valign="middle" id="c37" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
					</tr>
					<tr>
						<td height="50px" width="50px" align="center" valign="middle" id="c40" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
						<td height="50px" width="50px" align="center" valign="middle" id="c41"ondrop="drop(event)" ondragover="allowDrop(event)"></td>
						<td height="50px" width="50px" align="center" valign="middle" id="c42" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
						<td height="50px" width="50px" align="center" valign="middle" id="c43" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
						<td height="50px" width="50px" align="center" valign="middle" id="c44" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
						<td height="50px" width="50px" align="center" valign="middle" id="c45" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
						<td height="50px" width="50px" align="center" valign="middle" id="c46" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
						<td height="50px" width="50px" align="center" valign="middle" id="c47" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
					</tr>
					<tr>
						<td height="50px" width="50px" align="center" valign="middle" id="c50" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
						<td height="50px" width="50px" align="center" valign="middle" id="c51" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
						<td height="50px" width="50px" align="center" valign="middle" id="c52" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
						<td height="50px" width="50px" align="center" valign="middle" id="c53" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
						<td height="50px" width="50px" align="center" valign="middle" id="c54" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
						<td height="50px" width="50px" align="center" valign="middle" id="c55" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
						<td height="50px" width="50px" align="center" valign="middle" id="c56" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
						<td height="50px" width="50px" align="center" valign="middle" id="c57" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
					</tr>
					<tr>
						<td height="50px" width="50px" align="center" valign="middle" id="c60" ondrop="drop(event)" ondragover="allowDrop(event)">
							<img id="wp1" height="30px" draggable="true" ondragstart="drag(event)" src="<?php echo base_url();?>assets/img/pawns/wp.png">
						</td>
						<td height="50px" width="50px" align="center" valign="middle" id="c61" ondrop="drop(event)" ondragover="allowDrop(event)">
							<img id="wp2" height="30px" draggable="true" ondragstart="drag(event)" src="<?php echo base_url();?>assets/img/pawns/wp.png">
						</td>
						<td height="50px" width="50px" align="center" valign="middle" id="c62" ondrop="drop(event)" ondragover="allowDrop(event)">
							<img id="wp3" height="30px" draggable="true" ondragstart="drag(event)" src="<?php echo base_url();?>assets/img/pawns/wp.png">
						</td>
						<td height="50px" width="50px" align="center" valign="middle" id="c63" ondrop="drop(event)" ondragover="allowDrop(event)">
							<img id="wp4" height="30px" draggable="true" ondragstart="drag(event)" src="<?php echo base_url();?>assets/img/pawns/wp.png">
						</td>
						<td height="50px" width="50px" align="center" valign="middle" id="c64" ondrop="drop(event)" ondragover="allowDrop(event)">
							<img id="wp5" height="30px" draggable="true" ondragstart="drag(event)" src="<?php echo base_url();?>assets/img/pawns/wp.png">
						</td>
						<td height="50px" width="50px" align="center" valign="middle" id="c65" ondrop="drop(event)" ondragover="allowDrop(event)">
							<img id="wp6" height="30px" draggable="true" ondragstart="drag(event)" src="<?php echo base_url();?>assets/img/pawns/wp.png">
						</td>
						<td height="50px" width="50px" align="center" valign="middle" id="c66" ondrop="drop(event)" ondragover="allowDrop(event)">
							<img id="wp7" height="30px" draggable="true" ondragstart="drag(event)" src="<?php echo base_url();?>assets/img/pawns/wp.png">
						</td>
						<td height="50px" width="50px" align="center" valign="middle" id="c67" ondrop="drop(event)" ondragover="allowDrop(event)">
							<img id="wp8" height="30px" draggable="true" ondragstart="drag(event)" src="<?php echo base_url();?>assets/img/pawns/wp.png">
						</td>
					</tr>
					<tr>
						<td height="50px" width="50px" align="center" valign="middle" id="c70" ondrop="drop(event)" ondragover="allowDrop(event)">
							<img id="wr1" height="30px" draggable="true" ondragstart="drag(event)" src="<?php echo base_url();?>assets/img/pawns/wr.png">
						</td>
						<td height="50px" width="50px" align="center" valign="middle" id="c71" ondrop="drop(event)" ondragover="allowDrop(event)">
							<img id="wn1" height="30px" draggable="true" ondragstart="drag(event)" src="<?php echo base_url();?>assets/img/pawns/wn.png">
						</td>
						<td height="50px" width="50px" align="center" valign="middle" id="c72" ondrop="drop(event)" ondragover="allowDrop(event)">
							<img id="wb1" height="30px" draggable="true" ondragstart="drag(event)" src="<?php echo base_url();?>assets/img/pawns/wb.png">
						</td>
						<td height="50px" width="50px" align="center" valign="middle" id="c73" ondrop="drop(event)" ondragover="allowDrop(event)">
							<img id="wq" height="30px" draggable="true" ondragstart="drag(event)" src="<?php echo base_url();?>assets/img/pawns/wq.png">
						</td>
						<td height="50px" width="50px" align="center" valign="middle" id="c74" ondrop="drop(event)" ondragover="allowDrop(event)">
							<img id="wk" height="30px" draggable="true" ondragstart="drag(event)" src="<?php echo base_url();?>assets/img/pawns/wk.png">
						</td>
						<td height="50px" width="50px" align="center" valign="middle" id="c75" ondrop="drop(event)" ondragover="allowDrop(event)">
							<img id="wb1" height="30px" draggable="true" ondragstart="drag(event)" src="<?php echo base_url();?>assets/img/pawns/wb.png">
						</td>
						<td height="50px" width="50px" align="center" valign="middle" id="c76" ondrop="drop(event)" ondragover="allowDrop(event)">
							<img id="wn2" height="30px" draggable="true" ondragstart="drag(event)" src="<?php echo base_url();?>assets/img/pawns/wn.png">
						</td>
						<td height="50px" width="50px" align="center" valign="middle" id="c77" ondrop="drop(event)" ondragover="allowDrop(event)">
							<img id="wr2" height="30px" draggable="true" ondragstart="drag(event)" src="<?php echo base_url();?>assets/img/pawns/wr.png">
						</td>
					</tr>
				</table>
			</div>
			<div class="card player-card">
				<div class="card-player-header header-black">
					<img alt="image" src="<?php echo base_url(); ?>assets/img/avatar-1.png" class="rounded-circle user-img">
					<a href="#">Your name</a>
					<div id="divBlackTimer" class="player-time"></div>
				</div>
				<div id="divKilledWhite">
					
				</div>
			</div>
			<div class="card player-card">
				<div class="card-player-header header-white">
					<img alt="image" src="<?php echo base_url(); ?>assets/img/avatar-1.png" class="rounded-circle user-img">
					<a href="#">Your name</a>
					<div id="divWhiteTimer" class="player-time"></div>
				</div>
				<div id="divKilledBlack">
					
				</div>
			</div>
			<div class="player-card">
				<button data-toggle="modal" data-target="#myModal" class="btn btn-danger btn-block">End Game</button>
				<div id="myModal" class="modal fade" role="dialog">
					<div class="modal-dialog">

					<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Enging Game</h4>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<div class="modal-body">
								<p>By ending this game, you will lose. If your are playing with login then it can hurt your rankings</p>
							</div>
							<div class="modal-footer">
								<a href="#" class="btn btn-primary" data-dismiss="modal">Continue Game</a>
								<a href="<?php site_url('home/index'); ?>" class="btn btn-danger">End Game</a>
							</div>
						</div>

					</div>
				</div>
			</div>
			<div id="output"></div>
		</div>
		<input type="hidden" id="hidBaseURL" value="<?php echo base_url(); ?>"/>
		<script src="<?php echo base_url();?>assets/chessboardjs-1.0.0/js/chessboard-1.0.0.js"></script>
		<script src="<?php echo base_url();?>assets/chessboardjs-1.0.0/js/chessboard-1.0.0.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery-3.4.1.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/chess.js"></script>
		<script>
			var timer = setInterval(gameStartTimer, 1000);
			var seconds_rem = 5;
			var divTimer = document.getElementById('divTimer');
			function gameStartTimer() 
			{
				divTimer.innerHTML = "Game will be start in " + seconds_rem + " seconds";
				seconds_rem--;
	
				if (seconds_rem < 5)
				{
					clearInterval(timer);
					startGame('<?php echo base_url();?>');
				}				
			}			
		</script>
	</body>
</html>
