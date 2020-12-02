<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            [
                'CARNO' => 'Z12-123456',
                'STATS' => 0,
                'KOKSN' => true,
                'ONEON' => true,
                'USRBY' => false,
                'UKENO' => '01932496',
                'TYOID' => 1,
                'NENSK' => '1004',
                'CARNM' => 'アイシス',
                'MKRNM' => 'トヨタ',
                'HIKRY' => '2000',
                'MDLNE' => '23',
                'GRADE' => 'プラタナ"V-SELECTION"',
                'NENRY' => 'G',
                'HANRT' => 'ディーラー',
                'RHAND' => true,
                'KATSK' => 'DBA-ZGM15W',
                'TEIIN' => 7,
                'KDHSK' => '4WD',
                'DOASU' => 5,
                'KEIZO' => 'セダン',
                'SKSRY' => null,
                'SOUKM' => 49000,
                'MTRPN' => 1,
                'GAISK' => 'レッドマイカメタリック',
                'TWOTN' => false,
                'GAINO' => '3R3',
                'COLOR' => '赤',
                'IROKE' => true,
                'NAISK' => 'ダークグレー',
                'NAINO' => null,
                'SNSHS' => true,
                'TRIST' => true,
                'SFTNB' => 'F',
                'MISYN' => true,
                'GIASU' => 6,
                'AIRBG' => 'S',
                'AIRCN' => 'WAC',
                'SUNRF' => false,
                'ENOSY' => 0,
                'NOXFG' => false,
                'KENKG' => '20211104',
                'TNORK' => 'シナガワ',
                'TNOBN' => '500',
                'TNOKN' => 'サ',
                'TNORN' => '99-99',
                'MIHKG' => '0321',
                'CARRK' => 0,
                'KTSNO' => '16354',
                'RKBNO' => '010',
                'SYURK' => true,
                'JAKKI' => true,
                'KOUGU' => false,
                'COMNT' => '非常にきれいな状態です',
                'KTRKN' => '500',
                'IMGSU' => 4,
                'created_at'  => new DateTime(),
            ],
        ]);
    }
}
