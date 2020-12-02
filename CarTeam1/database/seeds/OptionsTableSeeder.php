<?php

use Illuminate\Database\Seeder;

class OptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('options')->insert([
            [
                'CARNO' => 'Z12-123456',
                'option'    => 'PS',
                'created_at' => new DateTime(),
            ],
            [
                'CARNO' => 'Z12-123456',
                'option'    => 'AW',
                'created_at' => new DateTime(),
            ],
            [
                'CARNO' => 'Z12-123456',
                'option'    => 'TV',
                'created_at' => new DateTime(),
            ],
                [
                'CARNO' => 'Z12-121111',
                'option'    => 'PS',
                'created_at' => new DateTime(),
            ],
                [
                'CARNO' => 'Z12-121111',
                'option'    => 'PW',
                'created_at' => new DateTime(),
            ],
                [
                'CARNO' => 'Z12-121111',
                'option'    => 'ABS',
                'created_at' => new DateTime(),
            ],
                 [
                'CARNO' => 'Z12-121111',
                'option'    => 'AW',
                'created_at' => new DateTime(),
            ],
                 [
                'CARNO' => 'Z12-121111',
                'option'    => '革シート',
                'created_at' => new DateTime(),
            ],
                [
                'CARNO' => 'GGD2-111456',
                'option'    => 'PS',
                'created_at' => new DateTime(),
            ],
                [
                'CARNO' => 'GGD2-111456',
                'option'    => 'PW',
                'created_at' => new DateTime(),
            ],
                [
                'CARNO' => 'GGD2-111456',
                'option'    => 'ABS',
                'created_at' => new DateTime(),
            ],
                 [
                'CARNO' => 'GGD2-111456',
                'option'    => 'CD',
                'created_at' => new DateTime(),
            ],
            
              [
                'CARNO' => 'G-332-22',
                'option'    => 'PS',
                'created_at' => new DateTime(),
            ],
                [
                'CARNO' => 'G-332-22',
                'option'    => 'PW',
                'created_at' => new DateTime(),
            ],
                [
                'CARNO' => 'G-332-22',
                'option'    => 'ABS',
                'created_at' => new DateTime(),
            ],
                 [
                'CARNO' => 'G-332-22',
                'option'    => 'ナビ',
                'created_at' => new DateTime(),
            ],
                    [
                'CARNO' => 'G-332-22',
                'option'    => 'CD',
                'created_at' => new DateTime(),
            ],
                    [
                'CARNO' => 'G-332-22',
                'option'    => 'TV',
                'created_at' => new DateTime(),
            ],
            
            [
                'CARNO' => 'EEQs-212k22',
                'option'    => 'PS',
                'created_at' => new DateTime(),
            ],
                [
                'CARNO' => 'EEQs-212k22',
                'option'    => 'PW',
                'created_at' => new DateTime(),
            ],
                [
                'CARNO' => 'EEQs-212k22',
                'option'    => 'ABS',
                'created_at' => new DateTime(),
            ],
                 [
                'CARNO' => 'EEQs-212k22',
                'option'    => 'ナビ',
                'created_at' => new DateTime(),
            ],
                  [
                'CARNO' => 'EEQs-212k22',
                'option'    => 'CD',
                'created_at' => new DateTime(),
            ],      [
                'CARNO' => 'EEQs-212k22',
                'option'    => 'TV',
                'created_at' => new DateTime(),
            ],
            
        ]);
    }
}
