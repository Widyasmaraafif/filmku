import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                royalblue: "#4169e1",
                lavender: "#e6e6fa",
                honeydew: "#f0fff0",
                outerspace: "#414a4c",
                cornsilk: "#fff8dc",
                darkcyan: "#008b8b",
                iceberg: "#70a9c5",
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            transitionTimingFunction: {
                'custom-ease': 'cubic-bezier(0.47, 1.64, 0.41, 0.8)', // Custom easing kamu
            },
        },
    },
    plugins: [],
};
