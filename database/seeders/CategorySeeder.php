<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = array(
            ['title' => 'Books'],
            ['title' => 'Mobile'],
            ['title' => 'Toys'],
            ['title' => 'Cars'],
            ['title' => 'Drink'],
            ['title' => 'Bread'],
            ['title' => 'School Accessories']
        );
        DB::table('categories')->insert($categories);
    }
}
