<?php

use App\Http\Controllers\UserController;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $posts = Post::get();
return view('welcome',compact('posts'));
});


Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::post('/users/search', [UserController::class, 'search'])->name('users.search');
Route::get('/user/show', [UserController::class, 'show'])->name('user.show');
Route::get('/user/insert', [UserController::class, 'insert'])->name('user.insert');