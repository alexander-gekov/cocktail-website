module.exports = {
    purge: [
        './resources/views/**/*.blade.php',
        './resources/css/**/*.css',
    ],
    theme: {
        extend: {
            width: {
                '2/7': '28.5714286%',
                '128': '32rem',
                '136': '34rem',
                '1/8': '12.5%'
            },
            margin: {
                '-128': '-32rem'
            },
            fontFamily: {
                'display': ['Oswald',],
            }
        },
        linearGradientColors: {
            'orange-500-300': ['#ed8936', '#fbd38d']
        },
        radialGradientColors: theme => theme('colors'),
        conicGradientColors: theme => theme('colors'),
    },
    variants: {
        linearGradients: ['hover', 'responsive'],
    },
    plugins: [
        require('@tailwindcss/custom-forms'),
        require('tailwindcss-gradients'),
    ]
}
