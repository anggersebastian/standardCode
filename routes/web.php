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
    return view('welcome');
});

// Karyawan
// Route::get('/karyawan/home', 'KaryawanController@index')->name('karyawan.index');
// Route::get('/karyawan/create', 'KaryawanController@create')->name('karyawan.create');
// Route::get('/karyawan/edit', 'KaryawanController@edit')->name('karyawan.edit');
// Route::post('')

Route::resource('karyawan', 'KaryawanController');