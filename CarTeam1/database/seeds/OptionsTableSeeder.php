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
        ]);
    }
}
