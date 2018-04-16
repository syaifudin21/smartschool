<?php 

Route::get('/organisasi', 'OrganisasiController@organisasi');
Route::get('/organisasi/lihat/{id}', 'OrganisasiController@lihat');
Route::get('/organisasi/update/{id}', 'OrganisasiController@edit');
Route::post('/organisasi/tambah', 'OrganisasiController@tambah')->name('organisasi.tambah');
Route::put('/organisasi/update', 'OrganisasiController@update')->name('organisasi.update');
Route::delete('/organisasi/delete/{id}', 'OrganisasiController@delete');

Route::get('/organisasi/struktur/{id}', 'OrganisasiController@struktur');
Route::get('/organisasi/kegiatan/{id}', 'OrganisasiController@kegiatan');
Route::get('/organisasi/kehadiran/{id}', 'OrganisasiController@kehadiran');
Route::get('/organisasi/ekspedisi/{id}', 'OrganisasiController@ekspedisi');
Route::get('/organisasi/anggota/{id}', 'OrganisasiController@anggota');
