<?php

use App\Discount;
use Illuminate\Database\Seeder;

class DiscountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('discounts')->delete();
        Discount::create(array('id' => 1, 'created_at' => '2017-11-07 16:10:46', 'updated_at' => '2017-11-07 16:10:46', 
            'code' => 'DISCNT10', 'percent' => 10));
        Discount::create(array('id' => 2, 'created_at' => '2017-11-07 16:10:46', 'updated_at' => '2017-11-07 16:10:46', 
            'code' => 'DECEMB15', 'percent' => 15));
        Discount::create(array('id' => 3, 'created_at' => '2017-11-07 16:10:46', 'updated_at' => '2017-11-07 16:10:46', 
            'code' => 'NOVEMB20', 'percent' => 20));
        Discount::create(array('id' => 4, 'created_at' => '2017-11-07 16:10:46', 'updated_at' => '2017-11-07 16:10:46', 
            'code' => 'MINUSS25', 'percent' => 25));
        Discount::create(array('id' => 5, 'created_at' => '2017-11-07 16:10:46', 'updated_at' => '2017-11-07 16:10:46', 
            'code' => 'THIRTY30', 'percent' => 30));
    }
}
