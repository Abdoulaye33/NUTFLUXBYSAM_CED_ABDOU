<template>


<h1>Films</h1>
    <FilmsCard v-for="(card, index) in 5" :key="index"/>


</template>
<script setup>


import FilmsCard from "../components/FilmsCard.vue";
</script>
