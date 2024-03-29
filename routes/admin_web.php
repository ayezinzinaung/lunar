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

Route::prefix('admin')->name('admin.')->namespace('Backend')->middleware('auth:admin_user')->group(function(){
    Route::Get('/','PageController@home')->name('home');

    // --- Admin User Profile---
    Route::resource('profile', 'ProfileController');
    Route::get('profile/datatables/ssd','ProfileController@ssd');
});