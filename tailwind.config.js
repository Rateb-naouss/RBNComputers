import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
import withMT from "@material-tailwind/html/utils/withMT";

export default withMT( {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
  
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            keyframes:{
                moveRight:{
                    "0%":{transform: "translateX(0)"},
                    "50%":{transform: "translateX(10px)"},
                    "100%":{transform: "translateX(0)"},
                },
            },
            animation:{
                moveRight: "moveRight 1s ease-in-out infinite",
            },
        },
    },
    plugins: [
        
    ],
});
