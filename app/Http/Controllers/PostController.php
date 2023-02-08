<?php

namespace App\Http\Controllers;

use App\Http\Resources\CommentResource;
use App\Models\Comment;
use App\Models\Company;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function postShow(Post $post, User $user)
    {
        //$comments = Post::find(1)->comments()->where('title', 'Good Info')->first();
        $user = Post::find(1)->user;
        dd($user->toArray());
        //dd($comments->toArray());
    }


    public function index(Post $post)
    {
        //$comment = new Comment(['title' => 'lack of emotions']);

        $post = Post::find(2);

        //$post->comments()->save($comment);

        $post->refresh();

        //$comment2 = new Comment(['title' => 'apathetic']);

        $post->comments()->saveMany([
            new Comment(['title' => 'lack of emotions']),
            new Comment(['title' => 'apathetic']),
        ]);

        return response()->json([
              'data' => Post::get()
        ]);

    }


    public function postComments()
    {
        $posts = Post::has('comments')->with('comments')->get();

        return response()->json([
            'message' => 'Show successfully',
            'data' => $posts
        ]);
    }

    public function companies(Company $company)
    {
        $company = Company::take(10)->get();
        dd($company->toArray());
    }

    public function allPosts(Post $post)
    {
        $post = Post::addSelect(['like', 'body'])->get();

        return response()->json([
              'message' => 'Show data!',
              'data' => $post,
        ]);
    }
}
