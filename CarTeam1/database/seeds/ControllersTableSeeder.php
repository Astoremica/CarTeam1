<?php

use Illuminate\Database\Seeder;

class ControllersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('controllers')->insert([
            [
                'CARNO'      => 'Z12-123456',
                'controller' => 'エアコン',
                'created_at' => new DateTime(),
            ],
             [
                'CARNO' => 'Z12-121111',
                'controller'    => 'ナビ',
                'created_at' => new DateTime(),
            ],
             [
                'CARNO' => 'GGD2-111456',
                'controller'    => 'オーディオ',
                'created_at' => new DateTime(),
            ], 
            [
                'CARNO' => 'GGD2-111456',
                'controller'    => 'テレビ',
                'created_at' => new DateTime(),
            ]
        ]);
    }
}
