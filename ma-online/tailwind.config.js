const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        screens: {
            'sm': '480px',
            'md': '768px',
            'lg': '976px',
            'xl': '1440px',
            '2xl': '1920px',
        },
        colors: {
            black: '#000',
            white: '#FFF',
            gray: {
                100: '#E5E5E5',
                200: '#CCC',
                300: '#545454',
                400: '#4F4F4F',
                800: '#211F20',
            },
            pink: '#EC148C',
            green: '#6AC39B',
            yellow: '#F8D56C',
        },
        extend: {
            fontFamily: {
                sans: ['Roboto', ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: theme => ({
                'hero-image': 'url("/images/hero-image.png")',
                'section-image': 'url("/images/section-image.png")',
            }),
        },
        borderWidth: {
            DEFAULT: '1px',
            '0': '0',
            '2': '2px',
            '3': '3px',
            '4': '4px',
            '6': '6px',
            '8': '8px',
            '10': '10px',
            '12': '12px',
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
