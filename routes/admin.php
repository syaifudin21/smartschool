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

Route::get('/', 'AdminController@index');
Route::get('/tahunajaran', 'AdminController@tahunajaran')->name('tahunajaran');
Route::post('/tahunajaran', 'AdminController@tatambah')->name('ta.tambah');
Route::get('/siswa', 'AdminController@siswa');
Route::get('/calonsiswa', 'AdminController@calonsiswa');
Route::get('/guru', 'AdminController@guru');
Route::get('/walikelas', 'AdminController@walikelas');
Route::get('/ketuakelas', 'AdminController@ketuakelas');
Route::get('/ekstrakurikuler', 'AdminController@ekstrakurikuler');
Route::get('/perpustakaan', 'AdminController@perpustakaan');
Route::get('/pustakawan', 'AdminController@pustakawan');
Route::get('/administrasi', 'AdminController@administrasi');
Route::get('/tatausaha', 'AdminController@tatausaha');
Route::get('/admin', 'AdminController@admin');
