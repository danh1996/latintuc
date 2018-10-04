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
    return view('welcome');
});

Route::get('thu', function () {
    return view('quantri.dashboard');
});


Route::get('quantri/loaitin/danhsach', function () {
    return view('quantri.loaitin.danhsach');
});
Route::get('quantri/loaitin/them', function () {
    return view('quantri.loaitin.them');
});
Route::get('quantri/loaitin/sua', function () {
    return view('quantri.loaitin.sua');
});