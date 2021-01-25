<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
      DB::table('transactions')->insert([
        [
          'CARNO' => '1N6-1FeQCK',
          'price' => 700,
          'user_id' => 1,
          'k_status' => 0,
          'n_status' => 0,
          'created_at' => new DateTime(),
        ],
        [
          'CARNO' => '7LDCI-cTzSvo',
          'price' => 1200,
          'user_id' => 1,
          'k_status' => 1,
          'n_status' => 1,
          'created_at' => new DateTime(),
        ],
        [
          'CARNO' => '5-zmgbJ',
          'price' => 1310,
          'user_id' => 1,
          'k_status' => 1,
          'n_status' => 1,
          'created_at' => new DateTime(),
        ],
        [
          'CARNO' => '85O4-oSz90',
          'price' => 420,
          'user_id' => 1,
          'k_status' => 0,
          'n_status' => 0,
          'created_at' => new DateTime(),
        ],
        [
          'CARNO' => 'MV-QcYrm',
          'price' => 1820,
          'user_id' => 1,
          'k_status' => 1,
          'n_status' => 1,
          'created_at' => new DateTime(),
        ],
      ]);
  }
}