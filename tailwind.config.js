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
            }
        }
    },
    safelist: [
  'bg-[#8DB7E1]',
  'bg-[#8DB7E1]/45',
  'bg-[#8DB7E1]/60'
]

}
