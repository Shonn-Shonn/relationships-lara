<?php

use App\Enums\ProductEnum;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestingController;
use App\Models\NRC;
use App\Models\Phone;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use NunoMaduro\Collision\Adapters\Laravel\Commands\TestCommand;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//User+Phone(hasOneRelationship);
Route::get('user/phone', [TestingController::class,'userPhone']); 

//Post+Comment(hasManyRelationship);
Route::get('post/show', [PostController::class, 'postShow']);

//user+role(ManyToManyRelationship);
Route::post('user/roles', [TestingController::class, 'userRoles']);
Route::post('role/users', [TestingController::class, 'roleUsers']);
Route::post('add/userroles', [TestingController::class, 'addUserRoles']);

//project+deployment(hasOneThrough);
Route::post('project/deployments', [TestingController::class, 'projectDeployments']);

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/comments', [PostController::class, 'postComments']);
Route::get('/allposts', [PostController::class, 'allPosts']);


//companies
Route::get('/companies', [PostController::class, 'companies']);

Route::get('/testing', function () {
    $product = new Product();
    $product->name = 'New Product2';
    $product->body = 'This is a paragraph2.';
    $product->status = ProductEnum::Inactive;
    $product->save();

    return response()->json([
         'data' => $product
    ]);
});