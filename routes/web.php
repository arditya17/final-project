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

Route::get('/', 'ClientController@index');

Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'AdminController@index')->name('home');
Route::get('/info', 'InfoAkademik@index');
Route::get('/info/create', 'InfoAkademik@create');
Route::get('/info/{info}', 'InfoAkademik@show');
Route::post('/info', 'InfoAkademik@store');
Route::delete('/info/{info}', 'InfoAkademik@destroy');
Route::get('/info/{info}/edit', 'InfoAkademik@edit');
Route::patch('/info/{info}', 'InfoAkademik@update');

// Fasilitas
Route::get('/fasilitas', 'FasilitasController@index');
Route::get('/fasilitas/create', 'FasilitasController@create');
Route::get('/fasilitas/{fasilitas}', 'FasilitasController@show');

// konsentrasi
Route::get('/konsentrasi', 'KonsentrasiController@index');
Route::get('/konsentrasi/create', 'KonsentrasiController@create');
Route::get('/konsentrasi/{konsentrasi}', 'KonsentrasiController@show');
Route::post('/konsentrasi', 'KonsentrasiController@store');
Route::delete('/konsentrasi/{konsentrasi}', 'KonsentrasiController@destroy');
Route::get('/konsentrasi/{konsentrasi}/edit', 'KonsentrasiController@edit');
Route::patch('/konsentrasi/{konsentrasi}', 'KonsentrasiController@update');

// Direktorat
Route::get('/direktorat', 'DirektoratController@index');
Route::get('/direktorat/create', 'DirektoratController@create');
Route::get('/direktorat/{direktorat}', 'DirektoratController@show');
Route::post('/direktorat', 'DirektoratController@store');
Route::delete('/direktorat/{direktorat}', 'DirektoratController@destroy');
Route::get('/direktorat/{direktorat}/edit', 'DirektoratController@edit');
Route::patch('/direktorat/{direktorat}', 'DirektoratController@update');
