<?php

use Illuminate\Database\Seeder;

class AuctionLogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('auction_logs')->insert([
            'CARNO'      => 'EEQs-212k22',
            'price'      => 550,
            'user_id'    => 1,
            'created_at' => new DateTime(),
        ]);
    }
}
