<?php

use Illuminate\Support\Facades\Route;

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

// login guest
Route::get('/login', 'PemilihLoginController@getLogin')->middleware('guest')->name('guest.loginuser');
Route::post('/login', 'PemilihLoginController@postLogin');
Route::get('/logout', 'PemilihLoginController@logout');;
// login guest
Route::get('/regis', 'GuestController@regis');
Route::get('/home', 'GuestController@home');
// guest
Route::get('/profile', 'GuestController@profile');

Route::group(['middleware' => ['auth:pemilih']], function() {
//Pemilihan
    Route::get('/','PemilihanController@index')->name('voting');
    route::post('/vote/{vote}/{pemilih}','PemilihanController@vote')->name('pemilihan.vote');
});


// login admin
Route::get('admin/', 'AdminLoginController@getLogin')->middleware('guest');
Route::get('admin/login', 'AdminLoginController@getLogin')->middleware('guest')->name('admin.login');
Route::post('admin/login', 'AdminLoginController@postLogin');
Route::get('admin/logout', 'AdminLoginController@Logout')->name('logout');

Route::group(['prefix' => 'admin','middleware' => ['auth:admin']], function() {
    // admin
    route::get('admin/dashboard','AdminController@dashboard');
    Route::resource('admin', 'AdminController');
    // calon
    Route::resource('calon', 'CalonController');
    // pemilih
    Route::resource('pemilih', 'PemilihController');
    Route::get('/editpemilih', 'AdminController@editpemilih');
    Route::get('/createpemilih', 'AdminController@createpemilih');
    // laporan
    Route::get('laporan','LaporanController@index')->name('laporan.index');
    // dashboard
    route::get('dashboard','DashboardController@index')->name('dashboard.index');
    // admin
    Route::resource('admin', 'AdminController');
    // calon
    Route::resource('calon', 'CalonController');
});



