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
        ]);
    }
}
