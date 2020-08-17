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
            },
            colors: {
                'bg-semi-75': 'rgba(0, 0, 0, 0.75)'
            }
        },
        linearGradientColors: {
            'orange-500-300': ['#ed8936', '#fbd38d']
        },
        radialGradientColors: theme => theme('colors'),
        conicGradientColors: theme => theme('colors'),
        spinner: (theme) => ({
            default: {
                color: '#dae1e7', // color you want to make the spinner
                size: '1em', // size of the spinner (used for both width and height)
                border: '2px', // border-width of the spinner (shouldn't be bigger than half the spinner's size)
                speed: '500ms', // the speed at which the spinner should rotate
            },
        }),
    },
    variants: {
        linearGradients: ['hover', 'responsive'],
        borderRadius: ['responsive', 'hover', 'focus'],
    },
    plugins: [
        require('@tailwindcss/custom-forms'),
        require('tailwindcss-gradients'),
        require('tailwindcss-spinner')(),
    ]
}
