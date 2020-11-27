<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Car;

class SearchController extends Controller
{
    public function index()
    {
        return view('user.home');
    }
 
    // 車両名で検索
    public function car_name($car_name)
    {
      $cars = Car::select(['CARNO','MKRNM','CARNM','NENSK','SOUKM'])->where('CARNM', 'LIKE', "%$car_name%")->get();
      DD($cars);

      return view('search', $cars);
    }

    // メーカー名で検索
    public function maker_name($maker_name)
    {
      $cars = Car::select(['CARNO','MKRNM','CARNM','NENSK','SOUKM'])->ofMaker($maker_name)->get();
      DD($cars);

      return view('search', $cars);
    }

    // ボディータイプで検索
    public function body_type($body_type)
    {
      $cars = Car::select(['CARNO','MKRNM','CARNM','NENSK','SOUKM'])->ofBodyType($body_type)->get();
      DD($cars);

      return view('search', $cars);
    }
}