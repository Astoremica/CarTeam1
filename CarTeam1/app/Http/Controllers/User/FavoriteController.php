<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Car;
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
        return view('user.search');
    }

    public function store($CARNO, Request $req)
    {
        $user = User::find(Auth::id());
        $favorites = $user->favorites()->get();
        if(empty($favorites)){
            DB::table('favorites')->insert([
                ['CARNO' => $CARNO, 'user_id' => $user['id'], 'created_at' => date("Y-m-d H:i:s")]
            ]);
        }else{
            $cnt = 0;
            foreach($favorites as $favorite){
                if($favorite['CARNO'] == $CARNO){
                    $cnt++;
                }
            }
            if($cnt == 0){
                DB::table('favorites')->insert([
                    ['CARNO' => $CARNO, 'user_id' => $user['id'], 'created_at' => date("Y-m-d H:i:s")]
                ]);
            }else{
                DB::table('favorites')->where('CARNO', $CARNO)->delete();
            }
        }

        // 初期値を空にする
        $car_name = "";
        $sort = null;
        $min_price = null;
        $max_price = null;
        $min_nensk = null;
        $max_nensk = null;
        $min_soukm = null;
        $max_soukm = null;

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
          }

          $favorites = $user->favorites()->get();
        
          return view('user.search', compact('cars', 'car_name', 'min_price', 'max_price', 'min_nensk', 'max_nensk', 'min_soukm', 'max_soukm','favorites'));
    }
    
}