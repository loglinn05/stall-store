<template>
    <header class="w-full h-screen bg-header bg-center bg-cover bg-fixed">
        <div
            class="w-full h-screen bg-transparent flex justify-center items-end text-center"
        >
            <Navbar :changeColor="true" />
            <div
                class="max-w-full md:max-w-xl px-5 flex flex-col items-center gap-5 mb-14"
            >
                <h1
                    class="text-5xl sm:text-6xl text-white font-header font-bold text-shadow-lg shadow-black"
                >
                    Stall
                </h1>
                <h3
                    class="text-white font-header font-semibold text-shadow-lg shadow-black"
                >
                    Гаджети, подарунки та аксесуари, що дарують комфорт і
                    радість!
                </h3>
                <Button
                    label="Наші товари"
                    outlined
                    raised
                    class="w-fit"
                    pt:label:class="!text-white text-lg sm:text-xl text-shadow shadow-black"
                    @click="$router.push('/products')"
                />
            </div>
        </div>
    </header>
</template>

<script setup>
import Navbar from "./Navbar.vue";
</script>
