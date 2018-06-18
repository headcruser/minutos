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
  'resources/assets/js/vendor/jquery.min.js',
  'resources/assets/js/vendor/jquery-ui.min.js',
  'resources/assets/js/vendor/bootstrap.min.js',
  'resources/assets/js/vendor/raphael.min.js',
  'resources/assets/js/vendor/morris.min.js',
  'resources/assets/js/vendor/jquery.sparkline.min.js',
  'resources/assets/js/vendor/jquery-jvectormap-1.2.2.min.js',
  'resources/assets/js/vendor/jquery-jvectormap-world-mill-en',
  'resources/assets/js/vendor/jquery.knob.min.js',
  'resources/assets/js/vendor/moment.min.js',
  'resources/assets/js/vendor/daterangepicker.js',
  'resources/assets/js/vendor/bootstrap-datepicker.min.js',
  'resources/assets/js/vendor/bootstrap3-wysihtml5.all.min.js',
  'resources/assets/js/vendor/jquery.slimscroll.min.js',
  'resources/assets/js/vendor/fastclick.js',
  'resources/assets/js/vendor/adminlte.min.js',
  'resources/assets/js/vendor/dashboard.js',
  'resources/assets/js/vendor/demo.js',

],'public/js/vendor/adminLTE.js');

// ESTILOS CSS
mix.styles([
  'resources/assets/css/vendor/bootstrap.min.css',
  'resources/assets/css/vendor/font-awesome.min.css',
  'resources/assets/css/vendor/ionicons.min.css',
  'resources/assets/css/vendor/dataTables.bootstrap.min.css',
  'resources/assets/css/vendor/AdminLTE.min.css',
  'resources/assets/css/vendor/_all-skins.min.css',
  'resources/assets/css/vendor/morris.css',
  'resources/assets/css/vendor/jquery-jvectormap.css',
  'resources/assets/css/vendor/daterangepicker.css',
  'resources/assets/css/vendor/bootstrap3-wysihtml5.min.css',
], 'public/css/vendor/adminLTE.css');


// APP
mix.styles([
  'resources/assets/css/app/app.css',
], 'public/css/app.css');

mix.js([
  'resources/assets/js/app/app.js'
], 'public/js/app.js');

// REUNIONES
mix.js([
  'resources/assets/js/app/reuniones/reuniones.js'
], 'public/js/reuniones/reuniones.js');

mix.js([
  'resources/assets/js/app/reuniones/listarReuniones.js'
], 'public/js/reuniones/listarReuniones.js');


//IMAGENES Y FUENTES
mix.copyDirectory('resources/assets/img', 'public/img');
mix.copyDirectory('resources/assets/fonts', 'public/css/fonts');


// DATATABLES
// mix.copy('resources/assets/js/vendor/dataTables.bootstrap.min.js',
//         'public/js/vendor/dataTables.bootstrap.min.js');

// mix.copy('resources/assets/js/vendor/jquery.dataTables.min.js',
//   'public/js/vendor/jquery.dataTables.min.js');
