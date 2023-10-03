<template>
    <div>
        <div class="FilmCard">
            <h1>{{ movie.title }}</h1>
            <div class="presentation">
                <div class="Img">
                    <img :src="'https://image.tmdb.org/t/p/w500' + movie.poster_path" class="affiche" :alt="movie.title">
                </div>
                <div class="synopsisdiv">
                    <h3>Synopsis</h3>
                    <p class="synopsis">{{ movie.overview }}</p>
                    <div class="casting">
                        <h3>Acteurs</h3>
                        <p v-for="actor in movie.cast" :key="actor.name">Actor: {{ actor.name }}</p>
                    </div>
                    <div class="video">
                        <a :href="'https://www.youtube.com/watch?v=' + movie.video_id" target="_blank">
                            <img src="../../../public/img-nutflux/YouTube_play_button_icon_(2013–2017).svg.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';

const movie = ref(null);

onMounted(async () => {
    try {
        const movieId = $route.params.id; // Récupérez l'ID du film depuis la route
        const response = await axios.get(`https://api.themoviedb.org/3/movie/${movieId}?language=en-US`, {

        headers: {
                Authorization: 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI0MmYzNWEyNWQwNGIxNTE1YzgyMTY2MzAyNDc0MzFkMSIsInN1YiI6IjY1MDE4YjgyNmEyMjI3MDBlMGYyYzQzYyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.NZAwvo5yIetvpQeOR94MhY6fzhiqMiw9JsyY4oDMS3k',
                Accept: 'application/json',
            },
        });

        // Transformez les données de l'API en un format approprié pour votre composant
        movie.value = {
            id: response.data.id,
            title: response.data.title,
            poster_path: response.data.poster_path,
            overview: response.data.overview,
            cast: response.data.cast, // Assurez-vous de remplacer par les données réelles du casting si elles sont disponibles dans l'API
            video_id: response.data.video_id, // Assurez-vous de remplacer par les données réelles de la vidéo si elles sont disponibles dans l'API
        };
    } catch (error) {
        console.error('Erreur lors de la récupération du film:', error);
    }
});
</script>

<style lang="scss">
@import url('../../css/scss/FilmSingleCard.scss');
</style>
