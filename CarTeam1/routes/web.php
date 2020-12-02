<?php
// 最初の画面
Route::get('/', function () {
  return view('user.home');
})->name('user.home');

// ユーザー
Route::namespace('User')->prefix('user')->name('user.')->group(function () {

  // ログイン認証関連
  Auth::routes([
    'register' => true,
    'reset'    => false,
    'verify'   => false
  ]);

  // TOPページ
  Route::resource('home', 'HomeController', ['only' => 'index']);

  // ログイン認証後
  Route::middleware('auth:user')->group(function () {

    // ログインしないとだめなroute
    Route::get('mypage/', 'MyPageController@index')->name('mypage');

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

  // ログイン認証後(Adminはすべてここ)
  Route::middleware('auth:admin')->group(function () {

    // TOPページ
    Route::resource('/', 'HomeController', ['only' => 'index']);
    Route::resource('home', 'HomeController', ['only' => 'index']);

    // 登録系
    Route::prefix('regist')->group(function () {
      Route::get('car','RegistController@car')->name('regist.car');
      Route::post('car','RegistController@storeCar')->name('regist.store.car');
      Route::get('auction','RegistController@auction')->name('regist.auction');
      Route::get('employee','RegistController@employee')->name('regist.employee');
    });

  });

});