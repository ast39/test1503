<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\EquipmentTypeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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

Route::group(['middleware' => 'api', 'prefix'     => 'auth',], function($router) {
    Route::post('login',   [AuthController::class, 'login']);
    Route::post('logout',  [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me',      [AuthController::class, 'me']);
});

# Блок оборудования
Route::apiResource('equipment', EquipmentController::class);

# Блок типов оборудования
Route::apiResource('etype', EquipmentTypeController::class)->middleware('auth:api');


Route::fallback(function(){
    return response()->json([
        'message' => 'Page Not Found. If error persists, contact alexandr.statut@gmail.com'
    ], 404);
});


if (env('APP_ENV') === 'production') {
    URL::forceScheme('https');
}
