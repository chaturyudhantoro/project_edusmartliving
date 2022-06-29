<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
	'register' => false,
	'reset' => false
]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/kategori', 'HomeController@kategori');
Route::get('/kategori/tambah', 'HomeController@kategori_tambah');
Route::post('/kategori/aksi', 'HomeController@kategori_aksi');
Route::get('/kategori/edit/{id}', 'HomeController@kategori_edit');
Route::put('/kategori/update/{id}', 'HomeController@kategori_update');
Route::get('/kategori/hapus/{id}', 'HomeController@kategori_hapus');

Route::get('/transaksi', 'HomeController@transaksi');
Route::get('/transaksi/tambah', 'HomeController@transaksi_tambah');
Route::post('/transaksi/aksi', 'HomeController@transaksi_aksi');
Route::get('/transaksi/edit/{id}', 'HomeController@transaksi_edit');
Route::put('/transaksi/update/{id}', 'HomeController@transaksi_update');
Route::get('/transaksi/hapus/{id}', 'HomeController@transaksi_hapus');
Route::get('/transaksi/cari', 'HomeController@transaksi_cari');

Route::get('/laporan', 'HomeController@laporan');
Route::get('/laporan/hasil', 'HomeController@laporan_hasil');
Route::get('/laporan/print', 'HomeController@laporan_print');
Route::get('/laporan/excel', 'HomeController@laporan_excel');

Route::get('/ganti_password', 'HomeController@ganti_password');
Route::post('/ganti_password/aksi', 'HomeController@ganti_password_aksi');