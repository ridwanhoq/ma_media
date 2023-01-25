<?php

use App\Http\Controllers\Api\V1\LoginApiController;
use App\Http\Controllers\UserBasicController;
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

Route::prefix("/v1")->group(function () {

    Route::controller(LoginApiController::class)->group(function(){
        Route::get('login', 'loginRequires');
        Route::post('login', 'login');
    });


    Route::middleware('auth:sanctum')->group(function () {
        Route::controller(UserBasicController::class)->group(function () {
            Route::get('users', 'index');
        });
    });
});
