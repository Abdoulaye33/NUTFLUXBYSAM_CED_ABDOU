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
