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
    .styles([
        'resources/assets/admin/css/bootstrap.min.css',
        'resources/assets/admin/css/waves.min.css',
        'resources/assets/admin/css/feather.css',
        'resources/assets/admin/css/font-awesome.min.css',
        'resources/assets/admin/css/style.css',
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
    // .copyDirectory('resources/assets/client/images', 'public/client/images')
    // .copyDirectory('resources/assets/client/font', 'public/client/font')
    // .copyDirectory('resources/assets/client/external', 'public/client/external')
    // .styles([
        // 'resources/bootstrap/dist/css/bootstrap.css',
        // 'resources/assets/client/css/theme.css'
    // ], 'public/client/css/client.css')
    // .scripts([
    //     'resources/assets/client/external/jquery/jquery.min.js',
    //     'resources/assets/client/external/bootstrap/dist/js/bootstrap.min.js',
    //     'resources/assets/client/external/slick/slick.min.js',
    //     'resources/assets/client/external/perfect-scrollbar/perfect-scrollbar.min.js',
    //     'resources/assets/client/external/panelmenu/panelmenu.js',
    //     'resources/assets/client/external/instafeed/instafeed.min.js',
    //     'resources/assets/client/external/rs-plugin/js/jquery.themepunch.tools.min.js',
    //     'resources/assets/client/external/rs-plugin/js/jquery.themepunch.revolution.min.js',
    //     'resources/assets/client/external/countdown/jquery.plugin.min.js',
    //     'resources/assets/client/external/countdown/jquery.countdown.min.js',
    //     'resources/assets/client/external/lazyLoad/lazyload.min.js',
    // ], 'public/client/js/client.js')
    // .js('resources/assets/client/js/main.js', 'public/client/js/main.js');
