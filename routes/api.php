<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RiskFactorController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\API\AppoitmentController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\API\AuthAPIController;
use App\Http\Controllers\API\CentersController;

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



Route::middleware(['json.request.type'])->group(function () {
    Route::post('riskFactor/store',[RiskFactorController::class,'calculateRisk']);

    Route::prefix('appointment')->group(function () {
        Route::get('index',[AppoitmentController::class,'index']);
        Route::post('store',[AppoitmentController::class,'store']);
    });

    Route::prefix('center')->group(function () {
        Route::get('index',[CentersController::class,'index']);

    });
});

Route::post('/login',[AuthAPIController::class,'login']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
