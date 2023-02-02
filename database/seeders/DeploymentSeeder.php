<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DeploymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $deployments = array(
            ['name' => 'DeploymentOneOOne','environment_id'=> 1],
            ['name' => 'DeploymentOneOTwo','environment_id' => 1],
            ['name' => 'DeploymentOneOThree','environment_id' => 3],
            ['name' => 'DeploymentOneOFour','enviroment_id' => 4],
            ['name' => 'DeploymentOneOFive','environment_id' => 5],
            ['name' => 'DeploymentTwoOOne' , 'environment_id' => 1],
        );

        DB::table('deployments')->insert($deployments);
    }
}
