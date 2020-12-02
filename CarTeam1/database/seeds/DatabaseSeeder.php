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
        $this->call([
            UsersTableSeeder::class,
            AuctionsTableSeeder::class,
            CarsTableSeeder::class,
            CarCommentsTableSeeder::class,
            CarStatusesTableSeeder::class,
            ControllersTableSeeder::class,
            OptionsTableSeeder::class,
            EmployeesTableSeeder::class,
            AdminsTableSeeder::class,
        ]);
    }
}
