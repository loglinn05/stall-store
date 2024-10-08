<template>
    <FadeTransition>
        <Select
            v-if="categories.length"
            key="1"
            v-model="model"
            :options="categories"
            optionValue="id"
            optionLabel="title"
            placeholder="Оберіть категорію"
            class="w-64"
        />
        <Spinner
            v-else-if="!categories.length && loading"
            key="2"
            size="2rem"
        />
        <Select
            v-else
            disabled
            placeholder="Категорії недоступні"
            class="w-64"
            key="3"
        />
    </FadeTransition>
</template>

<script setup>
import axios from "axios";
import { onMounted, ref } from "vue";
import Select from "primevue/select";

const model = defineModel();
const loading = ref(false);

const categories = ref([]);

function getCategories() {
    const url = `${import.meta.env.VITE_API_URL}/categories`;
    const params = {
        category_id: model.value,
    };

    loading.value = true;
    axios
        .get(url, {
            params: params,
        })
        .then(function (response) {
            categories.value = response.data;
        })
        .catch((error) => {
            console.error(error);
        })
        .finally(() => {
            loading.value = false;
        });
}

onMounted(() => {
    getCategories();
});
</script>
