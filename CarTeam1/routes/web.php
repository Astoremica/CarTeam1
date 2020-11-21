<?php

// ユーザー
Route::namespace('User')->prefix('user')->name('user.')->group(function () {

  // ログイン認証関連
  Auth::routes([
    'register' => true,
    'reset'    => false,
    'verify'   => false
  ]);

  // ログイン認証後
  Route::middleware('auth:user')->group(function () {

    // TOPページ
    Route::resource('home', 'HomeController', ['only' => 'index']);

  });
});

// 管理者
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {

  // ログイン認証関連
  Auth::routes([
    'register' => true,
    'reset'    => false,
    'verify'   => false
  ]);

  // ログイン認証後
  Route::middleware('auth:admin')->group(function () {

    // TOPページ
    Route::resource('home', 'HomeController', ['only' => 'index']);

  });

});