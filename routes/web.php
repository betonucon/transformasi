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
Route::get('/loggg', function () {
    return view('auth.login');
});

Route::get('login_ucon/admin/admin/admin', function () {
    return view('auth.login');
});
Route::post('login-proses', 'Auth\LoginController@login')->name('login-proses');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/Ceo', 'CeoController@index');
Route::get('/ChangeStory', 'ChangeStoryController@index');
Route::get('/Magazine', 'MagazineController@index');

Route::get('/CeoAdmin', 'CeoController@index_admin');
Route::get('/CeoAdmin/ubah', 'CeoController@ubah');
Route::post('/CeoAdmin/simpan', 'CeoController@simpan');
Route::post('/CeoAdmin/simpan_ubah', 'CeoController@simpan_ubah');

Route::get('/ChangeStoryAdmin', 'ChangeStoryController@index_admin');
Route::get('/ChangeStoryAdmin/ubah', 'ChangeStoryController@ubah');
Route::get('/ChangeStoryAdmin/hapus', 'ChangeStoryController@hapus');
Route::post('/ChangeStoryAdmin/simpan', 'ChangeStoryController@simpan');
Route::post('/ChangeStoryAdmin/simpan_ubah', 'ChangeStoryController@simpan_ubah');



Route::get('/home', 'HomeController@index')->name('home');
