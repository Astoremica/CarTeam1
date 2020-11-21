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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

// 管理者側ルート
Route::prefix('admin')->namespace('Admin')->group(function () {
  // TOP
  Route::get('/', 'AdminController@index')->name('admin');
});