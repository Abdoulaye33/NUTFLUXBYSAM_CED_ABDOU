/*
import './bootstrap';

import {createApp} from "vue";

import Home from './Pages/home.vue';
import Films from './Pages/films.vue';
import Users from './Pages/users.vue';
import Register from './Pages/register.vue'



createApp(Home)
    .mount('#home')
createApp(Films)
    .mount('#films')
createApp(Users)
    .mount('#users')
createApp(Register)
    .mount('#register')
*/
import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';

import App from './app.vue';
import Films from '../js/pages/films.vue';
import Users from '../js/pages/users.vue';
import Register from '../js/pages/register.vue';
import home from '../js/Pages/home.vue';

const router = createRouter({
    history: createWebHistory(), // Spécifiez ici la base URL de votre Laravel
    routes: [
        { path: '/', component: home },
        { path: '/films', component: Films },
        { path: '/users', component: Users },
        { path: '/register', component: Register },
        // Ajoutez d'autres routes ici
    ],
});

const app = createApp(App);

app.use(router);

app.mount('#app');
