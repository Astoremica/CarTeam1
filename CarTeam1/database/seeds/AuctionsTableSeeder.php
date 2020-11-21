<?php

use Illuminate\Database\Seeder;

class AuctionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('auctions')->insert([
            'start_date' => '2020-12-12',
            'name'       => '12月12日のオークション',
            'created_at' => new DateTime(),
        ]);
    }
}
