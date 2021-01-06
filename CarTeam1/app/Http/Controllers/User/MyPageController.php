<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
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
        dd($user->favorites()->get());
        return view('user.mypage');
    }
    
}