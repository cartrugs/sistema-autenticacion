const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/assets')
   .sass('resources/sass/app.scss', 'public/assets')
   .version(); // Forzar la generación de mix-manifest.json
