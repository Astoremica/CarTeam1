<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CarsTableSeeder::class);
        $this->call(CarCommentsTableSeeder::class);
        $this->call(CarStatusesTableSeeder::class);
        $this->call(ControllersTableSeeder::class);
        $this->call(OptionsTableSeeder::class);
        $this->call(EmployeesTableSeeder::class);
    }
}
