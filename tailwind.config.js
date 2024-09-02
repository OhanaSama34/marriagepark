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
            animation: {
                'infinite-scroll': 'infinite-scroll 25s linear infinite',
            },
            keyframes: {
                'infinite-scroll': {
                    from: { transform: 'translateX(0)' },
                    to: { transform: 'translateX(-100%)' },
                }
            },
            screens: {
                '3xl': '1600px',
            },
            
        },
        //COLOR PALLET
        colors: {
            'white': '#ffffff',
            'black': '#1D1D1D',
            'oliveGreen': '#5D693D',
            'lightOliveGreen': '#859756',
            'customOrange': '#B06730',
            'lightOrange': '#E49051',
            'lightBeige': '#EBE1BD',
            'whiteLightBeige': '#FBF4D9',
            'wheat': '#FFF6E7',
        },
        //GOOGLE FONTS
        fontFamily: {
            "poppins": ['Poppins', 'sans-serif'], 
            
            "zain": ['Zain', 'sans-serif'],
            
          },
    },

    plugins: [require('flowbite/plugin')],
};
