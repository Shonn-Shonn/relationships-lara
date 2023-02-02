<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comments = array(
            ['title' => 'write about skin care tips ', 'post_id' => 1],
            ['title' => 'for skin care and beauty tips.', 'post_id' => 2],
            ['title' => 'helpful guidelines', 'post_id' => 3],
            ['title' => 'fetch great results for the website/ blog', 'post_id' => 4],
            ['title' => 'not much technical knowledge is required', 'post_id' => 5],
            ['title' => 'start off with home remedies and general ideas', 'post_id' => 6],
            ['title' => 'even a short beauty course', 'post_id' => 4],
            ['title' => 'Health problems such as obesity and blood pressure', 'post_id' => 5],
            ['title' => 'A high-quality blog ', 'post_id' => 5],
            ['title' => 'various aspects of health, diseases and cures of the ailments', 'post_id' => 7],
            ['title' => 'to waste their time on things which are not worth it', 'post_id' => 8],
            ['title' => 'Watching and reading will provide you a good amount of recreation', 'post_id' => 7],
            ['title' => 'just appreciable thinking ability', 'post_id' => 1],
            ['title' => 'Good info', 'post_id' => 1],
        );
        DB::table('comments')->insert($comments);
    }
}
