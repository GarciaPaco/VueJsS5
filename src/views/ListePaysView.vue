<script setup>
import { onMounted, ref } from 'vue';
import axios from 'axios';
import CardPays from '../components/CardPays.vue';
let data = ref('');
const dataAll = ref();

onMounted(async () => {
  const response = await axios.get('countries.json')
  data.value = response.data
  // dataAll.value = data.value
});

</script>

<template>
  <div class="listePays">
  <h1>Pays</h1>
    <div class='cardFlex' v-for="pays in data.slice(0,10)" :key="pays.name.common">
      <CardPays :pays="pays.name.common" :capital="pays.capital" :drapeau="pays.flags.png" :population="pays.population" ></CardPays>
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