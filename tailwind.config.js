/** @type {import('tailwindcss').Config} */
import plugin from "tailwindcss/plugin";

export default {
    content: ["./resources/**/*.{html,php,vue,js,ts,jsx,tsx}"],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Overpass", "sans-serif"],
                text: ["Montserrat", "sans-serif"],
            },
            backgroundImage: {
                header: "url('../images/header.jpg')",
            },
            textShadow: {
                sm: "0 0 2px var(--tw-shadow-color)",
                DEFAULT: "0 0 4px var(--tw-shadow-color)",
                lg: "0 0 8px var(--tw-shadow-color)",
            },
        },
    },
    plugins: [
        plugin(function ({ matchUtilities, theme }) {
            matchUtilities(
                {
                    "text-shadow": (value) => ({
                        textShadow: value,
                    }),
                },
                { values: theme("textShadow") }
            );
        }),
    ],
};
