<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sizes')->insert([
            [
                'name' => 'Small',
                'base_price' => 8.00,
                'topping_price' => 0.25
            ],
            [
                'name' => 'Medium',
                'base_price' => 10.00,
                'topping_price' => 0.50
            ],
            [
                'name' => 'Large',
                'base_price' => 12.00,
                'topping_price' => 0.75
            ],
            [
                'name' => 'Extra Large',
                'base_price' => 14.00,
                'topping_price' => 1.00
            ],
        ]);
    }
}
