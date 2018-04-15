<?php
/*
|--------------------------------------------------------------------------
| Web Routes Reuniones
|--------------------------------------------------------------------------
|
*/
Route::get('/reuniones','MinutaController@index')->name('reuniones.index');

Route::get('/reuniones/new','MinutaController@create')->name('reuniones.new');

Route::post('/reuniones/new', 'MinutaController@store');

Route::get('/reuniones/update/{reunion}','MinutaController@edit')->where ('id','[0-9]+')->name('reuniones.update');

Route::put('/reuniones/update/{reunion}','MinutaController@update');

Route::get('/reuniones/{reunion}',"MinutaController@show")->where ('id','[0-9]+')->name('reunion.show');

Route::delete('/reuniones/{reunion}','MinutaController@delete')->name('reunion.delete');