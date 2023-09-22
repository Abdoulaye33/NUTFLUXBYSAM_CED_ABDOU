<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>
        <div class="myfavoritefilm">
            <h2>My Favorites films</h2>
            <ol>
                <li>
                    Alien
                </li>
            </ol>
        </div>
    </AuthenticatedLayout>
</template>
