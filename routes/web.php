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
    return view('home');
});

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@userLogout')->name('user.logout');


// Catatan Amalan Yaumiyah
Route::get('/catatan-yaumiyah', 'CatatanYaumiyahController@viewPage')->name('catatan-yaumiyah');



// Route::prefix('admin')->group(function(){
//     Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
//     Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
//     Route::get('/', 'AdminController@index')->name('admin.dashboard');
//     Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

//     //Password Reset
//     Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
//     Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
//     Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
//     Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
// });