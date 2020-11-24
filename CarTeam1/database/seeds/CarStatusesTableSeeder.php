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
            DB::table('car_statuses')->insert([
                [
                    'CARNO' => 'Z12-121111',
                    'no'    => 10,
                    'stats' => 'A',
                    'created_at' => new DateTime(),
                ],
                [
                    'CARNO' => 'Z12-121111',
                    'no'    => 2,
                    'stats' => 'XX',
                    'created_at' => new DateTime(),
                ],
                [
                    'CARNO' => 'Z12-121111',
                    'no'    => 9,
                    'stats' => 'P',
                    'created_at' => new DateTime(),
                ],
                DB::table('car_statuses')->insert([
                    [
                        'CARNO' => 'GGD2-111456',
                        'no'    => 1,
                        'stats' => 'A',
                        'created_at' => new DateTime(),
                    ],
                    [
                        'CARNO' => 'GGD2-111456',
                        'no'    => 8,
                        'stats' => 'XX',
                        'created_at' => new DateTime(),
                    ],
                    [
                        'CARNO' => 'GGD2-111456',
                        'no'    => 13,
                        'stats' => 'P',
                        'created_at' => new DateTime(),
                    ],
                    DB::table('car_statuses')->insert([
                        [
                            'CARNO' => 'G-332-22',
                            'no'    => 2,
                            'stats' => 'B',
                            'created_at' => new DateTime(),
                        ],
                        [
                            'CARNO' => 'G-332-22'
                            'no'    => 2,
                            'stats' => 'XX',
                            'created_at' => new DateTime(),
                        ],
                        [
                            'CARNO' => 'G-332-22',
                            'no'    => 15,
                            'stats' => 'P',
                            'created_at' => new DateTime(),
                        ],
                        DB::table('car_statuses')->insert([
                            [
                                'CARNO' => 'EEQs-212k22',
                                'no'    => 2,
                                'stats' => 'C',
                                'created_at' => new DateTime(),
                            ],
                            [
                                'CARNO' => 'EEQs-212k22',
                                'no'    => 7,
                                'stats' => 'XX',
                                'created_at' => new DateTime(),
                            ],
                            [
                                'CARNO' => 'EEQs-212k22',
                                'no'    => 11,
                                'stats' => 'P',
                                'created_at' => new DateTime(),
                            ],
        ]);
    }
}
