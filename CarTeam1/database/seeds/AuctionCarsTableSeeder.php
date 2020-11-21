<?php

use Illuminate\Database\Seeder;

class AuctionCarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('auction_cars')->insert([
            'auction_id' => 1,
            'no' => '1',
            'CARNO'       => 'Z12-123456',
            'start_price' => 100000,
            'created_at' => new DateTime(),
        ]);
    }
}
