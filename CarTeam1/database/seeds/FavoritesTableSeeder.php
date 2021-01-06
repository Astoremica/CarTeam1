<?php

use Illuminate\Database\Seeder;

class FavoritesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('favorites')->insert([
            [
                'CARNO' => 'Z12-123456',
                'user_id' => 1,
                'created_at' => new DateTime(),
            ],
        ]);
    }
}
