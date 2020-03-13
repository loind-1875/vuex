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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .styles([
        'resources/admin/css/app.css',
        'resources/admin/css/materialdesignicons.min.css',
        'resources/admin/css/pace-theme-minimal.css',
        'resources/admin/css/perfect-scrollbar.min.css',
        'resources/admin/css/themify-icons.css',
        'node_modules/bootstrap/dist/css/bootstrap.css',
        'node_modules/font-awesome/css/font-awesome.min.css',
        'node_modules/animate.css/animate.css',
    ], 'public/admin/css/admin.css')
    .scripts([
        'resources/admin/js/vendor.js',
        'resources/admin/js/app.min.js',
        // 'resources/admin/js/Chart.min.js',
        // 'resources/admin/js/jquery.sparkline.min.js',
        // 'resources/admin/js/default.js',
    ], 'public/admin/js/admin.js')
    .copyDirectory('resources/admin/fonts', 'public/admin/fonts')
;
