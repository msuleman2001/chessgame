
var output = document.getElementById('output');//this temprary to show output
var output1 = document.getElementById('output1');
var output2 = document.getElementById('output2');

var current_row = -1;
var current_col = -1;
var selected_piece_type = '';
var selected_piece_id = '';
var hidBaseURL = document.getElementById('hidBaseURL');
//this is initial setup for chessboard
var chess_board = [
	['br1', 'bn1', 'bb1', 'bk', 'bq', 'bb2', 'bn2', 'br2'],
	['bP1', 'bP2', 'bP3', 'bP4', 'bP5', 'bP6', 'bP7', 'bP8'],
	['', '', '', '', '', '', '', ''],
	['', '', '', '', '', '', '', ''],
	['', '', '', '', '', '', '', ''],
	['', '', '', '', '', '', '', ''],
	['wP1', 'wP2', 'wP3', 'wP4', 'wP5', 'wP6', 'wP7', 'wP8'],
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
}

function getPieceType(piece_id)
{
	if (piece_id.startsWith('bP'))
		return 'blackpawn';
	if (piece_id.startsWith('wP'))
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
		for (var row = current_row; row < 8; row++)
		{
			var this_cell = findAndPushCell(row, current_col);
			if (this_cell == 'out' || this_cell == 'friend')
				break;
		}
		
		for (var row = current_row; row >= 0; row--)
		{
			var this_cell = findAndPushCell(row, current_col);
			if (this_cell == 'out' || this_cell == 'friend')
				break;
		}
		
		for (var col = current_col; col < 8; col++)
		{
			var this_cell = findAndPushCell(current_row, col);
			if (this_cell == 'out' || this_cell == 'friend')
				break;
		}
		
		for (var col = current_col; col >= 0; col--)
		{
			var this_cell = findAndPushCell(current_row, col);
			if (this_cell == 'out' || this_cell == 'friend')
				break;
		}
	}
	
	return cells;
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
		if (areEnemies(next_cell, selected_piece_id))
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
