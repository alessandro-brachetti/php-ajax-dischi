let mix = require('laravel-mix');

mix.js('src/js/main.js', 'dist/js/')
   .setPublicPath('dist')
   .sass('src/scss/master.scss', 'dist/css/').options({
     processCssurls: false
   });
