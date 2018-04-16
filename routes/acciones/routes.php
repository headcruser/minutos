<?php
/*
|--------------------------------------------------------------------------
| Web Routes para las acciones
|--------------------------------------------------------------------------
|
*/
Route::get('/acciones/{tema}', 'AccionController@all')->name('acciones.all');

Route::post('/acciones/new', 'AccionController@store')->name('acciones.new');