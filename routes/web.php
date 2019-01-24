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


//Listing
Route::get('/listing', 'ListingController@index')->name('Listing_Default');
Route::get('/listing/tambah', 'ListingController@show')->name('Listing.Tambah');
Route::get('/listing/show', 'ListingController@show')->name('Listing.Show');
Route::get('/listing/ubah', 'ListingController@show')->name('Listing.Ubah');


//------------------------------------------------------------------------------------------------------------------------

//Human Resource Management
//agen
Route::get('/agen/index', 'HumanController@index')->name('Human.Agen');
Route::get('/agen/show', 'HumanController@showagen')->name('Human.Agen.Show');
Route::get('/agen/ubah', 'HumanController@ubahagen')->name('Human.Agen.Ubah');
Route::get('/agen/tambah', 'HumanController@tambahagen')->name('Human.Agen.Tambah');
Route::get('/agen/hapus', 'HumanController@hapusagen')->name('Human.Agen.Hapus');

//jabatan
Route::get('/jabatan', 'HumanController@jabatan')->name('Human.Jabatan');
Route::get('/jabatan/ubah', 'HumanController@ubahjabatan')->name('Human.Jabatan.Ubah');
Route::get('/jabatan/tambah', 'HumanController@tambahjabatan')->name('Human.Jabatan.Tambah');

//policy
Route::get('/policy', 'HumanController@policy')->name('Human.Policy');
Route::get('/policy/ubah', 'HumanController@ubahpolicy')->name('Human.Policy.Ubah');
Route::get('/policy/tambah', 'HumanController@tambahpolicy')->name('Human.Policy.Tambah');



//------------------------------------------------------------------------------------------------------------------------


//Report
Route::get('/listing', 'ListingController@index')->name('Listing_Default');
Route::get('/listing/show', 'ListingController@show')->name('Listing.Show');