<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Car;

class CarController extends Controller
{
  public function index()
  {
      return view('user.home');
  }

  // 選択した車両の詳細情報
  public function car_detail($car_no)
  {
    $cars = Car::find($car_no);

    return view('user.search', $cars);
  }
}