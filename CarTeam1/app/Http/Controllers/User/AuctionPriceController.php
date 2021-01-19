<?php

namespace App\Http\Controllers\User;


use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\AuctionLog;

class AuctionPriceController extends Controller
{
    // オークション
    public function index($CARNO)
    {

        $price =  AuctionLog::find($CARNO);
        return $price;
    }
}
