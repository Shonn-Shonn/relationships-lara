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

        DB::table('posts')->truncate();


        $posts = array(
            ['name' => 'Why the Order of your Skincare Routine Matters','user_id' => 1,'body' => 'Within an essay, body paragraphs allow a writer to expand on ideas and provide audiences with support for a chosen topic or argument. Under most circumstances, body paragraphs can be divided into three basic parts: a topic sentence, an illustration, and an explanation.', 'like' => 82],
            ['name' => '10 Skincare Resolutions You Should Make in 2021', 'user_id' => 2, 'body' => ' These three parts answer three questions for the reader: What‟s your point? Can you give an example? How does your example establish your point? If you answer these three questions, you will have also established a conclusion with which to end the paragraph', 'like' => 123],
            ['name' => 'Top 5 easy tips to maintain your skin in a busy schedule', 'user_id' => 3,'body' => 'Because it develops evidence to support a claim, an effective body paragraph moves from general to specific information.','like' => 20],
            ['name' => '10 beauty tips every girl should follow in 2021', 'user_id' => 4,'body' => 'The most general information should be at the beginning of the paragraph, and, as the paragraph moves forward, the paragraph should become more focused as it provides specific information to reach a clear and specific conclusion','like' => 232],
            ['name' => 'How to Start a Skincare Regimen','user_id' => 5,'body' => 'The different parts of a body paragraph combine to generate clear and logical ideas for the reader. It is important to be comfortable with how to use these parts to create a readable, usable paragraph.', 'like' => 321],
            ['name' => 'What to Know as a Client Going Back to the Spa', 'user_id' => 6, 'body' => 'Following the topic sentence are sentences that introduce your supporting evidence. Evidence may include a useful or informative sentence from a book, a journal article, or another source that supports the argument of the paper. It may also include an example drawn from first-hand  observation or personal experience.','like' => 522],
            ['name' => 'What to Know About Vitamin A and Skin', 'user_id' => 7,'body' => 'Review the following body paragraph. 1) Eliminate any sentences that do not relate to the topic sentence and main idea of the body paragraph. 2) Identify each of the five elements of a body paragraph defined above. This exercise will strengthen your ability to stay focused when you write your next paper.','like' => 3243],
            ['name' => 'An Overnight Mask Could Be the Key to Waking Up Glowing','user_id' => 8,'body' => 'One of the most important aspects of ice hockey is speed because players must skate around defensemen and get to open areas of the rink. The fastest players are able to sneak around an opposing defense and go on breakaways, creating scoring chances. Being big is also important because size allows players to hit hard','like' => 2353],
        );

        DB::table('posts')->insert($posts);
    }
}
