let board = [
    ['', '', ''],
    ['', '', ''],
    ['', '', '']
];
let currentPlayer = 'X';

function play(row, col) {
    if (board[row][col] === '') {
        board[row][col] = currentPlayer;
        document.getElementsByTagName('td')[row * 3 + col].innerText = currentPlayer;
        currentPlayer = currentPlayer === 'X' ? 'O' : 'X';
        saveGame(board);
    }
}

function saveGame(board) {
    fetch('save.php', {
        method: 'POST',
        body: JSON.stringify({board: board}),
        headers: { 'Content-Type': 'application/json' }
    });
}