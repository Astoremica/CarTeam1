<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Car;
use App\Models\Transaction;

class CarController extends Controller
{
  public function index()
  {
      return view('user.home');
  }

  // 選択した車両の詳細情報
  public function car_detail($CARNO)
  {
    $car = Car::find($CARNO);
    $have_options = $car->options;
    $controllers = $car->controllers;
    $statuses = $car->statuses;
    $comments = $car->comment;
    $car['STRDT'] = date('Y/m/d H:i', strtotime($car['STRDT']));
    $transactions = Transaction::get();


    $options = [
      'PS' => 'パワーステアリング',
      'PW' => 'パワーウィンドウ',
      'ABS' => 'アンチロックブレーキシステム',
      'AW' => 'アルミホイール',
      'カセット' => 'カセットステレオ',
      'CD' => 'CDステレオ',
      'MD' => 'MDステレオ',
      'TV' => 'テレビ',
      'ナビ' => 'ナビ',
      '革シート' => '革シート'
    ];

    return view('user.car', compact('car','options','controllers','statuses','comments','have_options','transactions'));
  }
}