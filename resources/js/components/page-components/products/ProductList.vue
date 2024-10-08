<template>
    <FadeTransition>
        <div
            class="grid 2xl:grid-cols-4 lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 justify-items-center gap-5"
            v-if="products.length"
            key="1"
        >
            <ProductCard
                v-for="(product, index) in products"
                :key="index"
                :product="product"
            />
        </div>
        <Spinner v-else-if="!products.length && loading" key="2" />
        <p key="3" v-else>Нажаль, не вдалося завантажити товари.</p>
    </FadeTransition>
</template>

<script setup>
import axios from "axios";
import { ref, watchEffect } from "vue";
import ProductCard from "./ProductCard.vue";

const props = defineProps({
    category: Number,
    sortBy: Object,
});

const products = ref([]);
const loading = ref(false);

function getProducts() {
    const url = `${import.meta.env.VITE_API_URL}/products`;
    const params = {
        category_id: props.category,
        order_by: props.sortBy.orderBy,
        order_direction: props.sortBy.orderDirection,
    };

    loading.value = true;
    axios
        .get(url, {
            params: params,
        })
        .then((response) => {
            products.value = response.data;
        })
        .catch((error) => {
            console.error(error);
        })
        .finally(() => {
            loading.value = false;
        });
}

watchEffect(() => {
    getProducts();
});
</script>
