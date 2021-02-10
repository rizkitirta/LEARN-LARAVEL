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

Route::get('/','PesanController@index')->name('home');
Route::get('/create','PesanController@create')->name('buat');
Route::post('/simpan','PesanController@store')->name('simpan');
Route::get('/pesanan','PesanController@show')->name('tampil');
Route::get('/thanks','PesanController@thanks')->name('thanks');

//Router Admin
Route::get('/adm','AdminController@index')->name('admin');
Route::get('/adm/pesan','PesanController@show')->name('tampil');

Route::get('/clear', function() {
	Artisan::call('cache:clear');

	dd("cache Clear All");
});