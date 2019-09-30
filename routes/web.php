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

Route::group(['prefix'=>'admin'],function(){
		Route::get('list','UserController@list')->name('admin.list');
		Route::get('admin','UserController@adminpage')->name('admin.adminpage');
		Route::get('adduser','UserController@adduser')->name('admin.adduser');
		Route::post('adduser','UserController@postadduser')->name('admin.postadd');
		Route::get('confirmuser','UserController@confirmuser')->name('admin.confirmuser')->middleware('checkconfirmadd');
});