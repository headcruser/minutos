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
  'node_modules/material-dashboard/assets/js/core/jquery.min.js',
  'node_modules/material-dashboard/assets/js/core/popper.min.js',
  'node_modules/material-dashboard/assets/js/core/bootstrap-material-design.min.js',
  'node_modules/material-dashboard/assets/js/plugins/perfect-scrollbar.jquery.min.js',
  'node_modules/material-dashboard/assets/js/plugins/chartist.min.js',
  'node_modules/material-dashboard/assets/js/material-dashboard.min.js',
  'node_modules/datatables.net/js/jquery.dataTables.js',
],'public/js/vendor/adminLTE.js');

// ESTILOS CSS
mix.styles([
 'node_modules/material-dashboard/assets/css/material-dashboard.min.css',
 'node_modules/material-dashboard/assets/css/demo/demo.css',
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

mix.js([
  'resources/assets/js/app/usuarios/listarUsuarios.js'
], 'public/js/usuarios/listarUsuarios.js');



//IMAGENES Y FUENTES
mix.copyDirectory('node_modules/material-dashboard/assets/img', 'public/img');
