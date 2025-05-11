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
                "sans": ["Inter", ...defaultTheme.fontFamily.sans]
            }
        }
    }
}