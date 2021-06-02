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
            green: {
                100: '#6AC39B',
                200: '#479989',
            },
            yellow: '#F8D56C',
            red: '#FF0000',
        },
        boxShadow: {
            sm: '0 1px 2px 0 rgba(0, 0, 0, 0.05)',
            DEFAULT: '0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06)',
            md: '0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)',
            lg: '0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)',
            xl: '0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)',
            'footer': '0 20px 25px 5px rgba(236, 20, 140, 1), 0 10px 10px -5px rgba(236, 20, 140, 1)',
            '2xl': '0 25px 50px -12px rgba(0, 0, 0, 0.25)',
           '3xl': '0 35px 60px -15px rgba(0, 0, 0, 0.3)',
            inner: 'inset 0 2px 4px 0 rgba(0, 0, 0, 0.06)',
            none: 'none',
        },
        extend: {
            fontFamily: {
                sans: ['Roboto', ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: theme => ({
                'hero-image': 'url("/images/hero-image.png")',
                'section-image': 'url("/images/section-image.png")',
            }),
            width: {
                '90': '90%',
                '110': '110%',
            },
            margin: {
                ham: '7px',
                sm: '8px',
                md: '16px',
                lg: '24px',
                xl: '48px',
            },
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
        fontFamily: {
            'helvetica-bld': 'Helvetica-Neue-Bld',
            'helvetica-med': 'Helvetica-Neue-Med',
            'helvetica-med-it': 'Helvetica-Neue-Med-It',
            'helvetica-rom': 'Helvetica-Neue-Rom',
            'rock-salt': 'Rock-Salt',
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
