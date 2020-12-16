<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class FavoriteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:user');
    }

    public function index()
    {
        $user = User::find(Auth::id());
        return view('user.seaech');
    }

    public function store($CARNO)
    {
        $user = User::find(Auth::id());
        
        return view('user.seaech');
    }
    
}