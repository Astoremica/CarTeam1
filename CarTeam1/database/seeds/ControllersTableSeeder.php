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
                'CARNO' => 'Z12-123456',
                'controller'    => 'TV',
                'created_at' => new DateTime(),
            ],
            [
                'CARNO' => 'Z12-123456',
                'controller'    => 'エアコン',
                'created_at' => new DateTime(),
            ],
        ]);
    }
}
