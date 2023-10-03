
import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';

import App from './app.vue';
import Films from '../js/pages/films.vue';
import Users from '../js/pages/users.vue';
import Register from '../js/pages/register.vue';
import home from '../js/Pages/home.vue';
import Dashboard from "@/Pages/Dashboard.vue";
import Login from "@/Pages/Auth/Login.vue";
import Series from "@/Pages/series.vue";
import film from "@/Pages/film.vue";

const router = createRouter({
    history: createWebHistory(), // Spécifiez ici la base URL de votre Laravel
    routes: [
        { path: '/', component: home },
        { path: '/films', component: Films },
        {path: '/series', component: Series},
        {path: '/film/:id' , component: film},
        { path: '/users', component: Users },
        { path: '/register', component: Register },
        {path: '/login', component: Login},
        {path: '/dashboard', component: Dashboard},
        // Ajoutez d'autres routes ici
    ],
});

const app = createApp(App);

app.use(router);

app.mount('#app');
