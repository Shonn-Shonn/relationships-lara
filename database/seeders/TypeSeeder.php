<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = array(
            ['name' => 'Horror', 'category_id' => 1],
            ['name' => 'Comedy', 'category_id' => 1],
            ['name' => 'Lenovo', 'category_id' => 4],
            ['name' => 'Acer', 'category_id' => 4],
            ['name' => 'Milk', 'category_id' => 5]
        );

        DB::table('types')->insert($types);
    }
}
