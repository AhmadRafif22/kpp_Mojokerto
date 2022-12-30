/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
        colors: {
            'banner-kpp': 'rgba(32, 44, 95, 0.75)',
            'main-bg': '#202C5F',
        }
    },
  },
  plugins: [],
}
