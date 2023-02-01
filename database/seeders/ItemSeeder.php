<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = array(
            ['name' => 'Aspire E14', 'description' => 'for young people', 'type_id' => 4],
            ['name' => 'Cow Head', 'description' => 'for babies', 'type_id' => 5]
        );

        DB::table('items')->insert($items);
    }
}
