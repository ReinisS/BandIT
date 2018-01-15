<?php

use App\City;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->delete();
        City::create(array('id' => 1, 'created_at' => '2017-11-07 16:10:46', 'updated_at' => '2017-11-07 16:10:46', 'name' => 'Riga', 'country_id' => 1));
        City::create(array('id' => 2, 'created_at' => '2017-11-07 16:10:46', 'updated_at' => '2017-11-07 16:10:46', 'name' => 'Ventspils', 'country_id' => 1));
        City::create(array('id' => 3, 'created_at' => '2017-11-07 16:10:46', 'updated_at' => '2017-11-07 16:10:46', 'name' => 'Rezekne', 'country_id' => 1));
        City::create(array('id' => 4, 'created_at' => '2017-11-07 16:10:46', 'updated_at' => '2017-11-07 16:10:46', 'name' => 'Tallinn', 'country_id' => 2));
        City::create(array('id' => 5, 'created_at' => '2017-11-07 16:10:46', 'updated_at' => '2017-11-07 16:10:46', 'name' => 'Tartu', 'country_id' => 2));
        City::create(array('id' => 6, 'created_at' => '2017-11-07 16:10:46', 'updated_at' => '2017-11-07 16:10:46', 'name' => 'Parnu', 'country_id' => 2));
        City::create(array('id' => 7, 'created_at' => '2017-11-07 16:10:46', 'updated_at' => '2017-11-07 16:10:46', 'name' => 'Vilnius', 'country_id' => 3));
        City::create(array('id' => 8, 'created_at' => '2017-11-07 16:10:46', 'updated_at' => '2017-11-07 16:10:46', 'name' => 'Kaunas', 'country_id' => 3));
        City::create(array('id' => 9, 'created_at' => '2017-11-07 16:10:46', 'updated_at' => '2017-11-07 16:10:46', 'name' => 'Klaipeda', 'country_id' => 3));
    }
}
