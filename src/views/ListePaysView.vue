<script setup>
const ListePays = [
  {Pays: "France"},
  {Pays: "Allemagne"},
  {Pays: "Espagne"},
  {Pays: "Italie"},
  {Pays: "Portugal"},
]
</script>

<template>
  <div class="listePays">
  <h1>Pays</h1>
  <ul>
    <li v-for="pays in ListePays" :key="Pays">
      <router-link :to="`/pays/${pays.Pays}`">{{pays.Pays}}</router-link>
    </li>
  </ul>
  </div>
</template>

<style scoped>
  h1 {
    color: red;
  }
  .listePays {
    display: flex;
    flex-direction: column;
    align-items: center;
    height: 100%;
    width: 100%;
    background-color: #f1f1f1;
  }
</style>