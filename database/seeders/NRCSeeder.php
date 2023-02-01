<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NRCSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nrcs = array(
            ['name' => '3/LaMaNa(N)293521', 'user_id' => 1],
            ['name' => '4/LaMaNa(N)23921', 'user_id' => 2],
            ['name' => '2/LaMaNa(N)872213', 'user_id' => 3],
            ['name' => '8/LaMaNa(N)192372', 'user_id' => 4],
            ['name' => '5/LaMaNa(N)872321', 'user_id' => 5]
        );

        DB::table('nrcs')->insert($nrcs);
    }
}
