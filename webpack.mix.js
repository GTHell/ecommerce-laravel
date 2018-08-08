let mix = require('laravel-mix');

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

mix.disableNotifications();

// https://github.com/JeffreyWay/laravel-mix/issues/819
// Solution to  jquery issue

mix.autoload({jquery: ['$', 'window.jQuery',"jQuery","window.$","jquery","window.jquery"]})
  .js('resources/assets/js/app.js', 'public/js')
  .js([
    'resources/assets/vendor/jquery/jquery-3.2.1.min.js',
    // 'resources/assets/vendor/animsition/js/animsition.min.js',
    'resources/assets/vendor/bootstrap-4.1.3/js/popper.js',
    'resources/assets/vendor/bootstrap-4.1.3/js/bootstrap.min.js',
    'resources/assets/vendor/select2/select2.min.js',
    'resources/assets/vendor/slick/slick.min.js',
    'resources/assets/js/main/slick-custom.js',
    'resources/assets/vendor/countdowntime/countdowntime.js',
    'resources/assets/vendor/lightbox2/js/lightbox.min.js',
    'resources/assets/vendor/sweetalert/sweetalert.min.js',
    'resources/assets/vendor/parallax100/parallax100.js',
    'resources/assets/js/main/main.js',
    'resources/assets/js/main/app.js'
  ], 'public/js/main.js')
  .styles([
    'resources/assets/vendor/bootstrap-4.1.3/css/bootstrap.min.css',
    // 'resources/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css',
    'resources/assets/fonts/themify/themify-icons.css',
    'resources/assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css',
    'resources/assets/fonts/elegant-font/html-css/style.css',
    'resources/assets/vendor/animate/animate.css',
    'resources/assets/vendor/css-hamburgers/hamburgers.min.css',
    'resources/assets/vendor/animsition/css/animsition.min.css',
    'resources/assets/vendor/select2/select2.min.css',
    'resources/assets/vendor/daterangepicker/daterangepicker.css',
    'resources/assets/vendor/slick/slick.css',
    'resources/assets/vendor/lightbox2/css/lightbox.min.css',
    'resources/assets/css/util.css',
    'resources/assets/css/main.css'
  ], 'public/css/main.css')
  // Dashboard
  .js([
    'resources/assets/vendor/jquery/jquery-3.2.1.min.js',
    'resources/assets/vendor/bootstrap-4.1.3/js/popper.js',
    'resources/assets/vendor/bootstrap-4.1.3/js/bootstrap.min.js',
  ], 'public/js/dashboard/main.js')
  .styles([
    'resources/assets/vendor/bootstrap-4.1.3/css/bootstrap.min.css',
    'resources/assets/js/dashboard/style.css'
  ], 'public/css/dashboard/main.css')
  .sass('resources/assets/sass/app.scss', 'public/css');
