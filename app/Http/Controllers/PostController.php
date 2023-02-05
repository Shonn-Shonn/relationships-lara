<?php

namespace App\Http\Controllers;

use App\Http\Resources\CommentResource;
use App\Models\Comment;
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


    public function index()
    {
        $comment = Comment::find(1);
        return response()->json([
             'data' => new CommentResource($comment)
        ]);
    }
}
