let mix = require('laravel-mix')

mix.js('resources/js/myscript.js', 'public/js')
   .postCss('resources/css/app.css', 'public/css', [
      require('tailwindcss'),
   ]);
