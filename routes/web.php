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
//LANDING PAGE VIEW
Route::get('/', 'LandingPageController@home');


//DASHBOARD PAGE
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/catatan-yaumiyah', 'CatatanYaumiyahController@viewPageSiswa')->name('viewCatatanAmalanSiswa');
Route::get('/tambah-catatan-yaumiyah', 'CatatanYaumiyahController@viewPageTambahCatatanAmalanSiswa')->name('tambahCatatanAmalanSiswa');

// Route::group(['middleware' => ['auth', 'checkRole:siswa,pembina']], function(){
// });

//AUTH
Route::get('/logout', 'Auth\LoginController@userLogout')->name('user.logout');
