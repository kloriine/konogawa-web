<?php

use App\Http\Controllers\OrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserMobileController;

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

Route::resource('products', ProductController::class)->middleware('auth:api');
Route::resource('orders', OrderController::class)->middleware('auth:api');
Route::group(['prefix' => 'account'], function () {
    Route::post('/login', [UserMobileController::class, 'login']);
    Route::post('/register', [UserMobileController::class, 'register']);
    Route::post('/logout', [UserMobileController::class, 'logout'])->middleware('auth:api');
});