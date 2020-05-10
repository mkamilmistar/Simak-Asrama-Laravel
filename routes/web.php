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

Route::group(['middleware' => ['auth', 'checkRole:siswa,pembina']], function(){
    //LANDING PAGE VIEW
    Route::get('/', 'LandingPageController@home');
});

//AUTH
Route::get('/logout', 'Auth\LoginController@userLogout')->name('user.logout');

//DASHBOARD PAGE
Auth::routes();

//LANDING PAGE VIEW
Route::get('/', 'LandingPageController@home');

Route::group(['middleware' => ['auth', 'checkRole:siswa,pembina']], function(){
    Route::get('/home', 'HomeController@index')->name('home');

    //ROUTE CATATAN AMALAN YAUMIYAH
    Route::get('/catatan-yaumiyah', 'CatatanYaumiyahController@viewPageSiswa')->name('viewCatatanAmalanSiswa');
    Route::get('/tambah-catatan-yaumiyah', 'CatatanYaumiyahController@viewPageTambahCatatanAmalanSiswa')->name('tambahCatatanAmalanSiswa');

    Route::get('/profile', 'UserController@index');
    Route::post('/profile/create', 'UserController@createProfile');
    Route::get('/profile/{id}/edit', 'UserController@editProfile');
    Route::post('/profile/{id}/update', 'UserController@updateProfile');
    Route::get('/profile/{id}/delete', 'UserController@deleteProfile');
    Route::get('/profile/{id}/view', 'UserController@viewProfile');
});

//ROUTE HAFALAN AL-QUR'AN
Route::get('/hafalan-siswa',function (){
    return view('hafalanSiswa');
});



Route::group(['middleware' => ['auth', 'checkRole:pembina']], function() {
    //Catatan Harian
    Route::get('/catatan-harian', 'CatatanHarianController@viewPageCatatan');
    Route::post('/catatan-harian/create', 'CatatanHarianController@create');
    Route::get('/catatan-harian/{id}/edit','CatatanHarianController@edit');
    Route::post('/catatan-harian/{id}/update','CatatanHarianController@update');
    Route::get('/catatan-harian/{id}/delete','CatatanHarianController@delete');
    //Route::get('/siswa/{id}/profile','SiswaController@profile');
    Route::get('search', 'SearchController@index')->name('search');
    Route::get('autocomplete', 'SearchController@fetch')->name('autocomplete');
});



//ROUTE CATATAN KEBAIKAN DAN KEBURUKAN
Route::get('/catatan-kebaikan/{id}', 'CatatanKebaikanController@viewPageCatatanKebaikanSiswa')->name('viewCatatanKebaikanSiswa');
Route::get('/catatan-kebaikan/{id}/create', 'CatatanKebaikanController@viewPageTambahCatatanKebaikanSiswa')->name('tambahCatatanKebaikanSiswa');
Route::post('/catatan-kebaikan/{id}/create', 'CatatanKebaikanController@postCatatanKebaikanSiswa')->name('postCatatanKebaikanSiswa');
Route::get('/catatan-kebaikan/{userId}/{id}/edit', 'CatatanKebaikanController@viewUpdateCatatan')->name('viewEditCatatanKebaikanSiswa');
Route::post('/catatan-kebaikan/{userId}/{id}/update', 'CatatanKebaikanController@updateCatatan')->name('updateCatatanKebaikanSiswa');
Route::get('/catatan-kebaikan/{userId}/{id}/delete', 'CatatanKebaikanController@hapusCatatan')->name('hapusCatatanKebaikanSiswa');