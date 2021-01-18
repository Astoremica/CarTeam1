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

  // 開催予定一覧
  public function list()
  {
      $nextDay = date('Y-m-d', strtotime('next Saturday'));

      $cars = Car::select(['CARNO','MKRNM','CARNM','NENSK','SOUKM','STRDT','SYURK','MISYN','HIKRY','STRPR','STATS'])->where('STRDT', '>=' , $nextDay)->orderBy('STRDT', 'asc')->get();
      foreach($cars as $car){
          if(!($car['STRDT'] == NULL)){
            $car['STRDT'] = date('Y/m/d H:i', strtotime($car['STRDT']));
          }
        }
      
      return view('user.auction_list', compact('nextDay', 'cars'));
  }
}