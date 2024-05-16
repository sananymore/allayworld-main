/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./main/*.html",
    "./main/**/*.html",
    "./main/*.php",
    "./main/**/*.php",
    "./main/assets/images/*.png",
    "./main/assets/scripts/*.js",
    "./main/assets/style/*.css"
  ],
  darkMode: 'class',
  theme: {
    extend: {
      fontFamily: {
        'sans': ['Montserrat', 'sans-serif'],
        'mono': ['Noto Sans Mono', 'monospace'],
      },
      screens: {
        'xs': '375px',
      },
    },
  },
  plugins: [],
}