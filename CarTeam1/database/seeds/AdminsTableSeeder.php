database/seeders/AdminsTableSeeder
<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name'       => 'admin',
            'email'      => 'admin@example.com',
            'password'   => bcrypt('secret'),
            'created_at' => new DateTime(),
        ]);
    }
}