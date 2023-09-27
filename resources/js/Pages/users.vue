<template>
    <div>
        <h1>Liste des Utilisateurs</h1>
        <ul>
            <li v-for="user in users" :key="user.id">{{ user.firstname }} {{ user.lastname }}</li>
        </ul>
    </div>
</template>




<script>
import { ref, onMounted } from 'vue';
import axios from 'axios';

export default {
    setup() {
        const users = ref([]);

        onMounted(() => {
            // Chargez les utilisateurs depuis Laravel via Axios
            axios.get('/users')
                .then(response => {
                    users.value = response.data; // Assurez-vous d'accéder à la valeur de ref
                })
                .catch(error => {
                    console.error('Erreur lors de la récupération des utilisateurs :', error);
                });
        });

        return {
            users, // Renvoyez users depuis le setup
        };
    },
};
</script>
