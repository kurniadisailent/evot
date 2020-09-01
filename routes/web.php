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
Route::get('/login', 'AdminController@login');

// admin
Route::get('/dashboard', 'AdminController@dashboard');

// calon
Route::get('/calon', 'AdminController@calon');
Route::get('/editcalon', 'AdminController@editcalon');
Route::get('/createcalon', 'AdminController@createcalon');

// pemilih
Route::get('/pemilih', 'AdminController@pemilih');
Route::get('/editpemilih', 'AdminController@editpemilih');
Route::get('/createpemilih', 'AdminController@createpemilih');

// admin
Route::get('/admin', 'AdminController@admin');
Route::get('/editadmin', 'AdminController@editadmin');
Route::get('/createadmin', 'AdminController@createadmin');

// laporan
Route::get('/laporan', 'AdminController@laporan');
