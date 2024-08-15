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
            'black': '#000000',
            'wheat': '#FFF4E3',
            'sectionYellow': '#FFF4D4',
            'dangerColor' : '#ffc107',
            'customYellow': '#DA983C',
            'customLightYellow': '#E4B62B',
            'customGreen': '#8F9562',
            'customLightGreen': '#8ea16a',
            'customDarkGreen': '#495235',
            'customDarkerGreen': '#222911',
            'hoverCustomYellow': '#EFAE53',
            'hoverCustomGreen': '#A6AD76',
        },
        //GOOGLE FONTS
        fontFamily: {
            "poppins": ['Poppins', 'sans-serif'], 
            "playfair": ['Playfair Display', 'serif']
          },
    },

    plugins: [require('flowbite/plugin')],
};
