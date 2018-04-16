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
mix.scripts([
  'resources/assets/js/jquery.min.js',
  'resources/assets/js/jquery-ui.min.js',
  'resources/assets/js/bootstrap.min.js',
  'resources/assets/js/raphael.min.js',
  'resources/assets/js/morris.min.js',
  'resources/assets/js/jquery.sparkline.min.js',
  'resources/assets/js/jquery-jvectormap-1.2.2.min.js',
  'resources/assets/js/jquery-jvectormap-world-mill-en',
  'resources/assets/js/jquery.knob.min.js',
  'resources/assets/js/moment.min.js',
  'resources/assets/js/daterangepicker.js',
  'resources/assets/js/bootstrap-datepicker.min.js',
  'resources/assets/js/bootstrap3-wysihtml5.all.min.js',
  'resources/assets/js/jquery.slimscroll.min.js',
  'resources/assets/js/fastclick.js',
  'resources/assets/js/adminlte.min.js',
  'resources/assets/js/dashboard.js',
  'resources/assets/js/demo.js',
],'public/js/adminLTE.js')

mix.styles([
  'resources/assets/css/bootstrap.min.css',
  'resources/assets/css/font-awesome.min.css',
  'resources/assets/css/ionicons.min.css',
  'resources/assets/css/dataTables.bootstrap.min.css',
  'resources/assets/css/AdminLTE.min.css',
  'resources/assets/css/_all-skins.min.css',
  'resources/assets/css/morris.css',
  'resources/assets/css/jquery-jvectormap.css',
  'resources/assets/css/daterangepicker.css',
  'resources/assets/css/bootstrap3-wysihtml5.min.css',
], 'public/css/adminLTE.css');