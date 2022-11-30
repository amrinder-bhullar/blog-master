<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('/posts', function () {
    return response()->json([
        'posts' => Post::all()
    ]);
});
Route::get('/users', function () {
    return response()->json([
        'users' => User::all()
    ]);
});
Route::get('/users/{user}', function (User $user) {
    return response()->json([
        'user' => $user
    ]);
});
Route::get('/users/{user}/bookmarks', function (User $user) {
    return response()->json([
        'bookmarks' => $user->bookmarks
    ]);
});
