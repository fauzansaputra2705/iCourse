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
	$data['title'] = "iCourse | HOME";
	$data['pagenavbar'] = "navbar";
	$data['pagecontent'] = "welcome";
    return view('layouts.app' , $data);
});

Auth::routes();
Route::get('/siswa', 'SiswaController@index')->name('siswa')->middleware('siswa');
Route::get('/guru', 'GuruController@index')->name('guru')->middleware('guru');
Route::get('/sekolah', 'SekolahController@index')->name('sekolah')->middleware('sekolah');
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');

// Route::get('/home', 'HomeController@index')->name('home');
