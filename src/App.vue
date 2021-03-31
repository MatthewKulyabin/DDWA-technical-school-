<template>
  <NameInput @name="log" />
  <TicTacToe v-if="username" />
</template>

<script>
import TicTacToe from './components/TicTacToe.vue';
import NameInput from './components/NameInput.vue';

export default {
  name: 'App',
  components: {
    TicTacToe,
    NameInput,
  },
  data() {
    return {
      username: '',
    };
  },
  methods: {
    log(data) {
      this.username = data;
    }
  },
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
