<?php

use Illuminate\Database\Seeder;

class CarStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('car_statuses')->insert([
            [
                'CARNO' => 'Z12-123456',
                'no'    => 2,
                'stats' => 'A',
                'created_at' => new DateTime(),
            ],
            [
                'CARNO' => 'Z12-123456',
                'no'    => 5,
                'stats' => 'XX',
                'created_at' => new DateTime(),
            ],
            [
                'CARNO' => 'Z12-123456',
                'no'    => 9,
                'stats' => 'P',
                'created_at' => new DateTime(),
            ],
        ]);
    }
}
