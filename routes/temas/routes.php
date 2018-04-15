<?php
/*
|--------------------------------------------------------------------------
| Web Routes para los temas
|--------------------------------------------------------------------------
|
*/
Route::get('/temas/{reunion}', 'TemaController@all')->name('temas.all');

Route::post('/temas/new', 'TemaController@store')->name('temas.new');