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
        // $this->call(UsersTableSeeder::class);
        $this->call(CgiesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(CarouselsTableSeeder::class);
        // $this->call(RegistersTableSeeder::class);
        // $this->call(LoginsTableSeeder::class);
    }
}
