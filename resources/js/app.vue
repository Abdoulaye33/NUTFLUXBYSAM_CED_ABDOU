<template>
    <header>
        <nav class="navbar">
            <div class="logo">
                <router-link to="/"><img src="../../public/img-nutflux/logo.png" alt=""></router-link>
            </div>
            <div class="button-navbar">
                <button><router-link to="/films">Films</router-link></button>
                <button><router-link to="/series">Séries</router-link></button>
                <button>Cinéma</button>
            </div>
            <div class="inscription">
                <button><a href="/login">Login</a></button>
                <button><router-link to="/register">Register</router-link></button>
            </div>
        </nav>
        <router-view></router-view>
    </header>


    <footer>
        <div class="socialmedia">
            <h2>Reseau</h2>
            <ul>
                <li>Facebook</li>
                <li>Linkedin</li>
                <li>Github</li>
            </ul>
        </div>
        <div class="films">
            <h2>Films</h2>
            <ul>
                <li>Top 20</li>
                <li>News</li>
                <li>Catégories</li>
            </ul>
        </div>
        <div class="series">
            <h2>Series</h2>
            <ul>
                <li>Top 20</li>
                <li>Future sorties</li>
            </ul>
        </div>
        <div class="cinema">
            <h2>Cinema</h2>
            <ul>
                <li>Films à l'affiche</li>
            </ul>
        </div>
    </footer>

</template>




<script setup>

</script>

<style>
@import url("../css/scss/home.scss");
@import url("../css/scss/navbar.scss");
@import url("../css/scss/footer.scss");
</style>
