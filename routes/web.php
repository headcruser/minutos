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

Route::get('/reuniones/update/{reunion}','MinutaController@edit')->where ('id','[0-9]+')->name('reuniones.update');

Route::put('/reuniones/update/{reunion}','MinutaController@update');

Route::get('/reuniones/{reunion}',"MinutaController@show")->where ('id','[0-9]+')->name('reunion.show');

Route::delete('/reuniones/{reunion}','MinutaController@delete')->name('reunion.delete');

// (Temas) Asignar reunion tema
Route::get('/temas/{reunion}', 'TemaController@all')->name('temas.all');

Route::post('/temas/new', 'TemaController@store')->name('temas.new');

//