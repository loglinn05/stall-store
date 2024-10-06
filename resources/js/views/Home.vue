<template>
    <div
        class="after:content-[' '] after:block after:h-0 after:clear-both mb-14"
    >
        <h1 class="text-4xl sm:text-5xl mb-14">Трішечки про мене</h1>
        <div>
            <div class="lg:w-80 md:w-64 w-full float-left mr-5 md:mb-0 mb-5">
                <img
                    src="../../images/home-main-content/my-photo.png"
                    class="w-full h-full object-cover"
                />
            </div>
            <p class="text-base sm:text-lg font-text">
                Мене звуть Ангеліна, я - Full Stack розробниця на Vue.js 3 та
                Laravel (8-11) з міцною основою в створенні адаптивних та
                динамічних вебзастосунків. Я здатна створити адаптивні
                інтерфейси за допомогою різних інструментів та технологій: HTML
                5, CSS 3, Tailwind, Bootstrap, Materialize, JavaScript, JQuery,
                Vue.js 3 та PrimeVue UI Kit. Для програмування логіки на бекенді
                можу використовувати чистий PHP та Laravel. З СКБД користуюся
                MySQL. Користуюся Git. Маю акаунт в GitHub:
                https://github.com/loglinn05. Моя англійська десь на середньому
                рівні. Я дивлюся фільми та роблю контент для сайтів цією мовою.
                Також цього року я заочно закінчила університет за спеціальністю
                "Комп'ютерна інженерія". Знизу просто додам декілька картинок
                для заповнення головної сторінки. 😋
            </p>
        </div>
    </div>
    <Galleria
        :value="images"
        :circular="true"
        :pt="passThrough"
        :showThumbnails="false"
        :showIndicators="true"
        :showItemNavigators="showNavs"
        :autoPlay="true"
        :transitionInterval="5000"
    >
        <template #item="slotProps">
            <div class="w-full lg:h-[80vh] h-[50vh]">
                <img
                    :src="slotProps.item.itemImageSrc"
                    :alt="slotProps.item.alt"
                    class="!w-full !h-full object-cover"
                />
            </div>
        </template>
    </Galleria>
    <h2 class="mt-10 text-3xl sm:text-4xl mb-14">
        На тестове витрачено чотири дні.
        <span class="pi pi-clock before:text-2xl"></span>
    </h2>
</template>

<script setup>
import { ref, computed, mergeProps } from "vue";
import Galleria from "primevue/galleria";
import img1 from "../../images/home-main-content/1.jpg";
import img2 from "../../images/home-main-content/2.jpg";
import img3 from "../../images/home-main-content/3.jpg";
import img4 from "../../images/home-main-content/4.jpg";

const passThrough = {
    root: {
        class: "w-full mx-auto",
    },
};

const images = ref([
    {
        itemImageSrc: img1,
        alt: "Картинка 1",
    },
    {
        itemImageSrc: img2,
        alt: "Картинка 2",
    },
    {
        itemImageSrc: img3,
        alt: "Картинка 3",
    },
    {
        itemImageSrc: img4,
        alt: "Картинка 4",
    },
]);

const showNavs = computed(() => {
    if (window.screen.width < 640) {
        return false;
    } else {
        return true;
    }
});
</script>
