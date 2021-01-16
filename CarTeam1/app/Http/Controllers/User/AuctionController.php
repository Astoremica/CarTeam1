<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Car;

class AuctionController extends Controller
{
  // オークション
  public function index($CARNO)
  {
    $car = Car::find($CARNO);
    return view('user.auction', compact('car'));
  }
}