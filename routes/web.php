<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::post('/ouvintes', 'ouvintesController@store');
Route::get('/ouvintes/{id}', 'ouvintesController@show');
Route::put('/ouvintes/{id}', 'ouvintesController@update');
Route::delete('/ouvintes/{id}', 'ouvintesController@destroy');
//Route::post('/ouvintes', 'ouvintesController@store');
