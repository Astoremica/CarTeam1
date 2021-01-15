<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Car;

class HomeController extends Controller
{

    public function index()
    {
        $nextDay = date('Y-m-d', strtotime('next Saturday'));

        $cars = Car::select(['CARNO','MKRNM','CARNM','NENSK','SOUKM','STRDT','SYURK','MISYN','HIKRY','STRPR'])->where('STRDT', '>=' , $nextDay)->orderBy('STRDT', 'asc')->get();
        foreach($cars as $car){
            if(!($car['STRDT'] == NULL)){
              $car['STRDT'] = date('Y/m/d H:i', strtotime($car['STRDT']));
            }
          }
        
        return view('user.home', compact('nextDay', 'cars'));
    }

}