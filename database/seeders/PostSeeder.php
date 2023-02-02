<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = array(
            ['name' => 'Why the Order of your Skincare Routine Matters','user_id' => 1],
            ['name' => '10 Skincare Resolutions You Should Make in 2021', 'user_id' => 2],
            ['name' => 'Top 5 easy tips to maintain your skin in a busy schedule', 'user_id' => 3],
            ['name' => '10 beauty tips every girl should follow in 2021', 'user_id' => 4],
            ['name' => 'How to Start a Skincare Regimen','user_id' => 5],
            ['name' => 'What to Know as a Client Going Back to the Spa', 'user_id' => 6],
            ['name' => 'What to Know About Vitamin A and Skin', 'user_id' => 7],
            ['name' => 'An Overnight Mask Could Be the Key to Waking Up Glowing','user_id' => 8],
        );

        DB::table('posts')->insert($posts);
    }
}
