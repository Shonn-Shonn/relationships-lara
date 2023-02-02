<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $phones = array(
            ['number' => '0923252135', 'user_id' => 1],
            ['number' => '0973225752', 'user_id' => 2],
            ['number' => '093251153', 'user_id' => 3],
            ['number' => '092523523', 'user_id' => 4],
            ['number' => '0932532953', 'user_id' => 5],
            ['number' => '0992382232', 'user_id' => 6],
            ['number' => '0923525223', 'user_id' => 7],
            ['number' => '0923523532', 'user_id' => 8],
            ['number' => '092325225', 'user_id' => 9]
        );

        DB::table('phones')->insert($phones);
    }
}
