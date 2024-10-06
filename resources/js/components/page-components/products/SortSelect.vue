<template>
    <Select
        v-model="model"
        :options="sortOptions"
        optionValue="parameters"
        optionLabel="label"
        placeholder="Сортувати за"
        class="w-64"
    />
</template>

<script setup>
import { ref } from "vue";
import Select from "primevue/select";

const model = defineModel();

const sortOptions = ref([
    {
        label: "Спочатку нові",
        parameters: {
            orderBy: "created_at",
            orderDirection: "desc",
        },
    },
    {
        label: "Спочатку старі",
        parameters: {
            orderBy: "created_at",
            orderDirection: "asc",
        },
    },
    {
        label: "Спочатку дешевші",
        parameters: {
            orderBy: "price",
            orderDirection: "asc",
        },
    },
    {
        label: "Спочатку дорожчі",
        parameters: {
            orderBy: "price",
            orderDirection: "desc",
        },
    },
]);
</script>
