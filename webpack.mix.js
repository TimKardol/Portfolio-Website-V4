const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/js/app.js', 'public/js')
    mix.sass('resources/sass/layout.scss', 'public/css/layout.css');
    mix.sass('resources/sass/404.scss', 'public/css/404.css');
    mix.sass('resources/sass/500.scss', 'public/css/500.css');
