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

// Route::get('/login', 'AuthController@login')->name('login');
// Route::post('/login2', 'AuthController@postlogin')->name('login2');
// Route::get('/logout', 'AuthController@logout')->name('logout');
Auth::routes();
Route::get('/berandaMahasiswa', 'AkunController@mahasiswa')->name('adminHome');
Route::get('/berandaPerusahaan', 'AkunController@perusahaan')->name('perusahaan');
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home','AdminController@index')->name('home')->middleware('role');
Route::get('/info','InfoAkademik@index');
Route::get('/info/create','InfoAkademik@create');
Route::get('/info/{info}','InfoAkademik@show');
Route::post('/info','InfoAkademik@store');
Route::delete('/info/{info}','InfoAkademik@destroy');
Route::get('/info/{info}/edit','InfoAkademik@edit');
Route::patch('/info/{info}','InfoAkademik@update');

// konsentrasi
Route::get('/konsentrasi','KonsentrasiController@index');
Route::get('/konsentrasi/create','KonsentrasiController@create');
Route::get('/konsentrasi/{konsentrasi}','KonsentrasiController@show');
Route::post('/konsentrasi','KonsentrasiController@store');
Route::delete('/konsentrasi/{konsentrasi}','KonsentrasiController@destroy');
Route::get('/konsentrasi/{konsentrasi}/edit','KonsentrasiController@edit');
Route::patch('/konsentrasi/{konsentrasi}','KonsentrasiController@update');

// Direktorat
Route::get('/direktorat','DirektoratController@index');
Route::get('/direktorat/create','DirektoratController@create');
Route::get('/direktorat/{direktorat}','DirektoratController@show');
Route::post('/direktorat','DirektoratController@store');
Route::delete('/direktorat/{direktorat}','DirektoratController@destroy');
Route::get('/direktorat/{direktorat}/edit','DirektoratController@edit');
Route::patch('/direktorat/{direktorat}','DirektoratController@update');

// Mahasiswa
Route::get('/mahasiswa','MahasiswaController@index');
Route::get('/mahasiswa/create','MahasiswaController@create');
Route::get('/mahasiswa/{mahasiswa}','MahasiswaController@show');
Route::post('/mahasiswa','MahasiswaController@store');
Route::delete('/mahasiswa/{mahasiswa}','MahasiswaController@destroy');
Route::get('/mahasiswa/{mahasiswa}/edit','MahasiswaController@edit');
Route::patch('/mahasiswa/{mahasiswa}','MahasiswaController@update');

// Perusahaan
Route::get('/perusahaan','PerusahaanController@index');
Route::get('/perusahaan/create','PerusahaanController@create');
Route::get('/perusahaan/{perusahaan}','PerusahaanController@show');
Route::post('/perusahaan','PerusahaanController@store');
Route::delete('/perusahaan/{perusahaan}','PerusahaanController@destroy');
Route::get('/perusahaan/{perusahaan}/edit','PerusahaanController@edit');
Route::patch('/perusahaan/{perusahaan}','PerusahaanController@update');