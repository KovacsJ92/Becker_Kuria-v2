const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    // mode: 'jit',
    theme: {
        extend: {
            colors: {
                'blue55': '#0f2755',
                'gold': '#c49c4a',
                'gold99': '#996515',
                'gray33': '#333333',
                'gray1e': '#1e222b',
                'gray20': '#20211f',
                'graya3': '#a3a3a3',
                'gray47': '#474747',
                'whitef8': '#f8f8f8'
            },

            height: {
                'header': '80rem',
                '112': '28rem'
            },

            width: {
                '156': '39rem',
                '200': '50rem'
            },

            margin: {
                '200': '50rem'
            },

            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    variants: {
        extend: {
            backgroundColor: ['active'],
        }
    },
    purge: {
        content: [
            './app/**/*.php',
            './resources/**/*.html',
            './resources/**/*.js',
            './resources/**/*.jsx',
            './resources/**/*.ts',
            './resources/**/*.tsx',
            './resources/**/*.php',
            './resources/**/*.vue',
            './resources/**/*.twig',
        ],
        options: {
            defaultExtractor: (content) => content.match(/[\w-/.:]+(?<!:)/g) || [],
            whitelistPatterns: [/-active$/, /-enter$/, /-leave-to$/, /show$/],
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
};