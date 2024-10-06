import "./bootstrap";

import { createApp } from "vue";

import App from "./App.vue";

import router from "./router";

import PrimeVue from "primevue/config";
import { definePreset } from "@primevue/themes";
import Nora from "@primevue/themes/nora";

import "primeicons/primeicons.css";

import components from "./components/global";

const app = createApp(App);

app.use(router);

const Theme = definePreset(Nora, {
    semantic: {
        primary: {
            50: "{slate.50}",
            100: "{slate.100}",
            200: "{slate.200}",
            300: "{slate.300}",
            400: "{slate.400}",
            500: "{slate.500}",
            600: "{slate.600}",
            700: "{slate.700}",
            800: "{slate.800}",
            900: "{slate.900}",
            950: "{slate.950}",
        },
    },
});

app.use(PrimeVue, {
    theme: {
        preset: Theme,
    },
});

components.forEach((component) => {
    app.component(component.name, component.component);
});

app.mount("#app");
