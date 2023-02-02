<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnviromentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $environments = array(
            ['name' => 'NewBie', 'project_id' => 1],
            ['name' => 'Updating', 'project_id' => 2],
            ['name' => 'Startup', 'project_id' => 3],
            ['name' => 'Testing', 'project_id' => 4],
            ['name' => 'Process', 'project_id' => 5],
            ['name' => 'Bugs','project_id' => 6],
            ['name' => 'Test_Bug','project_id' => 3]
        );

        DB::table('environments')->insert($environments);
    }
}
