/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                poppins: ['Poppins', 'sans-serif'],
                playfair: ['Playfair Display', 'serif'],
            },
            colors: {
                brown: {
                    800: '#3c2f2f',
                },
                kopi: '#d2b48c',
            },
        },
    },
    plugins: [],
}
