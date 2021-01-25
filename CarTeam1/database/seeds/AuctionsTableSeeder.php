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
            'start_date' => '2021-01-30',
            'name'       => '1月30日のオークション',
            'created_at' => new DateTime(),
        ]);
    }
}
