import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            screens: {
                '3xl': '1600px',
            },
            
        },
        colors: {
            'white': '#ffffff',
            'purple': '#3f3cbb',
            'greenButton': '#CAF14C',
            'customGreen': '#AED828',
            'redButton': '#D73E4A',
            'grey': '#DFDFDF',
            'midnight': '#121063',
            'metal': '#565584',
            'tahiti': '#3ab7bf',
            'silver': '#ecebff',
            'bubble-gum': '#ff77e9',
            'bermuda': '#78dcca',
        },
        fontFamily: {
            "poppins": ['Poppins', 'sans-serif'], 
            "playfair": ['Playfair Display', 'serif']// Tambahkan Google Font disini
          },
    },

    plugins: [require('flowbite/plugin')],
};
