<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UsersController,
    CupController,
};

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::post('/user/register', [UsersController::class, 'register']);

Route::apiResource('/cups', CupController::class);
