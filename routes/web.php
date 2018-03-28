<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/','WelcomeController')->name('index');

Route::get('/home', 'HomeController@index')->name('home');

// Listado Usuario

Route::get('/usuarios','UserController@index')->name('usuarios.index');

Route::get('/usuarios/new','UserController@create')->name('usuarios.new');

Route::post('/usuarios/new', 'UserController@store')->name('usuarios.create');

Route::get('/usuarios/update/{user}','UserController@edit')->where ('id','[0-9]+')->name('usuarios.update');

Route::get('/usuarios/{user}',"UserController@show")->where ('id','[0-9]+')->name('usuarios.show');

Route::put('/usuarios/{user}','UserController@update');

Route::delete('/usuarios/{user}','UserController@delete')->name('usuarios.delete');

// Autentication Middleware

Auth::routes();  //vendor\laravel\framework\src\Illuminate\Routing\Router.php@auth

// Minutas (Reuniones)
Route::get('/minuta','MinutaController@index')->name('minuta.index');

// Route::get('/minuta/new','MinutaController@create')->name('minuta.new');

// Route::post('/minuta/new', 'MinutaController@store')->name('minuta.create');

// Route::get('/minuta/update/{minuta}','MinutaController@edit')->where ('id','[0-9]+')->name('minuta.update');

// Route::get('/minuta/{minuta}',"MinutaController@show")->where ('id','[0-9]+')->name('minuta.show');

// Route::put('/minuta/{minuta}','MinutaController@update');

// Route::delete('/minuta/{minuta}','MinutaController@delete')->name('minuta.delete');
