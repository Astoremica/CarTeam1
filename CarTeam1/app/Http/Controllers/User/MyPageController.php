<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Car;
use Auth;

class MyPageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:user');
    }

    public function index()
    {
        $user = User::find(Auth::id());
        $favorites = $user->favorites()->get();
        $transactions = $user->transactions;
        $cars = $user->cars()->get();
        foreach($cars as $car){
            if(!($car['STRDT'] == NULL)){
              $car['STRDT'] = date('Y/m/d', strtotime($car['STRDT']));
            }
        }
        return view('user.mypage', compact('user','favorites','transactions','cars'));
    }

    public function transaction()
    {
        $user = User::find(Auth::id());
        $transactions = $user->transactions;
        $cars = $user->cars()->get();
        foreach($cars as $car){
            if(!($car['STRDT'] == NULL)){
              $car['STRDT'] = date('Y/m/d', strtotime($car['STRDT']));
            }
        }
        return view('user.mypage_transaction_list', compact('user','transactions','cars'));
    }

    public function favorite()
    {
        $user = User::find(Auth::id());
        $favorites = $user->favorites()->get();
        foreach($favorites as $favorite){
            if(!($favorite['STRDT'] == NULL)){
              $favorite['STRDT'] = date('Y/m/d', strtotime($favorite['STRDT']));
            }
        }
        return view('user.mypage_favorite_list', compact('user','favorites'));
    }
    
}