//this function will run after timer end
function startGame(base_url)
{
	setBoardColor('blue');
	//initLocations(base_url);
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
	ev.dataTransfer.setData("mohra", ev.target.id);
}

function drop(ev) 
{
	ev.preventDefault();
	var data = ev.dataTransfer.getData("mohra");
	ev.target.appendChild(document.getElementById(data));
}

//this function will initialize the pawns locations
function initLocations(base_url)
{
	var tblChessboard = document.getElementById('tblChessboard');
	var row = 0;
	var col = 0;
	//making empty cells
	for(row= 0; row < 8; row++)
		for(col = 0; col < 8; col++)
			tblChessboard.rows[row].cells[col].innerHTML = '';

	//setting black pawns
	for (col = 0; col < 8; col++)
		tblChessboard.rows[1].cells[col].innerHTML = '<img height="30px" src="' + base_url + 'assets/img/pawns/bP.png" />';
	
	tblChessboard.rows[0].cells[0].innerHTML = '<img height="30px" src="' + base_url + 'assets/img/pawns/bR.png">';
	tblChessboard.rows[0].cells[1].innerHTML = '<img height="30px" src="' + base_url + 'assets/img/pawns/bN.png">';
	tblChessboard.rows[0].cells[1].innerHTML = '<img height="30px" src="' + base_url + 'assets/img/pawns/bB.png">';
} 