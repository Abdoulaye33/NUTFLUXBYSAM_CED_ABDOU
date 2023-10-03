<template>
    <div>
        <div v-for="film in movies" :key="film.id">
            <div class="FilmsCard">
                <h1>{{ film.title }}</h1>
                <div class="presentation">
                    <div class="Img">
                        <router-link :to="'/film/' + film.id">
                            <img :src="'https://image.tmdb.org/t/p/w500' + film.poster_path" class="affiche" :alt="film.title">
                        </router-link>
                    </div>
                    <div class="synopsisdiv">
                        <h3>Synopsis</h3>
                        <p class="synopsis">{{ film.overview }}</p>
                        <div class="casting">
                            <p v-for="actor in film.cast" :key="actor.name">Actor: {{ actor.name }}</p>
                            <a :href="'https://www.youtube.com/watch?v=' + film.video_id" target="_blank">
                                <img src="../../../public/img-nutflux/YouTube_play_button_icon_(2013–2017).svg.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';

const movies = ref([]);

onMounted(async () => {
    try {
        const response = await axios.get('https://api.themoviedb.org/3/discover/movie?include_adult=false&include_video=false&language=en-US&page=1&sort_by=popularity.desc', {
            headers: {
                Authorization: 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI0MmYzNWEyNWQwNGIxNTE1YzgyMTY2MzAyNDc0MzFkMSIsInN1YiI6IjY1MDE4YjgyNmEyMjI3MDBlMGYyYzQzYyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.NZAwvo5yIetvpQeOR94MhY6fzhiqMiw9JsyY4oDMS3k',
                Accept: 'application/json',
            },
        });

        // Transformez les données de l'API en un format approprié pour votre composant
        movies.value = response.data.results.map((movie) => ({
            id: movie.id,
            title: movie.title,
            poster_path: movie.poster_path,
            overview: movie.overview,
            cast: movie.cast, // Assurez-vous de remplacer par les données réelles du casting si elles sont disponibles dans l'API
            video_id: movie.video_id, // Assurez-vous de remplacer par les données réelles de la vidéo si elles sont disponibles dans l'API
        }));
    } catch (error) {
        console.error('Erreur lors de la récupération des films:', error);
    }
});
</script>



<style lang="scss">
@import url('../../css/scss/FilmsCard.scss');
</style>
