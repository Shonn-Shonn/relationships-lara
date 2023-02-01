<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = array(
            ['name' => 'Oishi', 'price' => 250],
            ['name' => 'TopChoice', 'price' => 4500],
            ['name' => 'Lock&Lock', 'price' => 65000],
            ['name' => 'CutePress', 'price' => 5000],
            ['name' => 'Rseries', 'price' => 2000],
            ['name' => 'BabyMind', 'price' => 2500],
            ['name' => 'Locker', 'price' => 3200],
            ['name' => 'Wave', 'price' => 300],
            ['name' => 'Milk', 'price' => 3200],
            ['name' => 'DetchMilk', 'price' => 650],
        );

        DB::table('products')->insert($products);
    }
}
