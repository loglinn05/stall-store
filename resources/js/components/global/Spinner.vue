<template>
    <span
        class="pi pi-spin pi-spinner before:text-slate-600"
        :style="'font-size: ' + size"
    >
    </span>
</template>

<script setup>
const props = defineProps({
    size: {
        type: String,
        default: "5rem",
    },
});
</script>
