/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./index.html",
        "./resources/**/*.{js,ts,jsx,tsx}",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                poppins:['Poppins', 'sans-serif'],
            },
            height: {
                header: '560px',
                rate: '400px',
            },
            fontSize: {
                h1: '2.6rem',
            },
            screens: {
                xs: '475px',
            },
            colors: {
                merah: "#F20000",
                biru: "#080A1A",
                abu: "#181818",
                alerange: "#FB6908",
                "gray-1": "#B4B4B4",
                "gray-2": "#E2E0E0",
                "form-bg": "#212121",
            },
            screens: {
                laptopLg: "1160px",
                laptopXl: "1360px",
            },
        },
    },
    plugins: [require("flowbite/plugin")],
    plugins: [require("daisyui")],
};