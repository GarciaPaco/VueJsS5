<script setup>
import { RouterLink, RouterView } from 'vue-router'
import Looping from "@/components/Looping.vue";
import Moyenne from './components/Moyenne.vue'
import Notation from "@/components/Notation.vue";
import PaysView from "@/views/ListePaysView.vue";

</script>

<template>
  <header>
    <div class="wrapper">
      <nav>
        <RouterLink to="/">Home</RouterLink>
        <RouterLink to="/about">About</RouterLink>
        <RouterLink to="/pays">Pays</RouterLink>
        <router-view></router-view>
      </nav>
    </div>
  </header>

<!--  <Notation />-->
<!--  <Looping />-->
<!--  <Moyenne />-->

</template>

<style scoped>



nav {
  width: 100%;
  font-size: 12px;
  text-align: center;
  margin-top: 2rem;
}


nav a.router-link-exact-active:hover {
  background-color: transparent;
}

nav a {
  display: inline-block;
  padding: 0 1rem;
}

nav a:first-of-type {
  border: 0;
}

  nav {
    text-align: left;
    margin-left: -1rem;
    font-size: 1rem;

    padding: 1rem 0;
    margin-top: 1rem;
  }

</style>
