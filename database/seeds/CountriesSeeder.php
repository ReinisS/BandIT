<?php

use App\Country;
use Illuminate\Database\Seeder;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->delete();
        Country::create(array('id' => 1, 'created_at' => '2017-11-07 16:10:46', 'updated_at' => '2017-11-07 16:10:46', 'name' => 'Latvia'));
        Country::create(array('id' => 2, 'created_at' => '2017-11-07 16:11:39', 'updated_at' => '2017-11-07 16:11:39', 'name' => 'Estonia'));
        Country::create(array('id' => 3, 'created_at' => '2017-11-07 16:13:46', 'updated_at' => '2017-11-07 16:13:46', 'name' => 'Lithuania'));        
    }
}
