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



//Human Resource Management
Route::get('/agen', 'HumanController@index')->name('Human.Agen');
Route::get('/agen/ubah', 'HumanController@show')->name('Human.Agen.Ubah');
Route::get('/agen/tambah', 'HumanController@index')->name('Human.Agen.Tambah');
Route::get('/jabatan', 'HumanController@show')->name('Human.Jabatan');
Route::get('/jabatan/ubah', 'HumanController@index')->name('Human.Jabatan.Ubah');
Route::get('/jabatan/tambah', 'HumanController@show')->name('Human.Jabatan.Uambah');
Route::get('/policy', 'HumanController@show')->name('Human.Policy');
Route::get('/policy/ubah', 'HumanController@index')->name('Human.Policy.Ubah');
Route::get('/policy/tambah', 'HumanController@show')->name('Human.Policy.Tambah');


//Report
Route::get('/listing', 'ListingController@index')->name('Listing_Default');
Route::get('/listing/show', 'ListingController@show')->name('Listing.Show');