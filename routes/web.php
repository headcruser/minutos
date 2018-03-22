<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/',function(){
    return 'Home';
});

Route::get('/usuarios','UserController@index');

Route::get('/usuarios/new','UserController@create');

Route::get('/usuarios/update/{id}','UserController@edit')
    ->where ('id','[0-9]+');

Route::get('/usuarios/{id}',"UserController@show")->where ('id','[0-9]+');