/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/views/welcome.blade.php",
    "./resources/views/article.blade.php",
    "./resources/views/shared/dashboard.blade.php",
    "./resources/views/shared/textform.blade.php",
    "resources/views/shared/success-message.blade.php",
    './resources/css/app.css',
   ],
  theme: {
    extend: {},
  },
  plugins: [],
}

