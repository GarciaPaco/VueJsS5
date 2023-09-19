<script setup>
import { RouterLink, RouterView } from 'vue-router'
import Looping from "@/components/Looping.vue";
import HelloWorld from './components/HelloWorld.vue'
import Moyenne from './components/Moyenne.vue'
const symfony = 16;
const datas = {vue:16};
const notes = [
  {subject: "Anglais", note: 11},
  {subject: "Symfony", note: 16},
  {subject: "VueJS", note: 7},
  {subject: "PHP", note: 14},
  {subject: "Javascript", note: 9},
];

</script>

<template>
  <header>
    <img alt="Vue logo" class="logo" src="@/assets/logo.svg" width="125" height="125" />
    <div class="wrapper">
      <HelloWorld msg="You did it!" />
      <nav>
        <tr v-for="note in notes" >
          <div class="loop" v-if="note.note > 10">
          <h4>Note supérieur à 10</h4>
          <td>{{note.subject}} : </td>
          <td>{{note.note}} : </td>
          </div>
          <div class="loop"  v-else>
          <h4>Note inférieur à 10</h4>
          <td>{{note.subject}} : </td>
          <td>{{note.note}} : </td>
          </div>
        </tr>
      <div class="loop" >
        <p>Anglais : 10</p>
        <p>Symfony : {{symfony}}</p>
        <p>VueJS : {{datas.vue}}</p>
      </div>
      </nav>
    </div>
  </header>
  <Looping />
  <Moyenne />
</template>

<style scoped>
.loop {
  background-color: lightcoral;
  padding: 10px;
  color: black;
  border: #222222 solid 1px;
  border-radius: 7px;
  margin: 15px;
}
header {
  line-height: 1.5;
  max-height: 100vh;
}

.logo {
  display: block;
  margin: 0 auto 2rem;
}

nav {
  width: 100%;
  font-size: 12px;
  text-align: center;
  margin-top: 2rem;
}

nav a.router-link-exact-active {
  color: var(--color-text);
}

nav a.router-link-exact-active:hover {
  background-color: transparent;
}

nav a {
  display: inline-block;
  padding: 0 1rem;
  border-left: 1px solid var(--color-border);
}

nav a:first-of-type {
  border: 0;
}

@media (min-width: 1024px) {
  header {
    display: flex;
    place-items: center;
    padding-right: calc(var(--section-gap) / 2);
  }

  .logo {
    margin: 0 2rem 0 0;
  }

  header .wrapper {
    display: flex;
    place-items: flex-start;
    flex-wrap: wrap;
  }

  nav {
    text-align: left;
    margin-left: -1rem;
    font-size: 1rem;

    padding: 1rem 0;
    margin-top: 1rem;
  }
}
</style>
