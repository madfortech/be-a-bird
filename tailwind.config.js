const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                serif: ['Crimson Text'],
                serif: ['sans-serif'],
            },
        },
        screens: {
            sm: '480px',
            md: '768px',
            lg: '976px',
            xl: '1440px',
          },
    },

    corePlugins: {
        aspectRatio: false,
    },

    
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/aspect-ratio'),
    ],
};
