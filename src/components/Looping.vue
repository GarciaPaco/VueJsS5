<script setup>
import { ref } from 'vue'
let awesome = ref(true)
</script>

<template>
  <button @click="awesome = !awesome">Basculer</button>
  <h2 v-if="awesome">Vue est magnifique!</h2>
  <h2 v-else>Oh non 😢</h2></template>

<style scoped>
h2 {
  color: blue;
}
button {
width: 120px;
  height: 40px;
}
</style>
