/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                mulish: ["Mulish"]
            },
            colors: {
                accentDark: '#1A1A1A',
                accentYellow: '#EDB220',
            },
            backgroundImage: {
                'background': "url(../images/background.png)",
                'form-bg' : "url(../images/form-bg.png)",
                'calculator' : "url(../images/calc_bg.png)",
            },
        },
    },
    plugins: [],
}

