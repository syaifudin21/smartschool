<?php

Route::get('/', 'TuController@index');

Route::get('/kelas', 'KelasController@kelas');
Route::get('/kelas/lihat/{id}', 'KelasController@lihat');
Route::get('/kelas/update/{id}', 'KelasController@edit');
Route::post('/kelas/tambah', 'KelasController@tambah')->name('kelas.tambah');
Route::put('/kelas/update', 'KelasController@update')->name('kelas.update');
Route::delete('/kelas/delete/{id}', 'KelasController@delete');
Route::get('/kelas/mapel/{id}', 'KelasController@mapel');
Route::post('/kelas/mapel/tambah', 'KelasController@mapeltambah')->name('kelasmapel.tambah');
Route::put('/kelas/mapel/update', 'KelasController@mapelupdate')->name('kelasmapel.update');
Route::delete('kelas/mapel/delete/{id}', 'KelasController@mapeldelete');
Route::get('/kelas/load/{id}', 'KelasController@datamapel');
Route::get('/ta/load/{id}', 'KelasController@datata');
Route::post('/kelas/mapel/load', 'KelasController@mapelload')->name('loadmapel.tambah');


Route::get('/mapel', 'MapelController@mapel');
Route::get('/mapel/lihat/{id}', 'MapelController@lihat');
Route::get('/mapel/update/{id}', 'MapelController@edit');
Route::post('/mapel/tambah', 'MapelController@tambah')->name('mapel.tambah');
Route::put('/mapel/update', 'MapelController@update')->name('mapel.update');
Route::delete('/mapel/delete/{id}', 'MapelController@delete');

Route::get('/latih', 'LatihanController@latih');
Route::get('/latih/lihat/{id}', 'LatihanController@lihat');
Route::get('/latih/update/{id}', 'LatihanController@edit');
Route::post('/latih/tambah', 'LatihanController@tambah')->name('latih.tambah');
Route::put('/latih/update', 'LatihanController@update')->name('latih.update');
Route::delete('/latih/delete/{id}', 'LatihanController@delete');
Route::get('/latih/soal/{id}', 'LatihanController@soal');
Route::post('/latih/soal/tambah', 'LatihanController@soaltambah')->name('latihsoal.tambah');
Route::get('/latih/soal/update/{id}', 'LatihanController@soalid');
Route::put('/latih/soal/update', 'LatihanController@soalupdate')->name('soal.update');
Route::get('/latih/soal/lihat/{id}', 'LatihanController@soallihat');
Route::delete('/latih/soal/delete/{id}', 'LatihanController@soaldelete');
Route::get('/latih/soal/export/{id}', 'LatihanController@soalexport');
Route::post('/latih/soal/import', 'LatihanController@soalimport')->name('latihsoal.import');
Route::get('/latih/soal/pengumuman/{id}', 'LatihanController@pengumuman');
Route::post('/latih/soal/pengumuman', 'LatihanController@storepengumuman');


Route::get('/pengumuman', 'PengumumanController@pengumuman');
Route::get('/pengumuman/lihat/{id}', 'PengumumanController@lihat');
Route::get('/pengumuman/update/{id}', 'PengumumanController@edit');
Route::post('/pengumuman/tambah', 'PengumumanController@tambah')->name('pengumuman.tambah');
Route::put('/pengumuman/update', 'PengumumanController@update')->name('pengumuman.update');
Route::delete('/pengumuman/delete/{id}', 'PengumumanController@delete');
Route::get('/pengumuman/load/{id}', 'PengumumanController@loadobjek');

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
