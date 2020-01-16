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

//admin
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
	//kelurahan
	Route::get('/json/kelurahan', 'Admin\MKelurahanController@json')->name('json_kelurahan');
	Route::resource('/kelurahan', 'Admin\MKelurahanController');
	Route::get('/getKabupaten/{id}', 'Admin\MKelurahanController@getKabupaten');
	Route::get('/getKecamatan/{id}', 'Admin\MKelurahanController@getKecamatan');
	//sekolah
	Route::get('/json/sekolah', 'Admin\MSekolahController@json')->name('json_sekolah');
	Route::resource('/sekolah', 'Admin\MSekolahController');
	Route::get('/getKabupaten/{id}', 'Admin\MSekolahController@getKabupaten');
	Route::get('/getKecamatan/{id}', 'Admin\MSekolahController@getKecamatan');
	Route::get('/getKelurahan/{id}', 'Admin\MSekolahController@getKelurahan');
	//kategori_soal
	Route::resource('/kategori_soal', 'Admin\MKategoriSoalController');
	Route::get('/json/kategori_soal', 'Admin\MKategoriSoalController@json')->name('json_kategorisoal');
	//soal
	Route::get('/json/soal', 'MSoalController@json')->name('json_soal');
	Route::resource('/soal', 'MSoalController');
	// Route::delete('/soal/konten_soal/{id}', 'MSoalController@destroykonten_soal');
	// Route::delete('/soal/jawaban_soal/{id}', 'MSoalController@destroyjawaban');
	//konten soal
	Route::get('/json/kontensoal/{soal_id}', 'RefKontenSoalController@json');
	Route::get('/soal/konten_soal/{id}', "RefKontenSoalController@index" );
	Route::get('/soal/konten_soal/{id}/create', 'RefKontenSoalController@create');
	Route::post('/soal/konten_soal/', 'RefKontenSoalController@store');
	Route::get('/soal/konten_soal/{soal_id}/{id}/edit', 'RefKontenSoalController@edit');
	Route::patch('/soal/konten_soal/{soal_id}/{id}', 'RefKontenSoalController@update');
	Route::delete('/soal/konten_soal/{id}', 'RefKontenSoalController@destroy');
	Route::delete('/soal/jawaban_soal/{id}', 'RefKontenSoalController@destroyjawaban');
	Route::post('soal/upload', 'RefKontenSoalController@upload')->name('ckeditor.upload');
});
Route::get('/siswa', 'Siswa\SiswaController@index')->name('siswa')->middleware('siswa');
Route::get('/guru', 'Guru\GuruController@index')->name('guru')->middleware('guru');
Route::get('/sekolah', 'Sekolah\SekolahController@index')->name('sekolah')->middleware('sekolah');

