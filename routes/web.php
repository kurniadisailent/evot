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

Route::get('/', function () {
    return view('guest.loginuser');
});
// login guest
Route::get('/regis', 'GuestController@regis');
Route::get('/home', 'GuestController@home');

// guest
Route::get('/profile', 'GuestController@profile');


// login admin
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
    Route::get('/pemilih', 'AdminController@pemilih');
    Route::get('/editpemilih', 'AdminController@editpemilih');
    Route::get('/createpemilih', 'AdminController@createpemilih');
    // laporan
    Route::get('/admin/laporan', 'AdminController@laporan');
    // dashboard
    route::get('dashboard','DashboardController@index')->name('dashboard.index');
    // admin
    Route::resource('admin', 'AdminController');
    // calon
    Route::resource('calon', 'CalonController');
    // laporan
    Route::get('/laporan', 'AdminController@laporan');
});



