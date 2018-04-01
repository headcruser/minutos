<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/','WelcomeController')->name('index');

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

//(Reuniones)
Route::get('/reuniones','MinutaController@index')->name('reuniones.index');

Route::get('/reuniones/new','MinutaController@create')->name('reuniones.new');

Route::post('/reuniones/new', 'MinutaController@store');

// Route::get('/minuta/update/{minuta}','MinutaController@edit')->where ('id','[0-9]+')->name('minuta.update');

// Route::get('/minuta/{minuta}',"MinutaController@show")->where ('id','[0-9]+')->name('minuta.show');

// Route::put('/minuta/{minuta}','MinutaController@update');

// Route::delete('/minuta/{minuta}','MinutaController@delete')->name('minuta.delete');
