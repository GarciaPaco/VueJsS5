<script setup>
import { onMounted, ref } from 'vue';
import axios from 'axios';
import CardPays from '../components/CardPays.vue';
import "vue-search-select/dist/VueSearchSelect.css"
let data = ref('');
const dataAll = ref();
const recherche = ref('');

function filter() {
  data.value = dataAll.value.filter((pays) => {
        return pays.name.common.toLowerCase().includes(recherche.value.toLowerCase())
      }
  )}

onMounted(async () => {
  const response = await axios.get('countries.json')
  data.value = response.data
  dataAll.value = data.value
});
</script>

<template>
  <div class="listePays">
  <h1>Pays</h1>
    <label for="recherche">Rechercher un pays</label>
    <input v-model="recherche" @keydown="filter" type="text">
    <div class='cardFlex' v-for="pays in data.slice(0,10)" :key="pays.name.common">
      <CardPays :pays="pays.name.common" :capital="pays.capital" :drapeau="pays.cca2" :population="pays.population" ></CardPays>
    </div>

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