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
    return view('auth.login');
});

Auth::routes();


// Route::group(['middleware' => ['auth','cekrole:petugas']], function(){
Route::resource('kategori','KategoriController')->except(['delete']);
Route::get('kategori/delete/{kategori}', 'KategoriController@destroy')->name('kategori.delete');
Route::resource('penerbit','PenerbitController')->except(['delete']);
Route::get('penerbit/delete/{id}', 'PenerbitController@destroy');
Route::resource('buku','BukuController')->except(['delete']);
Route::get('buku/delete/{id}', 'BukuController@destroy');
Route::resource('dashadmin','DashAdminController');
Route::resource('member','MemberController');
// });

// Route::group(['middleware' => ['auth','cekrole:member']], function(){
Route::get('/home', 'UserDashboardController@index')->name('home');
#dashboard route
Route::get('/dashboard', 'UserDashboardController@index');
Route::get('/dashboard/{id}/show', 'UserDashboardController@show');
Route::put('/dashboard/{id}/komen', 'KomentarBukuController@update');
Route::get('/dashboard/cari', 'UserDashboardController@cari');
Route::post('/dashboard/{id}/download', 'UserDashboardController@downloadfile');

#profile route
Route::get('/profil', 'ProfilController@index');
Route::put('/profil/{id}', 'ProfilController@update');
Route::put('/profil/{id}/updatefoto', 'ProfilController@updatefoto');

#koleksi route
Route::resource('/koleksi','KoleksiController')->except(['store']);
Route::post('/koleksi/{id}/add', 'KoleksiController@store')->name('add.book');
Route::post('/koleksi/{id}/view', 'KoleksiController@show');

#histori route
Route::resource('/histori','HistoriController');

// });



