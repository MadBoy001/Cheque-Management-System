import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

const colors = require("tailwindcss/colors");

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    darkMode: "media", // media for auto-system theme, else class
    theme: {
        screens: {
            sm: "480px",
            md: "768px",
            lg: "976px",
            xl: "1440px",
        },
        colors: {
            primary: {
                50: "#FDF2F2",
                100: "#FDE8E8",
                200: "#FBD5D5",
                300: "#F8B4B4",
                400: "#F98080",
                500: "#F05252",
                600: "#E02424",
                700: "#C81E1E",
                800: "#9B1C1C",
                900: "#771D1D",
                950: "#0E9F6E",
            },
            gray: colors.coolGray,
            blue: colors.lightBlue,
            red: colors.rose,
            pink: colors.fuchsia,
        },
        fontFamily: {
            sans: ["Graphik", "sans-serif"],
            serif: ["Merriweather", "serif"],
        },
        extend: {
            spacing: {
                128: "32rem",
                144: "36rem",
            },
            borderRadius: {
                "4xl": "2rem",
            },
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms, require("flowbite/plugin")],
};
