<template>
    <div
        class="relative flex flex-col border border-solid border-slate-200 bg-white rounded-lg lg:max-w-full max-w-96"
    >
        <div
            class="absolute top-0 left-0 bottom-0 right-0 hover:bg-slate-100/[0.3] transition-all duration-500 z-10 cursor-pointer"
            @click="showProduct(props.product.id)"
        ></div>
        <img :src="props.product.image_url" class="rounded-t-lg max-w-full" />
        <div class="flex flex-col grow p-3">
            <h3 class="text-lg sm:text-xl mb-7">
                {{ props.product.title }}
            </h3>
            <div class="mt-auto font-semibold text-lg sm:text-xl mb-5">
                <span v-if="props.product.old_price" class="line-through me-2">
                    {{ props.product.old_price.toFixed(2) }} ₴
                </span>
                {{ props.product.price.toFixed(2) }} ₴
            </div>
            <Button
                icon="pi pi-shopping-cart"
                label="Купити"
                class="mt-0 w-fit z-20"
            />
        </div>
    </div>
</template>

<script setup>
import { ref } from "vue";
import { useRouter } from "vue-router";

const router = useRouter();

const props = defineProps({
    product: Object,
});

function showProduct(id) {
    router.push(`/product/${id}`);
}
</script>
