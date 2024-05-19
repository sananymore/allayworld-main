/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./main/*.html",
    "./main/content/*.html",
    "./main/*.php",
    "./main/**/*.php",
    "./main/assets/img/*.png",
    "./main/assets/js/*.js",
    "./main/assets/css/*.css"
  ],
  darkMode: 'class',
  theme: {
    extend: {
      fontFamily: {
        'sans': ['Montserrat', 'sans-serif'],
      },
      colors: {
        brand: {
          1: '#3D7DE0',
          2: '#B28CE1',
        },
      },
    },
  },
  plugins: [],
}