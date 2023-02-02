<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = array(
            ['name' => 'Author'],
            ['name' => 'Programmer'],
            ['name' => 'Content Writer'],
            ['name' => 'Teacher'],
            ['name' => 'Cashier'],
            ['name' => 'Driver'],
            ['name' => 'student'],
            ['name' => 'Engineer'],
            ['name' => 'Supervisor'],
            ['name' => 'Developer']
        );

        DB::table('roles')->insert($roles);

    }
}
