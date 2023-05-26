/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme');

export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    container:{
      center: true,
    },
    extend: {
      fontFamily: {
        sans: ['Poppins', ...defaultTheme.fontFamily.sans],
        title: 'Roboto'
      },
      colors: {
        primary: '#f97316',
        secondary: '#94a3b8'
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

