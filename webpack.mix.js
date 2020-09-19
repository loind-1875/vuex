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
    .copyDirectory('resources/assets/admin/img', 'public/admin/img')
    // .copyDirectory('resources/assets/admin/woff', 'public/admin/woff');

    /* ---------------------------client------------------------------ */
    .copyDirectory('resources/assets/client/vendor', 'public/client/vendor')
    .copyDirectory('resources/assets/client/fonts', 'public/client/fonts')
    .copyDirectory('resources/assets/client/webfonts', 'public/client/webfonts')
    .copyDirectory('resources/assets/client/img', 'public/client/img')
    // .copyDirectory('resources/assets/client/js/jquery.glasscase.js', 'public/client/js/jquery.glasscase.js')
    // .copyDirectory('resources/assets/client/js/modernizr.custom.js', 'public/client/js/modernizr.custom.js')
    .styles([
        'resources/assets/client/vendor/bootstrap/css/bootstrap.min.css',
        'resources/assets/client/vendor/fontawesome-free/css/all.min.css',
        'resources/assets/client/vendor/animate/animate.min.css',
        'resources/assets/client/vendor/simple-line-icons/css/simple-line-icons.min.css',
        'resources/assets/client/vendor/owl.carousel/assets/owl.carousel.min.css',
        'resources/assets/client/vendor/owl.carousel/assets/owl.theme.default.min.css',
        'resources/assets/client/vendor/magnific-popup/magnific-popup.min.css',
        'resources/assets/client/vendor/bootstrap-star-rating/css/star-rating.min.css',
        'resources/assets/client/vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.css',
        'resources/assets/client/css/theme.css',
        'resources/assets/client/css/theme-elements.css',
        'resources/assets/client/css/theme-blog.css',
        'resources/assets/client/css/theme-shop.css',
        'resources/assets/client/vendor/rs-plugin/css/settings.css',
        'resources/assets/client/vendor/rs-plugin/css/layers.css',
        'resources/assets/client/vendor/rs-plugin/css/navigation.css',
        'resources/assets/client/vendor/circle-flip-slideshow/css/component.css',
        'resources/assets/client/css/default.css',
        'resources/assets/client/css/custom.css',
    ], 'public/client/css/client.css')
    .scripts([
        'resources/assets/client/vendor/modernizr/modernizr.min.js',
        'resources/assets/client/vendor/jquery/jquery.min.js',
        'resources/assets/client/vendor/jquery.appear/jquery.appear.min.js',
        'resources/assets/client/vendor/jquery.easing/jquery.easing.min.js',
        'resources/assets/client/vendor/jquery.cookie/jquery.cookie.min.js',
        // 'resources/assets/client/master/style-switcher/style.switcher.js',
        'resources/assets/client/vendor/popper/umd/popper.min.js',
        'resources/assets/client/vendor/bootstrap/js/bootstrap.min.js',
        'resources/assets/client/vendor/common/common.min.js',
        'resources/assets/client/vendor/jquery.validation/jquery.validate.min.js',
        'resources/assets/client/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js',
        'resources/assets/client/vendor/jquery.gmap/jquery.gmap.min.js',
        'resources/assets/client/vendor/jquery.lazyload/jquery.lazyload.min.js',
        'resources/assets/client/vendor/isotope/jquery.isotope.min.js',
        'resources/assets/client/vendor/owl.carousel/owl.carousel.min.js',
        'resources/assets/client/vendor/magnific-popup/jquery.magnific-popup.min.js',
        'resources/assets/client/vendor/bootstrap-star-rating/js/star-rating.min.js',
        'resources/assets/client/vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.js',
        'resources/assets/client/js/theme.js',
        'resources/assets/client/vendor/rs-plugin/js/jquery.themepunch.tools.min.js',
        'resources/assets/client/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js',
        'resources/assets/client/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js',
        'resources/assets/client/js/views/view.home.js',
        'resources/assets/client/js/theme.init.js',
    ], 'public/client/js/client.js');
    // .js('resources/assets/client/js/main.js', 'public/client/js/main.js');
