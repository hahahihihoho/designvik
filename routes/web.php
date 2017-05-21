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
    return view('trip.home');
});
Route::get('/detail', function () {
    return view('trip.detail');
});

Route::get('/detail2', function () {
    return view('trip.detail2');
});

Route::get('/operator', function () {
    return view('operator.profile');
});

Route::get('/user', function () {
    return view('user.profile-user');
});

Route::get('/user-setting', function () {
    return view('user.setting-user');
});

Route::get('/setting', function () {
    return view('operator.setting-operator');
});

Route::get('/create', function () {
    return view('trip.create');
});

Route::get('/beli', function () {
    return view('trip.beli');
});

Route::get('/finish-order', function () {
    return view('trip.selesaibeli');
});
