<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RiskAssessmentController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\AppoitmentController;
use App\Http\Controllers\PatientController;

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
    Route::post('riskscore',[RiskAssessmentController::class,'calculateRisk']);

});

Route::middleware(['auth'])->group(function () {

    Route::prefix('appointment')->group(function () {
        Route::get('index',[AppoitmentController::class,'index'])->name('app_index');
        Route::get('create',[AppoitmentController::class,'create'])->name('app_create');
        Route::post('store',[AppoitmentController::class,'store'])->name('app_store');
    });

    Route::get('dashboard',[Dashboard::class,'index'])->name('dashboard');

});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
