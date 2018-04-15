<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/',
  [
    'as' => 'index',
    'middleware'=>'auth',
    'uses' => 'WelcomeController'
  ]);


// Autentication Middleware
//vendor\laravel\framework\src\Illuminate\Routing\Router.php@auth
Auth::routes();

include_once('usuarios/routes.php');
include_once('reuniones/routes.php');
include_once('temas/routes.php');
