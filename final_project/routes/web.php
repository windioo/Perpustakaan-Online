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
    return view('layouts.master');
});

Route::resource('kategori','KategoriController');
Route::resource('penerbit','PenerbitController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profil', 'ProfilController@index');
Route::put('/profil/{id}', 'ProfilController@update');
Route::put('/profil/{id}/updatefoto', 'ProfilController@updatefoto');