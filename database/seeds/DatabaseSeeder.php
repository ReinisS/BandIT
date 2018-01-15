<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $this->call(UserTableSeeder::class);
        $this->call(CountriesSeeder::class);
        $this->call(CitiesSeeder::class);
        $this->call(ConferencesSeeder::class);
        $this->call(DiscountsSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
