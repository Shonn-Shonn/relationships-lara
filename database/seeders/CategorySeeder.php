<?php

namespace Database\Seeders;

use App\Models\Category;
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
            array('name' => 'Books'), 
            array('name' => 'Mobile'), 
            array('name' => 'Toys'),
            array('name' => 'Laptop'),
            array('name' => 'Drink'),
        );

        DB::table('categories')->insert($categories);
    }
}
