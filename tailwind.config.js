/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./resources/**/*.blade.php"],
    theme: {
        extend: {
            colors: {
                "teal-green": "#00AFC1",
            },
            fontFamily: {
                satoshi: ["Satoshi", "sans-serif"],
            },
        },
    },
    plugins: [],
};
