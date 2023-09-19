<script setup>
import { computed } from 'vue'
const note1 = 18
const note2 = 16
const note3 = 14

const moyenne = computed(() => {
  return (note1 + note2 + note3) / 3
})
</script>

<template>
<h1>Ma moyenne : {{moyenne}}</h1>
</template>

<style scoped>
h1 {
  color: red;
}
</style>
