<template>
    <navbar />
    <form action="{{ route('register') }}" method="POST">

        <label for="firstname">Firstname</label>
        <input type="text" name="firstname" placeholder="Firstname">
        <label for="lastname">Lastname</label>
        <input type="text" name="lastname" placeholder="Lastname">
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Email">
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Register</button>
    </form>



    <pied />
</template>




<script setup>
import navbar from '../components/navbar.vue'

import pied from "../components/pied.vue";
</script>
