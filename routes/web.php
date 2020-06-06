<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

// Beres
Route::get('/index', 'IndexController@index');

// Beres
Route::get('/pengguna','PenggunaController@index');
Route::get('/pengguna/create', 'PenggunaController@create');
Route::post('/pengguna', 'PenggunaController@store');
Route::get('/pengguna/{id}/edit', 'PenggunaController@edit');
Route::patch('/pengguna/{id}', 'PenggunaController@update');
Route::delete('/pengguna/{id}', 'PenggunaController@destroy');

// Beres
Route::get('/relawan','RelawanController@index');
Route::get('/relawan/create', 'RelawanController@create');
Route::post('/relawan', 'RelawanController@store');
Route::get('/relawan/{id}/edit', 'RelawanController@edit');
Route::patch('/relawan/{id}', 'RelawanController@update');
Route::delete('/relawan/{id}', 'RelawanController@destroy');

// Ini Relasi Antara data pengguna dan Relawan
Route::get('/relasi','RelasiController@index');

// Beres
Route::get('/konsultasi','KonsultasiController@index');
Route::get('/konsultasi/create', 'KonsultasiController@create');
Route::post('/konsultasi', 'KonsultasiController@store');
Route::get('/konsultasi/{id}/edit', 'KonsultasiController@edit');
Route::patch('/konsultasi/{id}', 'KonsultasiController@update');
Route::delete('/konsultasi/{id}', 'KonsultasiController@destroy');

// Beres
Route::get('/apd','ApdController@index');
Route::get('/apd/create', 'ApdController@create');
Route::post('/apd', 'ApdController@store');
Route::get('/apd/{id}/edit', 'ApdController@edit');
Route::patch('/apd/{id}', 'ApdController@update');
Route::delete('/apd/{id}', 'ApdController@destroy');

// Beres
Route::get('/dana','DanaController@index');
Route::get('/dana/create', 'DanaController@create');
Route::post('/dana', 'DanaController@store');
Route::get('/dana/{id}/edit', 'DanaController@edit');
Route::patch('/dana/{id}', 'DanaController@update');
Route::delete('/dana/{id}', 'DanaController@destroy');

// Beres
Route::get('/odp','OdpController@index');
Route::get('/pdp','PdpController@index');
Route::get('/positif','PositifController@index');
Route::get('/sembuh','SembuhController@index');
Route::get('/meninggal','MeninggalController@index');

// Pengaduan
Route::get('/index#contact', 'IndexController@create');
Route::post('/index', 'IndexController@store');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
