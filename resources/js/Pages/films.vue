<template>
    <navbar />

<h1>Films</h1>
    <FilmsCard v-for="(card, index) in 3" :key="index"/>

    <pied />
</template>
<script setup>
import navbar from "../layout/navbar.vue";
import pied from "../layout/pied.vue";
import FilmsCard from "../components/FilmsCard.vue";
</script>
