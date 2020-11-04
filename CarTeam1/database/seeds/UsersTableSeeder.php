<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'email'       => 'haltaro@gmail.com',
                'password'    => bcrypt('secret'),
                'name1'       => '春',
                'name2'       => '太郎',
                'tel'         => '06-6347-0001',
                'furi1'       => 'ハル',
                'furi2'       => 'タロウ',
                'name3'       => '円卓の騎士',
                'postal_code' => '532-0001',
                'address1'    => '大阪府',
                'address2'    => '大阪市',
                'address3'    => '北区梅田3丁目3-1',
                'birthday'    => '19980101',
                'created_at'  => new DateTime(),
            ],
        ]);
    }
}
