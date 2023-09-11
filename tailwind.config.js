import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                jost: ['Jost', 'Helvetica', 'Arial', 'sans-serif']
            },
            colors: {
                'theme': '#ee0000'
            },
            animation: {
                bounceSlow: 'bounceSlow .98s ease infinite alternate',
            },
            keyframes: {
                bounceSlow: {
                    '0%': { transform: 'translateY(0px)' },
                    '100%': { transform: 'translateY(-8px)' },
                }

            },
        },
        container: {
            center: true,
            padding: '1rem',
            screens: {
                '2xl': '1280px',
            }
        },
    },

    plugins: [forms],
};
