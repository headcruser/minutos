<?php
/*
|--------------------------------------------------------------------------
| Web Routes Usuarios
|--------------------------------------------------------------------------
|
*/

Route::get('/usuarios','UserController@index')->name('usuarios.index');

Route::get('/usuarios/new','UserController@create')->name('usuarios.new');

Route::post('/usuarios/new', 'UserController@store')->name('usuarios.create');

Route::get('/usuarios/update/{user}','UserController@edit')->where ('id','[0-9]+')->name('usuarios.update');

Route::get('/usuarios/{user}',"UserController@show")->where ('id','[0-9]+')->name('usuarios.show');

Route::put('/usuarios/{user}','UserController@update');

Route::delete('/usuarios/{user}','UserController@delete')->name('usuarios.delete');