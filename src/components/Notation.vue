<script setup>
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
  <tr v-for="note in notes" >
    <div class="loop" v-if="note.note > 10">
      <h4>Note supérieur à 10</h4>
      <td>{{note.subject}} : </td>
      <td>{{note.note}}</td>
    </div>
    <div class="loop"  v-else>
      <h4>Note inférieur à 10</h4>
      <td>{{note.subject}} : </td>
      <td>{{note.note}}</td>
    </div>
  </tr>
  <div class="loop" >
    <p> Note en dur : </p>
    <p>Anglais : 10</p>
    <p>Symfony : {{symfony}}</p>
    <p>VueJS : {{datas.vue}}</p>
  </div>
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
</style>
