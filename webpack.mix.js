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

mix.js('resources/js/app.js', 'public/js/app.js')
    .sass('resources/sass/app.scss', 'public/css')
    .copyDirectory('resources/assets/admin/css/pages.css', 'public/admin/css/pages.css')
    .styles([
        'resources/assets/admin/css/bootstrap.min.css',
        'resources/assets/admin/css/waves.min.css',
        'resources/assets/admin/css/feather.css',
        'resources/assets/admin/css/font-awesome.min.css',
        'resources/assets/admin/css/style.css',
        'resources/assets/admin/css/custom.css',
        // 'resources/assets/admin/css/widget.css',
    ], 'public/admin/css/admin.css')
    .scripts([
        'resources/assets/admin/js/jquery.min.js',
        'resources/assets/admin/js/jquery-ui.min.js',
        'resources/assets/admin/js/popper.min.js',
        'resources/assets/admin/js/bootstrap.min.js',
        'resources/assets/admin/js/waves.min.js',
        'resources/assets/admin/js/jquery.slimscroll.js',
        'resources/assets/admin/js/modernizr.js',
        'resources/assets/admin/js/css-scrollbars.js',
        'resources/assets/admin/js/pcoded.min.js',
        'resources/assets/admin/js/vertical-layout.min.js',
        'resources/assets/admin/js/jquery.mcustomscrollbar.concat.min.js',
        'resources/assets/admin/js/script.js',
        'resources/assets/admin/js/rocket-loader.min.js.js',
    ], 'public/admin/js/admin.js')
    // .copyDirectory('resources/assets/admin/ttf', 'public/admin/ttf')
    // .copyDirectory('resources/assets/admin/woff', 'public/admin/woff');

    /* ---------------------------client------------------------------ */
    .copyDirectory('resources/assets/client/images', 'public/client/images')
    .copyDirectory('resources/assets/client/fonts', 'public/client/fonts')
    .copyDirectory('resources/assets/client/css/main.css', 'public/client/css/main.css')
    .copyDirectory('resources/assets/client/css/glasscase.css', 'public/client/css/glasscase.css')
    .copyDirectory('resources/assets/client/js/jquery.glasscase.js', 'public/client/js/jquery.glasscase.js')
    .copyDirectory('resources/assets/client/js/modernizr.custom.js', 'public/client/js/modernizr.custom.js')
    .styles([
        'resources/assets/client/css/bootstrap.min.css',
        'resources/assets/client/css/bootstrap-theme.min.css',
        'resources/assets/client/css/font-awesome.min.css',
        'resources/assets/client/css/owl.carousel.css',
        'resources/assets/client/css/owl.theme.default.css',
        'resources/assets/client/css/plugin.scss.css',
        'resources/assets/client/css/style.css',
        'resources/assets/client/css/animate.css',
    ], 'public/client/css/client.css')
    .scripts([
        'resources/assets/client/js/jquery.min.js',
        'resources/assets/client/js/plugin-menu-mb.js',
        'resources/assets/client/js/bootstrap.min.js',
        'resources/assets/client/js/owl.carousel.js',
        'resources/assets/client/js/wow.min.js',
    ], 'public/client/js/client.js');
    // .js('resources/assets/client/js/main.js', 'public/client/js/main.js');
