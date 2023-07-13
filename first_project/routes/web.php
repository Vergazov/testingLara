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

Route::get('', function () {
//    return view('welcome');
    return 'Hello World';
});

Route::get('/my_page','MyPlaceController@index');

Route::get('/my_page/main-profile','MainProfileController@mainProfile');

Route::get('settings','SettingsController@getSettings');
