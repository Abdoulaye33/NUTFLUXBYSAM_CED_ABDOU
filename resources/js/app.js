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
