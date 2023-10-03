
<template>
    <header>
        <nav class="navbar">
            <div class="logo">
                <router-link to="/"><img src="../../../public/img-nutflux/logo.png" alt=""></router-link>
            </div>
            <div class="button-navbar">
                <button><router-link to="/films">Films</router-link></button>
                <button><router-link to="/series">Séries</router-link></button>
                <button>Cinéma</button>
            </div>
            <div class="inscription">
                <button><router-link to="/login">Login</router-link></button>
                <button><router-link to="/register">Register</router-link></button>
            </div>
        </nav>

    </header>
</template>
<script setup>

</script>

<style scoped lang="scss">
@import url("../../css/scss/home.scss");
@import url("../../css/scss/navbar.scss");
@import url("../../css/scss/footer.scss");
</style>
