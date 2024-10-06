<template>
    <FadeTransition>
        <div v-if="product.id" key="1">
            <p class="font-text text-sm mb-10">
                <span class="pi pi-home before:text-sm"></span> /
                {{ product.category.title }}
            </p>
            <h2 class="text-3xl sm:text-4xl sm:text-start text-center mb-6">
                {{ product.title }}
            </h2>
            <div
                class="flex sm:flex-row flex-col sm:items-start items-center gap-5"
            >
                <div class="lg:max-w-96 sm:max-w-80 max-w-96">
                    <img :src="product.image_url" class="w-full" />
                </div>
                <div>
                    <h3 class="font-semibold text-xl sm:text-2xl mb-7">
                        <span
                            v-if="product.old_price"
                            class="line-through me-2"
                        >
                            {{ product.old_price.toFixed(2) }} ₴
                        </span>
                        {{ product.price.toFixed(2) }} ₴
                    </h3>
                    <Button icon="pi pi-shopping-cart" label="Купити" />
                </div>
            </div>
        </div>
        <Spinner v-else-if="!product.id && loading" key="2" size="7xl" />
        <p class="text-base sm:text-lg font-text" key="3" v-else>
            Нажаль, не вдалося завантажити товар.
        </p>
    </FadeTransition>
</template>

<script setup>
import axios from "axios";
import { onMounted, ref } from "vue";
import { useRoute } from "vue-router";

const route = useRoute();

const product = ref({});
const loading = ref(false);

function getProduct() {
    const id = route.params.id;
    const url = `${import.meta.env.VITE_API_URL}/product/${id}`;

    loading.value = true;
    axios
        .get(url)
        .then((response) => {
            product.value = response.data;
        })
        .catch((error) => {
            console.error(error);
        })
        .finally(() => {
            loading.value = false;
        });
}

onMounted(() => {
    getProduct();
});
</script>
