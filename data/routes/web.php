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
Route::get('login', function () {
    return view('login');
});
Route::get('mobile/login_app', function () {
    return view('login_app');
});

Route::post('masuk_halaman','LoginController@login');
Route::get('logout','LoginController@logout');

Route::group(['middleware' => 'auth'], function() {

Route::group(['middleware' => 'admin'], function() {	

Route::get('/', function () {
    return view('welcome');
});

//guru
Route::get('guru','GuruController@data');
Route::get('tambah_guru', function () {
    return view('guru_tambah');
});
Route::post('guru_create','GuruController@create');
Route::get('ubah_guru/{id}','GuruController@ubah_guru');
Route::get('hapus_guru/{id}','GuruController@hapus');
Route::post('guru_update/{id}','GuruController@guru_update');
Route::post('ubah_pass_guru/{id}','GuruController@ubah_pass_guru');

//amal tarbawi
Route::get('amal','AmalController@data');
Route::post('amal_create','AmalController@create');
Route::post('guru_murid_create','AmalController@guru_murid_create');
Route::get('guru_murid_hapus/{id}','AmalController@guru_murid_hapus');
Route::post('ubah_amal/{id}','AmalController@ubah_amal');
Route::get('hapus_amal/{id}','AmalController@hapus');

//siswa
Route::get('siswa','SiswaController@data');
Route::get('tambah_siswa', function () {
    return view('siswa_tambah');
});
Route::get('ubah_siswa/{id}','SiswaController@ubah_siswa');
Route::post('siswa_update/{id}','SiswaController@siswa_update');
Route::post('siswa_create','SiswaController@create');
Route::get('hapus_siswa/{id}','SiswaController@hapus');

//nilai
Route::get('nilai','NilaiController@data');
Route::post('pilih_siswa','NilaiController@pilih_siswa');
Route::get('lihat_siswa/{idAjaran}/{idGuru}','NilaiController@lihat_siswa');

//ajaran
Route::get('ajaran','AjaranController@data');
Route::post('ajaran_create','AjaranController@create');
Route::post('ubah_ajaran/{id}','AjaranController@ubah_ajaran');
Route::get('hapus_ajaran/{id}','AjaranController@hapus');
//ubah password
Route::get('ubah_password','AdminController@data');
Route::post('admin_create','AdminController@create');
Route::post('password_ubah','AdminController@password_ubah');
Route::post('tentang_ubah','AdminController@tentang_ubah');
});	


Route::group(['middleware' => 'guru'], function() {
//mobile
Route::get('/mobile', function () {
    return view('mobile.index');
});
Route::get('/mobile','MobileController@data');
Route::get('mobile/pilih_siswa','MobileController@pilih_siswa');
Route::get('mobile/input_nilai/{idAjaran}/{idSiswa}/{Kelas}','MobileController@input_nilai');
Route::post('mobile/nilai_create','MobileController@create');
Route::get('mobile/data_nilai','MobileController@data_nilai');
Route::get('mobile/lihat_nilai/{idAjaran}/{idSiswa}','MobileController@lihat_nilai');
Route::get('mobile/profile','MobileController@profile');
Route::post('mobile/profile_update/{id}','MobileController@profile_update');
Route::post('mobile/pass_update/{id}','MobileController@pass_update');

});	
});	