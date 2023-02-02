<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\TestingController;
use App\Models\NRC;
use App\Models\Phone;
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


Route::post('user/roles', [TestingController::class, 'userRoles']);
Route::post('role/users', [TestingController::class, 'roleUsers']);