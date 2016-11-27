<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/','FrontController@index');
Route::get('/facturas','FrontController@index');
Route::get('/facturasUp','FrontController@indexFiltro');
Route::get('/draft','FrontController@FiltroDraft');
//Route::get('contacto','MovieController@contacto');
//Route::get('reviews','FrontController@reviews');


