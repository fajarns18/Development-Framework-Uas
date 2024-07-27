<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'App\Http\Controllers\Login@index');
Route::get('login', 'App\Http\Controllers\Login@index');
Route::post('login/check', 'App\Http\Controllers\Login@check');
Route::get('login/lupa', 'App\Http\Controllers\Login@lupa');
Route::get('login/logout', 'App\Http\Controllers\Login@logout');

    Route::get('siswa', 'App\Http\Controllers\SiswaController@index');
    Route::get('siswa/add', 'App\Http\Controllers\SiswaController@add');
    Route::post('siswa/add_proses', 'App\Http\Controllers\SiswaController@add_proses');
    Route::get('siswa/edit/{id}', 'App\Http\Controllers\SiswaController@edit');
    Route::post('siswa/edit_proses', 'App\Http\Controllers\SiswaController@edit_proses');
    Route::get('siswa/delete/{id}', 'App\Http\Controllers\SiswaController@delete');
    Route::get('siswa/cetak_siswa', 'App\Http\Controllers\SiswaController@cetak_siswa');
    Route::get('siswa/cetak_biodata/{id}', 'App\Http\Controllers\SiswaController@cetak_biodata');


    Route::get('pegawai', 'App\Http\Controllers\PegawaiController@index');
    Route::get('pegawai/add', 'App\Http\Controllers\PegawaiController@add');
    Route::post('pegawai/add_proses', 'App\Http\Controllers\PegawaiController@add_proses');
    Route::get('pegawai/edit/{id}', 'App\Http\Controllers\PegawaiController@edit');
    Route::post('pegawai/edit_proses', 'App\Http\Controllers\PegawaiController@edit_proses');
    Route::get('pegawai/delete/{id}', 'App\Http\Controllers\PegawaiController@delete');

    Route::get('kurikulum', 'App\Http\Controllers\KurikulumControllerReski@index');
    Route::get('kurikulum/add', 'App\Http\Controllers\KurikulumControllerReski@add');
    Route::post('kurikulum/add_proses', 'App\Http\Controllers\KurikulumControllerReski@add_proses');
    Route::get('kurikulum/edit/{id}', 'App\Http\Controllers\KurikulumControllerReski@edit');
    Route::post('kurikulum/edit_proses', 'App\Http\Controllers\KurikulumControllerReski@edit_proses');
    Route::get('kurikulum/delete/{id}', 'App\Http\Controllers\KurikulumControllerReski@delete');

    Route::get('jadwal', 'App\Http\Controllers\JadwalControllerReski@index');
    Route::get('jadwal/add', 'App\Http\Controllers\JadwalControllerReski@add');
    Route::post('jadwal/add_proses', 'App\Http\Controllers\JadwalControllerReski@add_proses');
    Route::get('jadwal/edit/{id}', 'App\Http\Controllers\JadwalControllerReski@edit');
    Route::post('jadwal/edit_proses', 'App\Http\Controllers\JadwalControllerReski@edit_proses');
    Route::get('jadwal/delete/{id}', 'App\Http\Controllers\JadwalControllerReski@delete');

    Route::get('nilai', 'App\Http\Controllers\NIlaiControllerReski@index');
    Route::get('nilai/add', 'App\Http\Controllers\NIlaiControllerReski@add');
    Route::post('nilai/add_proses', 'App\Http\Controllers\NIlaiControllerReski@add_proses');
    Route::get('nilai/edit/{id}', 'App\Http\Controllers\NIlaiControllerReski@edit');
    Route::post('nilai/edit_proses', 'App\Http\Controllers\NIlaiControllerReski@edit_proses');
    Route::get('nilai/delete/{id}', 'App\Http\Controllers\NIlaiControllerReski@delete');

    Route::get('kelas', 'App\Http\Controllers\KelasControllerReski@index');
    Route::get('kelas/add', 'App\Http\Controllers\KelasControllerReski@add');
    Route::post('kelas/add_proses', 'App\Http\Controllers\KelasControllerReski@add_proses');
    Route::get('kelas/edit/{id}', 'App\Http\Controllers\KelasControllerReski@edit');
    Route::post('kelas/edit_proses', 'App\Http\Controllers\KelasControllerReski@edit_proses');
    Route::get('kelas/delete/{id}', 'App\Http\Controllers\KelasControllerReski@delete');

    Route::get('guru', 'App\Http\Controllers\GuruController@index');
    Route::get('guru/add', 'App\Http\Controllers\GuruController@add');
    Route::post('guru/add_proses', 'App\Http\Controllers\GuruController@add_proses');
    Route::get('guru/edit/{id}', 'App\Http\Controllers\GuruController@edit');
    Route::post('guru/edit_proses', 'App\Http\Controllers\GuruController@edit_proses');
    Route::get('guru/delete/{id}', 'App\Http\Controllers\GuruController@delete');

    Route::get('pelajaran', 'App\Http\Controllers\PelajaranController@index');
    Route::get('pelajaran/add', 'App\Http\Controllers\PelajaranController@add');
    Route::post('pelajaran/add_proses', 'App\Http\Controllers\PelajaranController@add_proses');
    Route::get('pelajaran/edit/{id}', 'App\Http\Controllers\PelajaranController@edit');
    Route::post('pelajaran/edit_proses', 'App\Http\Controllers\PelajaranController@edit_proses');
    Route::get('pelajaran/delete/{id}', 'App\Http\Controllers\PelajaranController@delete');

    Route::get('ruang', 'App\Http\Controllers\RuangController@index');
    Route::get('ruang/add', 'App\Http\Controllers\RuangController@add');
    Route::post('ruang/add_proses', 'App\Http\Controllers\RuangController@add_proses');
    Route::get('ruang/edit/{id}', 'App\Http\Controllers\RuangController@edit');
    Route::post('ruang/edit_proses', 'App\Http\Controllers\RuangController@edit_proses');
    Route::get('ruang/delete/{id}', 'App\Http\Controllers\RuangController@delete');

    Route::get('buku', 'App\Http\Controllers\BukuController@index');
    Route::get('buku/add', 'App\Http\Controllers\BukuController@add');
    Route::post('buku/add_proses', 'App\Http\Controllers\BukuController@add_proses');
    Route::get('buku/edit/{id}', 'App\Http\Controllers\BukuController@edit');
    Route::post('buku/edit_proses', 'App\Http\Controllers\BukuController@edit_proses');
    Route::get('buku/delete/{id}', 'App\Http\Controllers\BukuController@delete');

