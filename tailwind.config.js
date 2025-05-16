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
                'custom-blue': '#8DB7E1',
            }
        }
    }
}
