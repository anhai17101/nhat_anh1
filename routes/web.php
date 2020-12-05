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
    return view('welcome');
});

Route::get('login','loginController@login_index')->name('login');
Route::post('accset','loginController@accset')->name('accset');
Route::get('logout','loginController@logout')->name('logout');
Route::post('search','loginController@search')->name('search');
Route::post('qtydisc', 'loginController@qtydisc')->name('qtydisc');

Route::group(['middleware'=>'Checklogin'],function(){
    Route::post('change','loginController@change')->name('change');
    Route::resource('phongBans','PhongBansController');
    Route::resource('nhan_vien','NhanViensController');
    Route::resource('nguoi_dung','NguoiDungsController');
});
