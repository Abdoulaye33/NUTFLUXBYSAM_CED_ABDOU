<template>
        <Header/>
        <router-view></router-view>
        <Footer/>

</template>




<script setup>
import Header from "./layout/Header.vue"

import Footer from "./layout/Footer.vue";


</script>

<style>
@import url("../css/scss/home.scss");
@import url("../css/scss/navbar.scss");
@import url("../css/scss/footer.scss");
</style>
