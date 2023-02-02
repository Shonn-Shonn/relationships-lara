<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = array(
            ['name' => 'Human Resource System'],
            ['name' => 'School Management System'],
            ['name' => 'Payment System'],
            ['name' => 'POS system'],
            ['name' => 'Hospital Managment System'],
            ['name' => 'Transportation Managment System']
        );
        DB::table('projects')->insert($projects);

    }
}
