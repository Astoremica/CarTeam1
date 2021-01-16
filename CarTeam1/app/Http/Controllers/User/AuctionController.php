<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Car;

class AuctionController extends Controller
{
  // オークション
  public function index($car_no)
  {
    $car = Car::find($car_no);
    return view('user.auction', $car);
  }
}