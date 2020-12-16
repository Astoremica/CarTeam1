<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Car;
use Auth;

class SearchController extends Controller
{
    public function index()
    {
        return view('user.home');
    }
 
    // 車両名で検索
    public function car_name($car_name)
    {
      $cars = Car::select(['CARNO','MKRNM','CARNM','NENSK','SOUKM','STRDT','SYURK','MISYN','HIKRY','STRPR'])->where('CARNM', 'LIKE', "%$car_name%")->get();

      foreach($cars as $car){
        if(!($car['STRDT'] == NULL)){
          $car['STRDT'] = date('Y/m/d H:i', strtotime($car['STRDT']));
        }
      }

      $user = User::find(Auth::id());
      $favorites = $user->favorites()->get();

      return view('user.search', compact('cars','car_name','favorites'));
    }

    // メーカー名で検索
    public function maker_name($maker_name)
    {
      $cars = Car::select(['CARNO','MKRNM','CARNM','NENSK','SOUKM','STRDT','SYURK','MISYN','HIKRY','STRPR'])->ofMaker($maker_name)->get();

      return view('user.search', $cars);
    }

    // ボディータイプで検索
    public function body_type($body_type)
    {
      $cars = Car::select(['CARNO','MKRNM','CARNM','NENSK','SOUKM','STRDT','SYURK','MISYN','HIKRY','STRPR'])->ofBodyType($body_type)->get();

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

      if($req->send){
        if ($sort === 'price-asc') {
          $query = Car::query();
  
          if(!empty($car_name)) {
            $query->where('CARNM', 'LIKE', "%$car_name%");
          }
          if(!empty($price['min']) && !empty($price['max'])){
            $query->whereBetween('STRPR', [$price['min'], $price['max']]);
          }
          if(!empty($nensk['min']) && !empty($nensk['max'])){
            $query->whereBetween('NENSK', [$nensk['min'], $nensk['max']]);
          }
          if(!empty($soukm['min']) && !empty($soukm['max'])){
            $query->whereBetween('SOUKM', [$soukm['min'], $soukm['max']]);
          }
          
          $cars = $query->orderBy('STRPR', 'desc')->get(['CARNO','MKRNM','CARNM','NENSK','SOUKM','STRDT','SYURK','MISYN','HIKRY','STRPR']);
  
          foreach($cars as $car){
            if(!($car['STRDT'] == NULL)){
              $$car['STRDT'] = date('Y/m/d H:i', strtotime($car['STRDT']));
            }
          }
  
          return view('user.search', compact('cars', 'car_name', 'sort', 'min_price', 'max_price', 'min_nensk', 'max_nensk', 'min_soukm', 'max_soukm'));
        } elseif ($sort === 'price-desc') {
            $query = Car::query();
    
            if(!empty($car_name)) {
              $query->where('CARNM', 'LIKE', "%$car_name%");
            }
            if(!empty($price['min']) && !empty($price['max'])){
              $query->whereBetween('STRPR', [$price['min'], $price['max']]);
            }
            if(!empty($nensk['min']) && !empty($nensk['max'])){
              $query->whereBetween('NENSK', [$nensk['min'], $nensk['max']]);
            }
            if(!empty($soukm['min']) && !empty($soukm['max'])){
              $query->whereBetween('SOUKM', [$soukm['min'], $soukm['max']]);
            }
            
            $cars = $query->orderBy('STRPR', 'desc')->get(['CARNO','MKRNM','CARNM','NENSK','SOUKM','STRDT','SYURK','MISYN','HIKRY','STRPR']);
  
            foreach($cars as $car){
              if(!($car['STRDT'] == NULL)){
                $car['STRDT'] = date('Y/m/d H:i', strtotime($car['STRDT']));
              }
            }
  
            return view('user.search', compact('cars', 'car_name', 'sort', 'min_price', 'max_price', 'min_nensk', 'max_nensk', 'min_soukm', 'max_soukm'));
        }  elseif ($sort == NULL) {
          $query = Car::query();

          if(!empty($car_name)) {
            $query->where('CARNM', 'LIKE', "%$car_name%");
          }
          if(!empty($price['min']) && !empty($price['max'])){
            $query->whereBetween('STRPR', [$price['min'], $price['max']]);
          }
          if(!empty($nensk['min']) && !empty($nensk['max'])){
            $query->whereBetween('NENSK', [$nensk['min'], $nensk['max']]);
          }
          if(!empty($soukm['min']) && !empty($soukm['max'])){
            $query->whereBetween('SOUKM', [$soukm['min'], $soukm['max']]);
          }

          $cars = $query->orderBy('STRPR', 'desc')->get(['CARNO','MKRNM','CARNM','NENSK','SOUKM','STRDT','SYURK','MISYN','HIKRY','STRPR']);

          foreach($cars as $car){
            if(!($car['STRDT'] == NULL)){
              $car['STRDT'] = date('Y/m/d H:i', strtotime($car['STRDT']));
            }
          }

          $user = User::find(Auth::id());
          $favorites = $user->favorites()->get();

          return view('user.search', compact('cars', 'car_name', 'min_price', 'max_price', 'min_nensk', 'max_nensk', 'min_soukm', 'max_soukm','favorites'));
        }
      }
    }
  }