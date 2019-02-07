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

Route::get('/home', 'ListingController@index')->name('home');

//------------------------------------------------------------------------------------------------------------------------
//Listing
//------------------------------------------------------------------------------------------------------------------------

Route::get('/listing', 'ListingController@index')->name('Listing_Default');
Route::get('/listing/tambah', 'ListingController@tambah_listing')->name('Listing.Tambah');
Route::post('/listing/simpan', 'ListingController@simpan_listing')->name('Listing.Simpan');
Route::get('/listing/tambah/foto', 'ListingController@tambah_listing_foto')->name('Listing.Tambah.Foto');
Route::post('/listing/simpan/foto', 'ListingController@simpan_listing_foto')->name('Listing.Simpan.Foto');
Route::get('/listing/show/{id}', 'ListingController@show')->name('Listing.Show');
Route::get('/listing/ubah', 'ListingController@show')->name('Listing.Ubah');


//------------------------------------------------------------------------------------------------------------------------
//Human Resource Management
//------------------------------------------------------------------------------------------------------------------------

//agen
Route::get('/agen', 'AgenController@index')->name('Human.Agen');
Route::get('/agen/{id}', 'AgenController@show_agen')->name('Human.Agen.Show')->where('id', '[0-9]+');
Route::get('/agen/tambah', 'AgenController@tambah_agen')->name('Human.Agen.Tambah');
Route::put('/agen/{id}/ubah', 'AgenController@ubah_agen')->name('Human.Agen.Ubah')->where('id', '[0-9]+');
Route::post('/agen/simpan', 'AgenController@simpan_agen')->name('Human.Agen.Simpan');
Route::put('/agen/{id}/hapus', 'AgenController@hapus_agen')->name('Human.Agen.Hapus')->where('id', '[0-9]+');

//jabatan
Route::get('/jabatan', 'RoleController@index')->name('Human.Jabatan');
Route::get('/jabatan/{id}', 'RoleController@show_jabatan')->name('Human.Jabatan.Show')->where('id', '[0-9]+');
Route::get('/jabatan/tambah', 'RoleController@tambah_jabatan')->name('Human.Jabatan.Tambah');
Route::put('/jabatan/{id}/ubah', 'RoleController@ubah_jabatan')->name('Human.Jabatan.Ubah')->where('id', '[0-9]+');
Route::post('/jabatan/simpan', 'RoleController@simpan_jabatan')->name('Human.Jabatan.Simpan');
Route::put('/jabatan/{id}/hapus', 'RoleController@hapus_jabatan')->name('Human.Jabatan.Hapus')->where('id', '[0-9]+');

//policy
Route::get('/policy', 'PolicyController@index')->name('Human.Policy');
Route::get('/policy/{id}', 'PolicyController@show_policy')->name('Human.Policy.Show')->where('id', '[0-9]+');
Route::get('/policy/tambah', 'PolicyController@tambah_policy')->name('Human.Policy.Tambah');
Route::put('/policy/{id}/ubah', 'PolicyController@ubah_policy')->name('Human.Policy.Ubah')->where('id', '[0-9]+');
Route::post('/policy/simpan', 'PolicyController@simpan_policy')->name('Human.Policy.Simpan');
Route::put('/policy/{id}/hapus', 'PolicyController@hapus_policy')->name('Human.Policy.Hapus')->where('id', '[0-9]+');




//------------------------------------------------------------------------------------------------------------------------
//Report
//------------------------------------------------------------------------------------------------------------------------


Route::get('download', 'ReportController@download_overview')->name('Report.Overview.Download');
Route::get('/report/penjualan/agen', 'ReportController@penjualan_agen')->name('Report.Penjualan.Agen');
Route::get('/report/penjualan/agen/show/{id}', 'ReportController@penjualan_agen_show')->name('Report.Penjualan.Agen.Show');
Route::get('/report/penjualan/saya', 'ReportController@penjualan_saya')->name('Report.Penjualan.Saya');
Route::get('/report/komisi/agen', 'ReportController@komisi_agen')->name('Report.Komisi.Agen');
Route::get('/report/komisi/saya', 'ReportController@komisi_saya')->name('Report.Komisi.Saya');
