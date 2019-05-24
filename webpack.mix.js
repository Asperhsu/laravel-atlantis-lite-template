const mix = require('laravel-mix');


mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .combine('resources/plugin', 'public/js/plugin.js')
    .version();

mix.copy('resources/js/setting-demo.js', 'public/js/setting-demo.js');
