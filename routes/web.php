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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/testing', 'HomeController@testing')->name('testing');

//------------------------------------------------------------------------------------------------------------------------
//Listing
//------------------------------------------------------------------------------------------------------------------------

Route::get('/listing', 'ListingController@index')->name('Listing_Default');
Route::get('/listing/tambah', 'ListingController@show')->name('Listing.Tambah');
Route::get('/listing/show', 'ListingController@show')->name('Listing.Show');
Route::get('/listing/ubah', 'ListingController@show')->name('Listing.Ubah');


//------------------------------------------------------------------------------------------------------------------------
//Human Resource Management
//------------------------------------------------------------------------------------------------------------------------

//agen
Route::get('/agen', 'AgenController@index')->name('Human.Agen');
Route::get('/agen/{id}', 'AgenController@show_agen')->name('Human.Agen.Show');
Route::get('/agen/tambah', 'AgenController@tambah_agen')->name('Human.Agen.Tambah');
Route::put('/agen/{id}/ubah', 'AgenController@ubah_agen')->name('Human.Agen.Ubah');
Route::post('/agen/simpan', 'AgenController@simpan_agen')->name('Human.Agen.Simpan');
Route::put('/agen/{id}/hapus', 'AgenController@hapus_agen')->name('Human.Agen.Hapus');

//jabatan
Route::get('/jabatan', 'RoleController@jabatan')->name('Human.Jabatan');
Route::get('/jabatan/{id}', 'RoleController@jabatan')->name('Human.Jabatan.Show');
Route::get('/jabatan/{id}/ubah', 'RoleController@ubah_jabatan')->name('Human.Jabatan.Ubah');
Route::get('/jabatan/tambah', 'RoleController@tambah_jabatan')->name('Human.Jabatan.Tambah');
Route::put('/jabatan/{id}/hapus', 'RoleController@jabatan')->name('Human.Jabatan.Hapus');

//policy
Route::get('/policy', 'HumanController@policy')->name('Human.Policy');
Route::get('/policy/{id}', 'HumanController@ubah_policy')->name('Human.Policy.Ubah');
Route::get('/policy/{id}/ubah', 'HumanController@ubah_policy')->name('Human.Policy.Ubah');
Route::get('/policy/tambah', 'HumanController@tamba_hpolicy')->name('Human.Policy.Tambah');
Route::get('/policy/{id}/hapus', 'HumanController@tamba_hpolicy')->name('Human.Policy.Tambah');




//------------------------------------------------------------------------------------------------------------------------
//Report
//------------------------------------------------------------------------------------------------------------------------

Route::get('/listing', 'ListingController@index')->name('Listing_Default');
Route::get('/listing/show', 'ListingController@show')->name('Listing.Show');
