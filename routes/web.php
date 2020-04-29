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

//upload gambar ckeditor
Route::post('soal/upload', 'RefKontenSoalController@upload')->name('ckeditor.upload');

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
	Route::get('/json/soal', 'MSoalController@jsonadmin')->name('json_soal_admin');
	Route::resource('/soal', 'MSoalController');
	//konten soal
	Route::get('/json/kontensoal/{soal_id}', 'RefKontenSoalController@json');
	Route::get('/soal/konten_soal/{id}', "RefKontenSoalController@index" );
	Route::get('/soal/konten_soal/{id}/create', 'RefKontenSoalController@create');
	Route::post('/soal/konten_soal/', 'RefKontenSoalController@store');
	Route::get('/soal/konten_soal/{soal_id}/{id}/edit', 'RefKontenSoalController@edit');
	Route::patch('/soal/konten_soal/{soal_id}/{id}', 'RefKontenSoalController@update');
	Route::delete('/soal/konten_soal/{id}', 'RefKontenSoalController@destroy');
	// Route::post('soal/upload', 'RefKontenSoalController@upload')->name('ckeditor.upload');

	//kategori quiz
	Route::resource('/kategori_quiz', 'Admin\MKategoriQuizController');
	Route::get('/json/kategori_quiz', 'Admin\MKategoriQuizController@json')->name('json_kategoriquiz');
});


//sekolah
Route::group(['prefix' => 'sekolah', 'middleware' => 'sekolah'], function() {
	Route::get('/', 'Sekolah\SekolahController@index')->name('sekolah');
	//guru
	Route::get('/json/guru/{sekolah_id}', 'Sekolah\MGuruController@json')->name('json_guru');
	Route::resource('/guru', 'Sekolah\MGuruController');
	Route::delete('/guru/{id}/{user_id}', 'Sekolah\MGuruController@destroy');
	Route::get('/getKabupaten/{id}', 'Sekolah\MGuruController@getKabupaten');
	Route::get('/getKecamatan/{id}', 'Sekolah\MGuruController@getKecamatan');
	Route::get('/getKelurahan/{id}', 'Sekolah\MGuruController@getKelurahan');
	//siswa
	Route::get('/json/siswa/{sekolah_id}', 'Sekolah\MSiswaController@json')->name('json_siswa');
	Route::resource('/siswa', 'Sekolah\MSiswaController');
	Route::delete('/guru/{id}/{user_id}', 'Sekolah\MGuruController@destroy');
	Route::get('/getKabupaten/{id}', 'Sekolah\MSiswaController@getKabupaten');
	Route::get('/getKecamatan/{id}', 'Sekolah\MSiswaController@getKecamatan');
	Route::get('/getKelurahan/{id}', 'Sekolah\MSiswaController@getKelurahan');
});


//guru
Route::group(['prefix' => 'guru', 'middleware' => 'guru'], function () {
	Route::get('/', 'Guru\GuruController@index')->name('guru');
	//soal
	Route::get('/json/soal/{guru_id}', 'MSoalController@jsonguru')->name('json_soal_guru');
	Route::resource('/soal', 'MSoalController');
	//konten soal
	Route::get('/json/kontensoal/{soal_id}', 'RefKontenSoalController@json');
	Route::get('/soal/konten_soal/{id}', "RefKontenSoalController@index" );
	Route::get('/soal/konten_soal/{id}/create', 'RefKontenSoalController@create');
	Route::post('/soal/konten_soal/', 'RefKontenSoalController@store');
	Route::get('/soal/konten_soal/{soal_id}/{id}/edit', 'RefKontenSoalController@edit');
	Route::patch('/soal/konten_soal/{soal_id}/{id}', 'RefKontenSoalController@update');
	Route::delete('/soal/konten_soal/{id}', 'RefKontenSoalController@destroy');
	// Route::post('/soal/upload', 'RefKontenSoalController@upload')->name('ckeditor_upload');
	//nilai
	Route::get('/nilai', 'Guru\GuruController@nilai');
	//quiz
	// Route::get('/quiz', 'Guru\GuruController@quiz');

});


//siswa
Route::group(['prefix' => 'siswa', 'middleware' => 'siswa'], function() {
	Route::get('/', 'Siswa\SiswaController@index')->name('siswa');
	Route::get('/quiz', 'Siswa\SiswaController@quiz');
	
	Route::post('/start', 'Siswa\SiswaController@start')->name('start');
	Route::get('/getallquiz/{id}/{no_soal}', 'Siswa\SiswaController@getallquiz')->name('getallquiz');
	Route::get('/raguragu', 'Siswa\SiswaController@ragu')->name('ragu');

	Route::get('/startquiz/{id}/{no_soal}', 'Siswa\SiswaController@startquiz');
	Route::post('/savequiz', 'Siswa\SiswaController@savequiz')->name('savequiz');
	Route::patch('/updatequiz/{id}', 'Siswa\SiswaController@updatequiz');
	Route::get('/getquiz/{id}/{no_soal}', 'Siswa\SiswaController@getquiz')->name('getquiz');
	Route::get('/finish', 'Siswa\SiswaController@periksaquiz')->name('finish');
});