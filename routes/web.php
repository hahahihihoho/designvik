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

Route::get('/owner', function () {
    return view('operator.owner');
});

Route::get('/setting', function () {
    return view('operator.setting-operator');
});

Route::get('/create', function () {
    return view('trip.create');
});
