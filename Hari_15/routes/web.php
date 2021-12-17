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

Route::get('/master', function () {
    return view('layout.master');
});

Route::get('/', 'MainController@dashboard');
Route::get('/table', 'MainController@table');
Route::get('/datatable', 'MainController@datatable');

Route::get('/film', 'FilmController@index');
Route::post('/film/store', 'FilmController@store');
Route::get('/film/destroy/{id}', 'FilmController@destroy');
Route::get('/film/edit/{id}', 'FilmController@edit');