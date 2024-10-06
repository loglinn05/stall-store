<template>
    <Menubar
        :model="items"
        :ptOptions="{ mergeProps: true }"
        :pt="passThrough"
        :pt:root:class="navbarColor"
        :pt:rootList:class="navbarColor"
    >
        <template #start>
            <img src="../../../images/logo.png" alt="Stall logo" class="h-10" />
        </template>
        <template #item="{ item }">
            <router-link
                :to="item.route"
                class="inline-block text-white font-bold text-shadow shadow-black"
            >
                <span :class="item.icon" class="me-1"></span>
                {{ item.label }}
            </router-link>
        </template>
    </Menubar>
</template>

<script setup>
import { ref, computed } from "vue";
import Menubar from "primevue/menubar";

const props = defineProps({
    changeColor: Boolean,
});

const scrolled = ref(false);

window.addEventListener("scroll", () => {
    if (window.scrollY > 200) {
        scrolled.value = true;
    } else {
        scrolled.value = false;
    }
});

const passThrough = ref({
    root: {
        class: "!fixed top-0 left-0 right-0 my-0 py-1 px-3 !rounded-none !border-none text-base sm:text-lg z-[1001]",
    },
    rootList: {
        class: "min-[961px]:!bg-transparent !bg-slate-300 !border-none",
    },
    start: {
        class: "me-3",
    },
    menu: {
        class: "w-full max-w-screen-2xl bg-transparent",
    },
    item: {
        class: "me-3",
    },
    itemContent: {
        class: "p-1 pb-0.5",
    },
    icon: {
        class: "m-0",
    },
    button: {
        class: "ms-auto",
    },
});

const navbarColor = computed(() => {
    if (props.changeColor) {
        return scrolled.value ? "!bg-slate-300" : "!bg-transparent";
    } else {
        return "!bg-slate-300";
    }
});

const items = [
    {
        label: "Головна",
        icon: "pi pi-home",
        route: "/",
    },
    {
        label: "Товари",
        icon: "pi pi-apple",
        route: "/products",
    },
];
</script>
