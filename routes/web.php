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

        Route::get('sua/{id}','loaitinController@getSua');
        Route::post('sua/{id}','loaitinController@postSua');

        Route::get('xoa/{id}','loaitinController@getXoa');
        /*Route::get('xoa/{id}',function (){
            echo "day la trang xoa loai tin";
        });*/

    });

    Route::group(['prefix'=>'theloai'],function (){
        Route::get('danhsach','theloaiController@danhsach')->name('quantri/theloai/danhsach');

        Route::get('them','theloaiController@getThem');
        Route::post('them','theloaiController@postThem');

        Route::get('sua/{id}','theloaiController@getSua');
        Route::post('sua/{id}','theloaiController@postSua');

        Route::get('xoa/{id}','theloaiController@getXoa');

    });

    Route::group(['prefix'=>'tintuc'],function (){
        Route::get('danhsach','tintucController@danhsach')->name('quantri/tintuc/danhsach');

        Route::get('them','tintucController@getThem');
        Route::post('them','tintucController@postThem');

        Route::get('sua/{id}','tintucController@getSua');
        Route::post('sua/{id}','tintucController@postSua');

        Route::get('xoa/{id}','tintucController@getXoa');

    });


});

Route::group(['prefix'=>'ajax'],function (){
    Route::post('layloaitin','ajaxController@layloaitin');
});