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

mix.webpackConfig({
    resolve: {
        extensions: ['.js', '.vue'],
        alias: {
            '@': path.resolve(__dirname, './resources/js')
        }
    }
});

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .styles([
        'node_modules/bootstrap/dist/css/bootstrap.css',
        'resources/assets/admin/css/pace-theme-minimal.css',
        'resources/assets/admin/css/perfect-scrollbar.min.css',
        'node_modules/font-awesome/css/font-awesome.min.css',
        'resources/assets/admin/css/themify-icons.css',
        'resources/assets/admin/css/materialdesignicons.min.css',
        'node_modules/animate.css/animate.css',
        'resources/assets/admin/css/app.css',
        'node_modules/vue-multiselect/dist/vue-multiselect.min.css',
    ], 'public/admin/css/admin.css')
    .scripts([
        'resources/assets/admin/js/vendor.js',
        'resources/assets/admin/js/app.min.js',
        // 'resources/admin/js/Chart.min.js',
        // 'resources/admin/js/jquery.sparkline.min.js',
        // 'resources/admin/js/default.js',
    ], 'public/admin/js/admin.js')
    .copyDirectory('resources/assets/admin/fonts', 'public/admin/fonts')
;
