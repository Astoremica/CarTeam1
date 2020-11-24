<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            [
                'password'    => bcrypt('secret'),
                'name'    => '社員太郎',
                'department'    => '営業1',
                'created_at' => new DateTime(),
            ],
            [
                'password'    => bcrypt('secret'),
                'name'    => '社員次郎',
                'department'    => '開発1',
                'created_at' => new DateTime(),
            ],
        ]);
    }
}
