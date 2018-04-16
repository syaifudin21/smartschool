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


Route::get('/', 'GuruController@index')->name('guru');
Route::get('/mapel', 'MapelGuruController@index');
Route::get('/mapel/{id}', 'MapelGuruController@mapelid');

Route::get('/pengumuman', 'GuruController@pengumuman');
