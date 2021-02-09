
var output = document.getElementById('output');//this temprary to show output
var output1 = document.getElementById('output1');
var output2 = document.getElementById('output2');

var black_pieces = {["id" : "bp1", "row" : "1", "col" : "0"],
					["id" : "bp2", "row" : 1, "col" : 1],
					["id" : "bp3", "row" : 1, "col" : 2],
					["id" : "bp4", "row" : 1, "col" : 3],
					["id" : "bp5", "row" : 1, "col" : 4],
					["id" : "bp6", "row" : 1, "col" : 6],
					["id" : "bp7", "row" : 1, "col" : 6],
					["id" : "bp8", "row" : 1, "col" : 7],
					["id" : "br1", "row" : 0, "col" : 0],
					["id" : "bn1", "row" : 0, "col" : 1],
					["id" : "bb1", "row" : 0, "col" : 2],
					["id" : "bk", "row" : 0, "col" : 3],
					["id" : "bq", "row" : 0, "col" : 4],
					["id" : "bb2", "row" : 0, "col" : 5],
					["id" : "bn2", "row" : 0, "col" : 6],
					["id" : "br2", "row" : 0, "col" : 7]
				   };

var white_pieces = {["id" : "wp1", "row" : 6, "col" : 0],
					["id" : "wp2", "row" : 6, "col" : 1],
					["id" : "wp3", "row" : 6, "col" : 2],
					["id" : "wp4", "row" : 6, "col" : 3],
					["id" : "wp5", "row" : 6, "col" : 4],
					["id" : "wp6", "row" : 6, "col" : 6],
					["id" : "wp7", "row" : 6, "col" : 6],
					["id" : "wp8", "row" : 6, "col" : 7],
					["id" : "wr1", "row" : 7, "col" : 0],
					["id" : "wn1", "row" : 7, "col" : 1],
					["id" : "wb1", "row" : 7, "col" : 2],
					["id" : "wq", "row" : 7, "col" : 3],
					["id" : "wk", "row" : 7, "col" : 4],
					["id" : "wb2", "row" : 7, "col" : 5],
					["id" : "wn2", "row" : 7, "col" : 6],
					["id" : "wr2", "row" : 7, "col" : 7]
				   };
var killed_piece_id = '';
var current_row = -1;
var current_col = -1;
var selected_piece_type = '';
var selected_piece_id = '';
var hidBaseURL = document.getElementById('hidBaseURL');
//this is initial setup for chessboard
var chess_board = [
	['br1', 'bn1', 'bb1', 'bk', 'bq', 'bb2', 'bn2', 'br2'],
	['bp1', 'bp2', 'bp3', 'bp4', 'bp5', 'bp6', 'bp7', 'bp8'],
	['', '', '', '', '', '', '', ''],
	['', '', '', '', '', '', '', ''],
	['', '', '', '', '', '', '', ''],
	['', '', '', '', '', '', '', ''],
	['wp1', 'wp2', 'wp3', 'wp4', 'wp5', 'wp6', 'wp7', 'wp8'],
	['wr1', 'wn1', 'wb1', 'wq', 'wk', 'wb2', 'wn2', 'wr2'],
];

var allowed_cells = [];
var tblChessboard = document.getElementById('tblChessboard');

//this function will run after timer end
function startGame(base_url)
{
	setBoardColor('blue');
}

//this function will setup the color of board
function setBoardColor(color)
{
	for(var row= 0; row < 8; row++)
		for(var col = 0; col < 8; col++)
			if ((row + col) % 2 == 0)
				tblChessboard.rows[row].cells[col].style.backgroundColor = color;
}

function allowDrop(ev) 
{
	ev.preventDefault();
}

function drag(ev) 
{
	
	current_row = ev.target.parentElement.id[1];
	current_col = ev.target.parentElement.id[2];
	selected_piece_id = ev.target.id;
	
	generateAllowedCells(selected_piece_id, parseInt(current_row), parseInt(current_col));
}

function drop(ev) 
{
	var cell_id = '';
	if (!ev.target.id.startsWith('c'))
		cell_id = ev.target.parentElement.id;
	else
		cell_id = ev.target.id;
	
	var to_drop_row = parseInt(cell_id[1]);
	var to_drop_col = parseInt(cell_id[2]);
	var is_allowed = isInAllowedCells(to_drop_row, to_drop_col);

	if (!is_allowed)
		return;
	
	updateChessboard(to_drop_row, to_drop_col);
	alert();
	updatePieceLocation(to_drop_row, to_drop_col);
	//isCheck();
}

function getPieceType(piece_id)
{
	if (piece_id.startsWith('bp'))
		return 'blackpawn';
	if (piece_id.startsWith('wp'))
		return 'whitepawn';
	if (piece_id[1] == 'r')
		return 'rock';
	if (piece_id[1] == 'n')
		return 'knight';
	if (piece_id[1] == 'b')
		return 'bishop';
	if (piece_id[1] == 'q')
		return 'queen';
	if (piece_id[1] == 'k')
		return 'king';
}

function generateAllowedCells(piece_id, current_row, current_col)
{
	allowed_cells = [];
	var new_row = 0;
	var new_col = 0;
	
	selected_piece_type = getPieceType(piece_id);
	
	//for pawn moves
	if (selected_piece_type.endsWith('pawn'))
	{
		var addition_factor = 0;
		if (selected_piece_type.startsWith('black'))
			addition_factor = 1;
		else
			addition_factor = -1;
		
		//normal step
		if (chess_board[current_row + addition_factor][current_col] == '')
		{
			new_row = current_row + addition_factor;
			new_col = current_col;
			
			if (chess_board[new_row][new_col] == '')
				allowed_cells.push([new_row, new_col]);
		}
		
		//first step. it may be 2 steps
		if (current_row == 1 || current_row == 6)
		{			
			new_row = current_row + addition_factor + addition_factor;
			new_col = current_col;
			
			if (chess_board[new_row][new_col] == '')
				allowed_cells.push([new_row, new_col]);
		}

		//checking right column
		if (current_col != 7)
		{
			var right_cross_piece = findPieceInCell(current_row + addition_factor, current_col + 1);
			if (right_cross_piece != '')
				if (areEnemies(right_cross_piece, piece_id))
				{	
					new_row = current_row + addition_factor;
					new_col = current_col + 1;
					allowed_cells.push([new_row, new_col]);
				}	
		}	

		//checking left column
		if (current_col != 0)
		{
			var left_cross_piece = findPieceInCell(current_row + addition_factor, current_col - 1);
			if (left_cross_piece != '')
				if (areEnemies(right_cross_piece, piece_id))
				{
					new_row = current_row + addition_factor;
					new_col = current_col - 1;
					allowed_cells.push([new_row, new_col]);
				}
		}
	}
	
	//king moves
	if (selected_piece_type == 'king')
	{
		findAndPushCell(current_row + 1, current_col + 1);
		findAndPushCell(current_row + 1, current_col);
		findAndPushCell(current_row + 1, current_col - 1);
		findAndPushCell(current_row, current_col - 1);
		findAndPushCell(current_row - 1, current_col - 1);
		findAndPushCell(current_row - 1, current_col);
		findAndPushCell(current_row - 1, current_col + 1);
		findAndPushCell(current_row, current_col + 1);
	}
	
	if (selected_piece_type == 'knight')
	{
		findAndPushCell(current_row + 1, current_col + 2);
		findAndPushCell(current_row - 1, current_col + 2);
		findAndPushCell(current_row + 2, current_col + 1);
		findAndPushCell(current_row + 2, current_col - 1);
		findAndPushCell(current_row + 1, current_col - 2);
		findAndPushCell(current_row - 1, current_col - 2);
		findAndPushCell(current_row - 2, current_col + 1);
		findAndPushCell(current_row - 2, current_col - 1);
	}
	
	if (selected_piece_type == 'rock')
	{
		for (var row = current_row + 1; row < 8; row++)
		{
			var new_cell = findAndPushCell(row, current_col);
			if (new_cell == 'out' || new_cell != 'empty')
				break;
		}
		
		for (var row = current_row - 1; row >= 0; row--)
		{
			var new_cell = findAndPushCell(row, current_col);
			if (new_cell == 'out' || new_cell != 'empty')
				break;
		}
		
		for (var col = current_col + 1; col < 8; col++)
		{
			var new_cell = findAndPushCell(current_row, col);
			if (new_cell == 'out' || new_cell != 'empty')
				break;
		}
		
		for (var col = current_col - 1; col >= 0; col--)
		{
			var new_cell = findAndPushCell(current_row, col);
			if (new_cell == 'out' || new_cell != 'empty')
				break;
		}
	}
	
	if (selected_piece_type == 'bishop')
	{
		var new_row = current_row + 1;
		var new_col = current_col + 1;
				
		for(var i = 0; i < 8; i++)
		{
			var new_cell = findAndPushCell(new_row++, new_col++);
			if (new_cell == 'out' || new_cell != 'empty')
				break;
		}
		
		new_row = current_row + 1;
		new_col = current_col - 1;
		for(var i = 0; i < 8; i++)
		{
			var new_cell = findAndPushCell(new_row++, new_col--);
			if (new_cell == 'out' || new_cell != 'empty')
				break;
		}
		
		new_row = current_row - 1;
		new_col = current_col - 1;
		for(var i = 0; i < 8; i++)
		{
			var new_cell = findAndPushCell(new_row--, new_col--);
			if (new_cell == 'out' || new_cell != 'empty')
				break;
		}
		
		new_row = current_row - 1;
		new_col = current_col + 1;
		for(var i = 0; i < 8; i++)
		{
			var new_cell = findAndPushCell(new_row--, new_col++);
			if (new_cell == 'out' || new_cell != 'empty')
				break;
		}
	}
	
	if (selected_piece_type == 'queen')
	{
		for (var row = current_row + 1; row < 8; row++)
		{
			var new_cell = findAndPushCell(row, current_col);
			if (new_cell == 'out' || new_cell != 'empty')
				break;
		}
		
		for (var row = current_row - 1; row >= 0; row--)
		{
			var new_cell = findAndPushCell(row, current_col);
			if (new_cell == 'out' || new_cell != 'empty')
				break;
		}
		
		for (var col = current_col + 1; col < 8; col++)
		{
			var new_cell = findAndPushCell(current_row, col);
			if (new_cell == 'out' || new_cell != 'empty')
				break;
		}
		
		for (var col = current_col - 1; col >= 0; col--)
		{
			var new_cell = findAndPushCell(current_row, col);
			if (new_cell == 'out' || new_cell != 'empty')
				break;
		}
		
		var new_row = current_row + 1;
		var new_col = current_col + 1;
				
		for(var i = 0; i < 8; i++)
		{
			var new_cell = findAndPushCell(new_row++, new_col++);
			if (new_cell == 'out' || new_cell != 'empty')
				break;
		}
		
		new_row = current_row + 1;
		new_col = current_col - 1;
		for(var i = 0; i < 8; i++)
		{
			var new_cell = findAndPushCell(new_row++, new_col--);
			if (new_cell == 'out' || new_cell != 'empty')
				break;
		}
		
		new_row = current_row - 1;
		new_col = current_col - 1;
		for(var i = 0; i < 8; i++)
		{
			var new_cell = findAndPushCell(new_row--, new_col--);
			if (new_cell == 'out' || new_cell != 'empty')
				break;
		}
		
		new_row = current_row - 1;
		new_col = current_col + 1;
		for(var i = 0; i < 8; i++)
		{
			var new_cell = findAndPushCell(new_row--, new_col++);
			if (new_cell == 'out' || new_cell != 'empty')
				break;
		}
	}
}

function isInBound(row, col)
{
	if (row < 0 || row > 7)
		return false;
	if (col < 0 || col > 7)
		return false;
	return true;
}

function findAndPushCell(row, col)
{
	if (isInBound(row, col))
	{
		var next_cell = findPieceInCell(row, col);
		
		if (next_cell == '' || areEnemies(next_cell, selected_piece_id))
			allowed_cells.push([row, col]);
		
		if (next_cell == '')
			return 'empty';
		if (areEnemies(next_cell, selected_piece_id))
			return 'enemy';
		if (!areEnemies(next_cell, selected_piece_id))
			return 'friend';
	}
	else
		return 'out';
}

function findPieceInCell(row, col)
{
	return chess_board[row][col];
}

function areEnemies(piece_a, piece_b)
{
	if (piece_a == '' || piece_b == '')
		false;
	if (piece_a[0] == piece_b[0])
		return false;
	else
		return true;
}

function isInAllowedCells(to_drop_row, to_drop_col)
{
	for (var loc = 0; loc < allowed_cells.length; loc++)
		if (allowed_cells[loc][0] == to_drop_row && allowed_cells[loc][1] == to_drop_col)
			return true;
		
	return false;
}

function updateChessboard(drop_row, drop_col)
{
	chess_board[current_row][current_col] = '';
	
	if (chess_board[drop_row][drop_col] != '')
		killed_piece_id = chess_board[drop_row][drop_col];
	
	chess_board[drop_row][drop_col] = selected_piece_id;
	
	renderChessboard();
	//printChessboard();
}

function renderChessboard()
{
	for (var row = 0; row < 8; row++)
		for (var col = 0; col < 8; col++)
			tblChessboard.rows[row].cells[col].innerHTML = generatePieceHTMLImageTag(chess_board[row][col]);
}

function updatePieceLocation(row, col)
{
	alert(black_pieces['br1'].row);
	return;
	var moved_piece_vector = [];
	var killed_piece_vector = [];
	if (selected_piece_id.startsWith('b'))
		moved_piece_vector = black_pieces;
	else
		moved_piece_vector = white_pieces;
	
	
	if (killed_piece_id != '')
		if (killed_piece_id.startsWith('b'))
			killed_piece_vector = black_pieces;
		else
			killed_piece_vector = white_pieces;
}

function generatePieceHTMLImageTag(piece_id)
{	
	if (piece_id == '')
		return '';
	var img_str = '<img id="piece_id" height="30" draggable="true" ondragstart="drag(event)" src="base_url/assets/img/pawns/piece_img.png">';
	
	img_str = img_str.replace('base_url', hidBaseURL.value);
	img_str = img_str.replace('piece_id', piece_id);
	var piece_img = piece_id.substring(0,2);
	img_str = img_str.replace('piece_img', piece_img);
	
	return img_str;
}

function isCheck()
{
	//get list of all friends of selected piece by id
	var friends = [];
	for(var row = 0; row < 8; row++)
		for(var col = 0; col < 8; col++)
			if (chess_board[row][col] != '')
				if (selected_piece_id[0] == chess_board[row][col][0])
				{
					generateAllowedCells(chess_board[row][col], row, col);
					for (var i = 0; i < allowed_cells; i++)
					{
						output.innerHTML += chess_board[row][col] + ':' + row + ',' + col + '<br>';
					}
				}				
				
	//for each allowed cell find the piece in allowed cells
	//if piece in allowed cell is enemy check it is king
	//if this is king then this is check
}

function printChessboard()
{
	output.innerHTML = '';
	for (var i = 0; i < 8; i++)
	{
		for (var j = 0; j < 8; j++)
			output.innerHTML += chess_board[i][j] + "---";
	
		output.innerHTML += '<br />';
	}
}
