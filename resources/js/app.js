/*
import './bootstrap';
import {createApp} from "vue";

import home from '../js/pages/home.vue';
import films from '../js/pages/films.vue';
import users from '../js/pages/users.vue';
import register from '../js/pages/register.vue'



createApp(home)
    .mount('#home')
createApp(films)
    .mount('#films')
createApp(users)
    .mount('#users')
createApp(register)
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
