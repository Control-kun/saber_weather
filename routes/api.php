<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

//Route::middleware('auth:sanctum')->group(function () {
    Route::get('/weather-stack/{city}', [\App\Http\Controllers\WeatherstackController::class, 'show']);
    Route::get('/weather-api/{city}', [\App\Http\Controllers\WeatherApiController::class, 'show']);
    Route::get('/weather-aggregate/{city}', [\App\Http\Controllers\WeatherController::class, 'show']);
//});

Route::post('/tokens/create', function (Request $request) {
    $token = $request->user()->createToken($request->token_name);

    return ['token' => $token->plainTextToken];
});
