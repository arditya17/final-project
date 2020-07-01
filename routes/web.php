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

Route::get('/', function () {
    return view('client.index');
});

Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home','AdminController@index')->name('home');
Route::get('/info','InfoAkademik@index');
Route::get('/info/create','InfoAkademik@create');
Route::get('/info/{info}','InfoAkademik@show');
Route::post('/info','InfoAkademik@store');
Route::delete('/info/{info}','InfoAkademik@destroy');
Route::get('/info/{info}/edit','InfoAkademik@edit');
Route::patch('/info/{info}','InfoAkademik@update');


