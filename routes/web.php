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

//route CRUD
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
