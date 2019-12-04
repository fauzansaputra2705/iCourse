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

Auth::routes();
Route::get('/siswa', 'SiswaController@index')->name('siswa')->middleware('siswa');
Route::get('/guru', 'GuruController@index')->name('guru')->middleware('guru');
Route::get('/sekolah', 'SekolahController@index')->name('sekolah')->middleware('sekolah');
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');

Route::get('/home', 'HomeController@index')->name('home');
