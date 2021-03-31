export default class Board {
	constructor() {
		this.cells = [
			['', '', ''],
			['', '', ''],
			['', '', ''],
		];
	}

	doMove(x, y, player) {
		if (player === 'o') {
			do {
				x = Math.floor(0 + Math.random() * (2 + 1 - 0));
				y = Math.floor(0 + Math.random() * (2 + 1 - 0));
			} while (this.cells[x][y] !== '')
			
			this.cells[x][y] = player;
			return true;
		}
		if (this.cells[x][y] !== '') {
			return false;
		}
		this.cells[x][y] = player;
		return true;
	}

	getScore() {
		let score = 0;
		if (this.playerHas3InARow('x')) {
			score -= 100;
		}
		if (this.playerHas3InARow('o')) {
			score += 100;
		}
		return score;
	}

	playerHas3InARow(player) {
		// Horizontal rows
		for (let i = 0; i < 3; i++) {
			if (this.cells[0][i] === player 
				&& this.cells[1][i] === player
				&& this.cells[2][i] === player
			) {
				return true;
			}
		}
		// Vertical rows
		for (let i = 0; i < 3; i++) {
			if (this.cells[i][0] === player
				&& this.cells[i][1] === player
				&& this.cells[i][2] === player
			) {
				return true;
			}
		}
		// Diagonals
		if (this.cells[0][0] === player
				&& this.cells[1][1] === player
				&& this.cells[2][2] === player
			) {
			return true;
		}
		if (this.cells[2][0] === player
				&& this.cells[1][1] === player
				&& this.cells[0][2] === player
			) {
			return true;
		}
	}

	isGameOver() {
		return this.getPossibleMoves().length === 0
			|| this.playerHas3InARow('x')
			|| this.playerHas3InARow('o') 
	}

	getPossibleMoves() {
		let moves = [];
		for (let i = 0; i < 3; i++) {
			for (let j = 0; j < 3; j++) {
				if (this.cells[i][j] === '') {
					moves.push({x: i, y: i})
				}
			}
		}
		return moves;
	}
};
