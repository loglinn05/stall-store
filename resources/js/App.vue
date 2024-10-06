<template>
    <Header />
    <main class="max-w-screen-2xl mx-auto py-28 md:px-28 sm:px-14 px-5">
        <router-view></router-view>
    </main>
    <Footer />
</template>

<script setup>
import Header from "./components/layout/Header.vue";
import Footer from "./components/layout/Footer.vue";
</script>
