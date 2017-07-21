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
Auth::routes();
Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/prestasi', 'prestasiController@index')->name('prestasi');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/berita', 'beritaController@index')->name('berita');
Route::get('/kurikulum', 'kurikulumController@index')->name('kurikulum');
Route::get('/alumni', 'alumniController@index')->name('alumni');
Route::get('/contact', 'contactController@index')->name('contact');

Route::get('/contact', 'contactController@index')->name('contact');
