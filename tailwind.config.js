const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    content: ["./**/*.php", "./src/**/*.js", "./node_modules/flowbite/**/*.js"],
    plugins: [
        require("@tailwindcss/typography"),
        require("flowbite/plugin")
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Montserrat', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'blue-main': '#8DB7E1',
                'yellow-main': '#FDD576',
            }
        }
    }
}
