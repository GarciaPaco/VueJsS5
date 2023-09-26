<script setup>
import { useRoute } from 'vue-router'
import { onMounted, ref } from 'vue';
import axios from 'axios';

let data = ref('');
const route = useRoute();
const pays = route.params.pays;

onMounted(async () => {
  const response = await axios.get('https://restcountries.com/v3.1/name/'+pays)
  data.value = response.data
});

</script>
<template>
  <div class="dataPays" v-if="data">
    <h1>{{ data[0].translations.fra.common }}</h1>
    <img :src="data[0].flags.png" alt="">
    <p>Région : {{ data[0].region}}</p>
    <p>Capitale : {{ data[0].capital[0]}}</p>
    <p>Langue : <span v-for="langue in data[0].languages" :key="langue">{{ langue }}&nbsp;</span></p>
    <p>Monnaie : <span v-for="monnaie in data[0].currencies" :key="monnaie">{{ monnaie.name }}</span></p>
  </div>
  <div v-else>
    <h1>Loading...</h1>
  </div>
</template>



<style>
.dataPays {
  margin-left : 30px;
}
</style>