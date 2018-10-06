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

Route::get('quantri/index', function () {
    return view('quantri.dashboard');
});


Route::group(['prefix'=>'quantri'],function (){
    Route::group(['prefix'=>'loaitin'],function (){
        Route::get('danhsach','loaitinController@danhsach')->name('quantri/loaitin/danhsach');

        Route::get('them','loaitinController@getThem');
        Route::post('them','loaitinController@postThem');

        Route::get('xoa/{id}','loaitinController@getXoa');
        /*Route::get('xoa/{id}',function (){
            echo "day la trang xoa loai tin";
        });*/

    });

    Route::group(['prefix'=>'theloai'],function (){
        Route::get('danhsach','theloaiController@danhsach');

        Route::get('them','theloaiController@getThem');
        Route::post('them','theloaiController@postThem');
    });
});