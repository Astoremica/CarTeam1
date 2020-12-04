<?php

use Illuminate\Database\Seeder;

class CarCommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('car_comments')->insert([
            [
                'CARNO' => 'Z12-123456',
                'KIZU'  => false,
                'KOGE'  => true,
                'KGAN'  => false,
                'YGRE'  => true,
                'YBRE'  => false,
                'KNEN'  => false,
                'CMNT'  => '特記事項無し',
                'created_at' => new DateTime(),
            ],
            [
                'CARNO' => 'Z12-121111',
                'KIZU'  => false,
                'KOGE'  => true,
                'KGAN'  => false,
                'YGRE'  => true,
                'YBRE'  => true,
                'KNEN'  => false,
                'CMNT'  => '特記事項無し',
                'created_at' => new DateTime(),
            ],
            [
                'CARNO' => 'GGD2-111456',
                'KIZU'  => true,
                'KOGE'  => true,
                'KGAN'  => false,
                'YGRE'  => true,
                'YBRE'  => false,
                'KNEN'  => false,
                'CMNT'  => '特記事項無し',
                'created_at' => new DateTime(),
            ],
            [
                'CARNO' => 'G-332-22',
                'KIZU'  => true,
                'KOGE'  => true,
                'KGAN'  => false,
                'YGRE'  => true,
                'YBRE'  => false,
                'KNEN'  => false,
                'CMNT'  => '特記事項無し',
                'created_at' => new DateTime(),
            ],
            [
                'CARNO' => 'EEQs-212k22',
                'KIZU'  => false,
                'KOGE'  => true,
                'KGAN'  => false,
                'YGRE'  => true,
                'YBRE'  => false,
                'KNEN'  => true,
                'CMNT'  => '特記事項無し',
                'created_at' => new DateTime(),
            ],
        ]);
    }
}
