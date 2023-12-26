/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        'bg-blue' : '#F0F6FF',
        'p-red' : '#F50057',
        's-pink' : '#FF94BA',
        's-yellow' : '#FFCB00'
      }
    },
  },
  plugins: [],
}

