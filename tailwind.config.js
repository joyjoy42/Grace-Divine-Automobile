/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./resources/css/**/*.css",
    "../../vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    "../../storage/framework/views/*.php",
  ],
  theme: {
    extend: {
      colors: {
        'garage-navy': '#0B1E3B',
        'garage-gold': '#F2C94C',
        'garage-red': '#C0392B',
      },
      fontFamily: {
        'sans': ['Inter', 'sans-serif'],
      }
    },
  },
  plugins: [],
}
