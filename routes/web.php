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
Route::group(['prefix' => 'admin' ,'middleware' => 'admin'], function() {
    Route::get('/', 'Admin\AdminController@index')->name('admin');
	//provinsi
	Route::get('/json/provinsi', 'Admin\MProvinsiController@json')->name('json_provinsi');
	Route::resource('/provinsi', 'Admin\MProvinsiController');
	//kabupaten
	Route::get('/json/kabupaten', 'Admin\MKabupatenController@json')->name('json_kabupaten');
	Route::resource('/kabupaten', 'Admin\MKabupatenController');
	//kecamatan
	Route::get('/json/kecamatan', 'Admin\MKecamatanController@json')->name('json_kecamatan');
	Route::resource('/kecamatan', 'Admin\MKecamatanController');
	Route::get('/getKabupaten/{id}', 'Admin\MKecamatanController@getKabupaten');
});
Route::get('/siswa', 'Siswa\SiswaController@index')->name('siswa')->middleware('siswa');
Route::get('/guru', 'Guru\GuruController@index')->name('guru')->middleware('guru');
Route::get('/sekolah', 'Sekolah\SekolahController@index')->name('sekolah')->middleware('sekolah');

