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

      return view('user.search', $cars);
    }

    // メーカー名で検索
    public function maker_name($maker_name)
    {
      $cars = Car::select(['CARNO','MKRNM','CARNM','NENSK','SOUKM'])->ofMaker($maker_name)->get();
      DD($cars);

      return view('user.search', $cars);
    }

    // ボディータイプで検索
    public function body_type($body_type)
    {
      $cars = Car::select(['CARNO','MKRNM','CARNM','NENSK','SOUKM'])->ofBodyType($body_type)->get();
      DD($cars);

      return view('user.search', $cars);
    }

    // 詳細検索
    public function search_detail(Request $req)
    {
      $car_name = $req->car_name;
      $sort = $req->sort;
      $price = [
          'min' => $req->min_price,
          'max' => $req->max_price,
      ];
      $min_price = $req->min_price;
      $max_price = $req->max_price;
      $nensk = [
        'min' => $req->min_nensk,
        'max' => $req->max_nensk,
      ];
      $min_nensk = $req->min_nensk;
      $max_nensk = $req->max_nensk;
      $soukm = [
        'min' => $req->min_soukm,
        'max' => $req->max_soukm,
      ];
      $min_soukm = $req->min_soukm;
      $max_soukm = $req->max_soukm;

      if ($sort === 'price-asc') {
        $cars = Car::where('CARNM', 'LIKE', "%$car_name%")
            ->when($category, function ($query, $category) {
                return $query->where('category', $category);
            }, function ($query) {
                return $query;
            })
            ->when($price['min'] && $price['max'], function ($query, $price) {
                return $query->whereBetween('price', [$price['min'], $price['max']]);
            }, function ($query) {
                return $query;
            })
            ->orderBy('price', 'asc')->get(['product_code', 'name', 'price', 'sell_user_code','sell_type']);

        return view('search', compact('products', 'keyword', 'sort', 'category', 'min_price', 'max_price'));
    } elseif ($sort === 'price-desc') {
        $products = Product::where('name', 'LIKE', "%$keyword%")
            ->when($category, function ($query, $category) {
                return $query->where('category', $category);
            }, function ($query) {
                return $query;
            })
            ->when($price['min'] && $price['max'], function ($query, $price) {
                return $query->whereBetween('price', [$price['min'], $price['max']]);
            }, function ($query) {
                return $query;
            })
            ->orderBy('price', 'desc')->get(['product_code', 'name', 'price', 'sell_user_code','sell_type']);

        return view('search', compact('products', 'keyword', 'sort', 'category', 'min_price', 'max_price'));
    }
    }
}