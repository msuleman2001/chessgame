

//this function will run after timer end
function startGame(base_url)
{
	setBoardColor('blue');
}

//this function will setup the color of board
function setBoardColor(color)
{
	var tblChessboard = document.getElementById('tblChessboard');
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
	var current_row = ev.target.parentElement.id[1];
	var current_col = ev.target.parentElement.id[2];
	var piece_type = getPiece(ev.target.id);
	var allowed_cells[] = generateAllowedCells(piece_type, current_row, current_col);
	ev.dataTransfer.setData("piece", ev.target.id);
}

function drop(ev) 
{
	ev.preventDefault();
	var data = ev.dataTransfer.getData("piece");
	ev.target.appendChild(document.getElementById(data));
}

function getPiece(piece_id)
{
	if (piece_id[1] == 'P')
		return 'pawn';
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

function generateAllowedCells(piece_type, current_row, current_col)
{
	
}