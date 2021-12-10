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
    return view('kumpulan_tugas_pweb');
});

Route::get('tugas4', function () {
    return view('tugas4');
});

Route::get('praktikum2', function () {
    return view('htmlpraktikum2');
});

Route::get('ets',"soal_ets@jawabanets") ;
Route::get('halaman_awal_php_kalkulator',"tugas_php@halamankalkulator") ;
Route::post('hasil_perhitungan',"tugas_php@hasilperhitungan");

//route CRUD untuk pegawai
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/view/{id}','PegawaiController@detail');

//route CRUD untuk tugas
Route::get('/tugas','TugasController@index');
Route::get('/tugas/tambah','TugasController@tambah');
Route::post('/tugas/store','TugasController@store');
Route::get('/tugas/edit/{id}','TugasController@edit');
Route::post('/tugas/update','TugasController@update');
Route::get('/tugas/hapus/{id}','TugasController@hapus');

//route CRUD absen
Route::get('/absen','AbsenController@indexabsen');
Route::get('/absen/add','AbsenController@add');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');

//route praktikum (snack)
Route::get('/snack','snackController@index');
Route::get('/snack/tambah','snackController@tambah');
Route::post('/snack/store','snackController@store');
Route::get('/snack/edit/{id}','snackController@edit');
Route::post('/snack/update','snackController@update');
Route::get('/snack/hapus/{id}','snackController@hapus');
Route::get('/snack/cari','snackController@cari');
Route::get('/snack/view/{id}','snackController@detail');
