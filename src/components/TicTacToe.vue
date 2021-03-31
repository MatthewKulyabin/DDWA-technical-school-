<template>
  <div class="tictactoe-board">
    <div v-for="(n, i) in 3">
      <div v-for="(n, j) in 3">
        <Cell
          @click="performeMove(i, j)"
          v-bind:value="board.cells[i][j]"
        />
      </div>
    </div>
    <div class="game-over-text" v-if="gameOver">
      {{ gameOverText }}
    </div>
  </div>
</template>

<script>
import Cell from './Cell';
import Board from '../core/Board';

console.log(new Board().cells);

export default {
  name: 'TicTacToe',
  components: {
    Cell,
  },
  data() {
    return {
      gameOver: false,
      gameOverText: '',
      board: new Board(),
    };
  },
  methods: {
    performeMove(x, y) {
      if (!this.board.doMove(x, y, 'x')) {
        return;
      }
      this.$forceUpdate();

      if (this.board.isGameOver()) {
        this.gameOver = true;
        this.gameOverText = this.board.playerHas3InARow('x') ? 'You win!' : 'Draw';
        return;
      }

      this.board.doMove(0, 0, 'o');

      if (this.board.isGameOver()) {
        this.gameOver = true;
        this.gameOverText = this.board.playerHas3InARow('o') ? 'You lose' : 'Draw';
      }

      this.$forceUpdate();
    }
  },
}
</script>

<style>
  .tictactoe-board {
    display: flex;
    flex-wrap: wrap;
    width: 204px;
    height: 204px;
  }
</style>
