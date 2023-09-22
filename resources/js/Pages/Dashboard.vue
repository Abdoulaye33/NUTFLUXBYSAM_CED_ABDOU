<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

defineProps({
    firstname: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>

        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>
        <div class="myfavoritefilm">
            <h2>Bonjour {{ firstname }}</h2> <!-- Affiche le message de bienvenue avec le prénom de l'utilisateur -->
            <h2>My Favorites films</h2>
            <ol>
                <li>
                    Alien
                </li>
            </ol>
        </div>
    </AuthenticatedLayout>
</template>
