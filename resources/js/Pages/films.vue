<template>


<h1 class="title">Films</h1>
    <FilmsCard v-for="(card, index) in 5" :key="index"/>


</template>
<script setup>


import FilmsCard from "../components/FilmsCard.vue";
</script>
<style lang="scss">
.title{


    font-size: 4rem;
    color: #2d3748;
    font-family: Roboto;
   position: relative;
    &:after {
        content: ''; /* Contenu vide pour le pseudo-élément */
        display: block; /* Affiche le pseudo-élément en tant que bloc */
        border-bottom: 2px solid #000; /* Couleur et épaisseur de la bordure au choix */
        width: 50%; /* Longueur de la ligne (50% de la largeur de l'élément parent) */

    }
}
</style>
