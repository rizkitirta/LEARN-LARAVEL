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
Route::get('/thanks','PesanController@thanks')->name('thanks');

//Router Admin
Route::get('/adm','AdminController@index')->name('admin');
Route::get('/adm/pesan','PesanController@show')->name('tampil');

//Router Edit
Route::get('/adm/edit/{id}','PesanController@edit')->name('edit');
Route::post('/adm/update/{id}','PesanController@update')->name('update');

//Router Delete
Route::delete('/adm/delete/{id}', 'PesanController@delete')->name('delete');

