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

mix.js('resources/js/admin/app.js', 'public/js/admin/app.js')
    .js('resources/js/client/app.js', 'public/js/client/app.js')
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
        'resources/admin/js/Chart.min.js',
        'resources/admin/js/jquery.sparkline.min.js',
        'resources/admin/js/default.js',
    ], 'public/admin/js/admin.js')
    .copyDirectory('resources/assets/admin/fonts', 'public/admin/fonts')

    /* ---------------------------client------------------------------ */
    .copyDirectory('resources/assets/client/images', 'public/client/images')
    .copyDirectory('resources/assets/client/font', 'public/client/font')
    .copyDirectory('resources/assets/client/external', 'public/client/external')
    .styles([
        // 'resources/bootstrap/dist/css/bootstrap.css',
        'resources/assets/client/css/theme.css'
    ], 'public/client/css/client.css')
    .scripts([
        'resources/assets/client/external/jquery/jquery.min.js',
        'resources/assets/client/external/bootstrap/dist/js/bootstrap.min.js',
        'resources/assets/client/external/slick/slick.min.js',
        'resources/assets/client/external/perfect-scrollbar/perfect-scrollbar.min.js',
        'resources/assets/client/external/panelmenu/panelmenu.js',
        'resources/assets/client/external/instafeed/instafeed.min.js',
        'resources/assets/client/external/rs-plugin/js/jquery.themepunch.tools.min.js',
        'resources/assets/client/external/rs-plugin/js/jquery.themepunch.revolution.min.js',
        'resources/assets/client/external/countdown/jquery.plugin.min.js',
        'resources/assets/client/external/countdown/jquery.countdown.min.js',
        'resources/assets/client/external/lazyLoad/lazyload.min.js',
    ], 'public/client/js/client.js')
    .js('resources/assets/client/js/main.js', 'public/client/js/main.js');
