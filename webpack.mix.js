const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .js('resources/js/navigation.js', 'public/js') 
   .postCss('resources/css/app.css', 'public/css', [
       require('tailwindcss'),
       require('autoprefixer'),
   ])
   .options({
       processCssUrls: false,
   });
