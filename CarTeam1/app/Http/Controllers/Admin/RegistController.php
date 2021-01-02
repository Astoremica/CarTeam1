<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Option;
use App\Models\Controllers;
use App\Models\CarComment;
use App\Models\CarStatus;

class RegistController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    // View
    public function car()
    {
        return view('admin.regist.car');
    }

    public function auction()
    {
        return view('admin.regist.auction');
    }

    public function employye()
    {
        return view('admin.regist.employee');
    }

    // Store
    public function storeCar(Request $req)
    {
        // 登録処理
        Car::create([
            'CARNO' => $req['CARNO'],
            'UKENO' => $req['UKENO'],
            'TYOID' => $req['TYOID'],
            'NENSK' => $req['NENSK'],
            'CARNM' => $req['CARNM'],
            'MKRNM' => $req['MKRNM'],
            'HIKRY' => $req['HIKRY'],
            'MDLNE' => $req['MDLNE'],
            'GRADE' => $req['GRADE'],
            'KATSK' => $req['KATSK'],
            'TEIIN' => $req['TEIIN'],
            'DOASU' => $req['DOASU'],
            'KEIZO' => $req['KEIZO'],
            'SKSRY' => $req['SKSRY'],
            'SOUKM' => $req['SOUKM'],
            'GAISK' => $req['GAISK'],
            'GAINO' => $req['GAINO'],
            'COLOR' => $req['COLOR'],
            'NAISK' => $req['NAISK'],
            'NAINO' => $req['NAINO'],
            'GIASU' => $req['GIASU'],
            'KENKG' => $req['KENKG'],
            'TNORK' => $req['TNORK'],
            'TNOBN' => $req['TNOBN'],
            'TNOKN' => $req['TNOKN'],
            'TNORN' => $req['TNORN'],
            'MIHKG' => $req['MIHKG'],
            'KTSNO' => $req['KTSNO'],
            'RKBNO' => $req['RKBNO'],
            'COMNT' => $req['COMNT'],
            'KTRKN' => $req['KTRKN'],
            'ONEON' => $req['ONEON'],
            'KOKSN' => $req['KOKSN'],
            'USRBY' => $req['USRBY'],
            'TWOTN' => $req['TWOTN'],
            'IROKE' => $req['IROKE'],
            'SNSHS' => $req['SNSHS'],
            'TRIST' => $req['TRIST'],
            'SUNRF' => $req['SUNRF'],
            'NENRY' => $req['NENRY'],
            'HANRT' => $req['HANRT'],
            'RHAND' => $req['RHAND'],
            'KDHSK' => $req['KDHSK'],
            'MTRPN' => $req['MTRPN'],
            'SFTNB' => $req['SFTNB'],
            'MISYN' => $req['MISYN'],
            'AIRBG' => $req['AIRBG'],
            'AIRCN' => $req['AIRCN'],
            'ENOSY' => $req['ENOSY'],
            'NOXFG' => $req['NOXFG'],
            'CARRK' => $req['CARRK'],
            'SYURK' => $req['SYURK'],
            'JAKKI' => $req['JAKKI'],
            'KOUGU' => $req['KOUGU'],
            'IMGSU' => 1,
        ]);
        CarComment::create([
            'CARNO' => $req['CARNO'],
            'KIZU' => $req['KIZU'],
            'KOGE' => $req['KOGE'],
            'KGAN' => $req['KGAN'],
            'YGRE' => $req['YGRE'],
            'YBRE' => $req['YBRE'],
            'KNEN' => $req['KNEN'],
            'CMNT' => $req['CMNT'],
        ]);
        if($req['options']){
            foreach($req['options'] as $option){
                Option::create([
                    'CARNO'  => $req['CARNO'],
                    'option' => $option,
                ]);
            }
        }
        if($req['controllers']){
            foreach($req['controllers'] as $controller){
                Controllers::create([
                    'CARNO'  => $req['CARNO'],
                    'controller' => $controller,
                ]);
            }
        }
        for ($i=1; $i < 26; $i++) { 
            if ($req['status' . $i]){
                foreach($req['status' . $i] as $status){
                    CarStatus::create([
                        'CARNO' => $req['CARNO'],
                        'NO'    => $i,
                        'stats' => $status,
                    ]);
                }
            }
        }
        return redirect()->route('admin.regist.car')->with('message', '車両情報登録完了');
    }

}