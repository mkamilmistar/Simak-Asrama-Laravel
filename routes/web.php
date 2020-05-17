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
    

    Route::get('/profile', 'UserController@index')->name('viewAllProfile');
    Route::post('/profile/create', 'UserController@createProfile');
    Route::get('/profile/{id}/edit', 'UserController@editProfile');
    Route::post('/profile/{id}/update', 'UserController@updateProfile');
    Route::get('/profile/{id}/delete', 'UserController@deleteProfile')->name('deleteProfile');
    Route::get('/profile/{id}/view', 'UserController@viewProfile')->name('viewProfile');
});

//ROUTE HAFALAN AL-QUR'AN
Route::get('/hafalan-siswa/{id}','HafalanController@indexSiswa' );
Route::get('/hafalan-pembina','HafalanController@indexPembina' );
Route::get('/hafalan-pembina/{id}','HafalanController@viewHafalanPembina' );
Route::get('/hafalan-pembina/{id}/tambah-doa','HafalanController@tambahDoa' );
Route::post('/hafalan-pembina/{id}/create-doa', 'HafalanController@postDoa');
Route::get('/hafalan-pembina/{id}/tambah-hafalan','HafalanController@tambahHafalan' );
Route::post('/hafalan-pembina/{id}/create-hafalan', 'HafalanController@postHafalan');


Route::group(['middleware' => ['auth', 'checkRole:pembina']], function() {
    //Catatan Harian
    Route::get('/catatan-harian', 'CatatanHarianController@viewPageCatatan');
    Route::post('/catatan-harian/create', 'CatatanHarianController@create');
    Route::get('/catatan-harian/{id}/edit','CatatanHarianController@edit');
    Route::post('/catatan-harian/{id}/update','CatatanHarianController@update');
    Route::get('/catatan-harian/{id}/delete','CatatanHarianController@delete');
    //Route::get('/siswa/{id}/profile','SiswaController@profile');

});

Route::group(['middleware' => ['auth', 'checkRole:siswa']], function() {
    //Catatan Harian
    Route::get('/catatan-harian/{id}', 'CatatanHarianController@viewPageCatatanSiswa');
});



//ROUTE CATATAN KEBAIKAN DAN KEBURUKAN
Route::group(['middleware' => ['auth', 'checkRole:pembina,siswa']], function() {
    Route::get('/catatan-kebaikan/{id}', 'CatatanKebaikanController@viewPageCatatanKebaikanSiswa')->name('viewCatatanKebaikanSiswa');
    Route::get('/catatan-kebaikan/{id}/create', 'CatatanKebaikanController@viewPageTambahCatatanKebaikanSiswa')->name('tambahCatatanKebaikanSiswa');
    Route::post('/catatan-kebaikan/{id}/create', 'CatatanKebaikanController@postCatatanKebaikanSiswa')->name('postCatatanKebaikanSiswa');
    Route::get('/catatan-kebaikan/{userId}/{id}/edit', 'CatatanKebaikanController@viewUpdateCatatan')->name('viewEditCatatanKebaikanSiswa');
    Route::post('/catatan-kebaikan/{userId}/{id}/update', 'CatatanKebaikanController@updateCatatan')->name('updateCatatanKebaikanSiswa');
    Route::get('/catatan-kebaikan/{userId}/{id}/delete', 'CatatanKebaikanController@hapusCatatan')->name('hapusCatatanKebaikanSiswa');

});

Route::group(['middleware' => ['auth', 'checkRole:pembina']], function() {
    //Catatan Kebaikan Pembina
    Route::get('/catatan-kebaikan-siswa', 'CatatanKebaikanController@viewPageCatatanKebaikan')->name('viewCatatanKebaikan');
    Route::get('/catatan-kebaikan-siswa/{id}', 'CatatanKebaikanController@viewPageCatatanKebaikanPembina')->name('viewCatatanKebaikanPembina');
});

Route::group(['middleware' => ['auth', 'checkRole:pembina']], function() {
    //Catatan Amalan Yaumiyah
    //PEMBINA VER
    Route::get('/jenis-amalan', 'JenisAmalanController@viewPageJenisAmalan');
    Route::get('/jenis-amalan/create', 'JenisAmalanController@createJenisAmalan');
    Route::post('/jenis-amalan/create', 'JenisAmalanController@postJenisAmalan');
    Route::get('/jenis-amalan/{id}/edit', 'JenisAmalanController@viewEditJenisAmalan');
    Route::post('/jenis-amalan/{id}/update', 'JenisAmalanController@updateJenisAmalan');
    Route::get('/jenis-amalan/{id}/delete', 'JenisAmalanController@deleteJenisAmalan');
});


Route::get('/catatan-yaumiyah-pembina', 'CatatanYaumiyahController@viewPagePembina')->name('viewCatatanAmalanSiswa');

//SISWA VER
Route::get('/catatan-yaumiyah', 'CatatanYaumiyahController@viewPageSiswa');


// Poin Siswa
Route::group(['middleware' => ['auth', 'checkRole:pembina']], function() {
    //Poin Pembina group
    Route::get('/poin-pembina', 'PoinKebaikanController@viewPoinSearchPage')->name('viewPoinSearchPage');
    Route::get('/poin-siswa/{id}/add', 'PoinKebaikanController@viewAddPoinSiswaPage')->name('addPoinSiswaPage');
    Route::post('/poin-siswa/{id}/add', 'PoinKebaikanController@addPoinSiswa');
    Route::post('/poin-siswa/{id}/delete', 'PoinKebaikanController@removePoinSiswa')->name('removePoinSiswa');
    Route::get('/poin-siswa/{id}/edit', 'PoinKebaikanController@viewUpdatePoinSiswaPage')->name('updatePoinSiswaPage');
    Route::post('/poin-siswa/{id}/edit', 'PoinKebaikanController@updatePoinSiswa');
});

Route::get('/poin-siswa/{id}', 'PoinKebaikanController@viewPoinSiswaPage')->name('viewPoinSiswaPage');
Route::get('/poin-siswa/{id}/cetak_pdf', 'PoinKebaikanController@cetak_pdf');