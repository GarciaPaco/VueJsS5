<script setup>
defineProps(['pays', 'capital', 'drapeau', 'population']);

</script>

<template>

  <img :src="`../../public/images/${drapeau}.png`" alt="">
  <p>Pays : {{ pays }} </p>
  <p>Capital : {{ capital }}</p>
  <p>Population : {{ population }}</p>
  <router-link :to="'/fiche-pays/'+pays">Accéder aux détails du pays</router-link>
  <hr>

</template>

<style>

</style>
