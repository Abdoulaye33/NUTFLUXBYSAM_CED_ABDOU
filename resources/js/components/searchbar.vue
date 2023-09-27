<script setup>

</script>

<template>
    <div class="searchbar">
        <input
            type="text"
            v-model="searchQuery"
            placeholder="Rechercher..."
        />
    </div>
</template>

<style scoped lang="scss">
.searchbar{
    margin-top: 1rem;
    input{
        margin-left: 2rem;
        width: 90%;
        border: 2px solid black;
        border-radius: 2rem;
        background-color:#AEC3B0;

    }
}

</style>
