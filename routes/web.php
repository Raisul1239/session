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
    return view('login');
});

Route::get("/session/get", "SessionController@getSessionData");
Route::get("/session/store", "SessionController@storeSessionData");
Route::get("/session/remove", "SessionController@deleteSessionData");