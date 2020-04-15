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

//ROUTE CATATAN AMALAN YAUMIYAH
Route::get('/catatan-yaumiyah', 'CatatanYaumiyahController@viewPageSiswa')->name('viewCatatanAmalanSiswa');
Route::get('/tambah-catatan-yaumiyah', 'CatatanYaumiyahController@viewPageTambahCatatanAmalanSiswa')->name('tambahCatatanAmalanSiswa');

Route::get('/catatan-pembina', 'CatatanYaumiyahController@viewPagePembina')->name('viewCatatanAmalanPembina');
Route::get('/jenis-amalan-siswa', 'CatatanYaumiyahController@viewPageJenisAmalan')->name('jenisAmalanSiswa');
Route::get('/tambah-jenis-amalan', 'CatatanYaumiyahController@viewPageTambahJenisAmalan')->name('tambahJenisAmalan');
Route::get('/budi-arianto', 'CatatanYaumiyahController@viewPageCatatanAmalanSiswa')->name('viewCatatanSiswa');

//ROUTE CATATAN KEBAIKAN DAN KEBURUKAN
Route::get('/catatan-kebaikan', 'CatatanKebaikanController@viewPageCatatanKebaikanSiswa')->name('viewCatatanKebaikanSiswa');
Route::get('/tambah-catatan-kebaikan', 'CatatanKebaikanController@viewPageTambahCatatanKebaikanSiswa')->name('tambahCatatanKebaikanSiswa');

//Catatan Harian
Route::get('/catatan-harian', 'CatatanHarianController@viewPage')->name('catatan-harian');

// Route::group(['middleware' => ['auth', 'checkRole:siswa,pembina']], function(){
// });

//AUTH
Route::get('/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Auth::routes();
