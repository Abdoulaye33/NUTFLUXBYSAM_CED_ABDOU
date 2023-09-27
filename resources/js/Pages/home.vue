<template>
    <navbar />
    <searchbar/>
    <presentation_nutflux/>


    <pied />
</template>




<script setup>
import navbar from '../layout/navbar.vue'
import pied from "../layout/pied.vue";
import Searchbar from "@/components/searchbar.vue";
import Presentation_nutflux from "@/components/presentation_nutflux.vue";
</script>

<style>
@import url("../../css/scss/home.scss");
</style>
