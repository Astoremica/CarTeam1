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
            [
                'email'       => 'papapao@gmail.com',
                'password'    => bcrypt('secret'),
                'name1'       => '加藤',
                'name2'       => '陽子',
                'tel'         => '08-1247-3421',
                'furi1'       => 'カトウ',
                'furi2'       => 'ヨウコ',
                'name3'       => 'カトー',
                'postal_code' => '512-2676',
                'address1'    => '大阪府',
                'address2'    => '吹田市',
                'address3'    => '山手台3丁目1-1',
                'birthday'    => '19211021',
                'created_at'  => new DateTime(),
            ],
            [
                'email'       => 'testo@gmail.com',
                'password'    => bcrypt('secret'),
                'name1'       => '吉川',
                'name2'       => '宏佳',
                'tel'         => '06-7557-4654',
                'furi1'       => 'ヨシカワ',
                'furi2'       => 'ヒロカ',
                'name3'       => 'ひなつ',
                'postal_code' => '532-3333',
                'address1'    => '大阪府',
                'address2'    => '大阪市',
                'address3'    => '阿倍野区天王寺3丁目20-1',
                'birthday'    => '20190101',
                'created_at'  => new DateTime(),
            ],
            [
                'email'       => 'dededede@gmail.com',
                'password'    => bcrypt('secret'),
                'name1'       => '中村',
                'name2'       => '実玖',
                'tel'         => '06-2222-0331',
                'furi1'       => 'ナカムラ',
                'furi2'       => 'ミク',
                'name3'       => '彼女',
                'postal_code' => '532-1112',
                'address1'    => '大阪府',
                'address2'    => '茨木市',
                'address3'    => '彩都あさぎ3丁目18-1',
                'birthday'    => '19991001',
                'created_at'  => new DateTime(),
            ],
            [
                'email'       => 'hinatsu@gmail.com',
                'password'    => bcrypt('secret'),
                'name1'       => '松枝',
                'name2'       => '宙夏',
                'tel'         => '06-6347-0001',
                'furi1'       => 'マツエダ',
                'furi2'       => 'ヒナツ',
                'name3'       => '理想の嫁',
                'postal_code' => '532-1131',
                'address1'    => '愛知県',
                'address2'    => '犬山市五郎丸郷瀬川5-1',
                'address3'    => '五郎丸郷瀬川5-1',
                'birthday'    => '19870601',
                'created_at'  => new DateTime(),
            ],
        ]);
    }
}
