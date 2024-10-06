<template>
    <div
        class="flex sm:flex-row flex-col gap-10 mb-10 lg:justify-start justify-center items-center"
    >
        <SortSelect v-model="sortBy" />
        <CategorySelect v-model="category" />
    </div>
    <ProductList :category="category" :sortBy="sortBy" />
</template>

<script setup>
import { ref } from "vue";
import CategorySelect from "../components/page-components/products/CategorySelect.vue";
import SortSelect from "../components/page-components/products/SortSelect.vue";
import ProductList from "../components/page-components/products/ProductList.vue";

const category = ref();
const sortBy = ref({});
</script>
