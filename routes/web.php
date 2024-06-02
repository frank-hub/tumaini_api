<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\AppoitmentController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\RiskAssessmentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('admin.auth_login');
});

Route::post('riskscore',[RiskAssessmentController::class,'calculateRisk']);


Route::middleware(['auth'])->group(function () {
    Route::get('dashboard',[Dashboard::class,'index'])->name('dashboard');

    Route::prefix('appointment')->group(function () {
        Route::get('index',[AppoitmentController::class,'index'])->name('app_index');
        Route::get('create',[AppoitmentController::class,'create'])->name('app_create');
        Route::post('create',[AppoitmentController::class,'store'])->name('app_store');
    });
});


Route::get('appointments', function () {
    return view('admin.appointments');
});

Route::get('patients', function () {
    return view('admin.patients');
});

Route::get('patient_details', function () {
    return view('admin.patient_details');
});

Route::get('reports', function () {
    return view('admin.reports');
});

Route::get('forms/appointment', function () {
    return view('admin.forms_general');
});

Route::get('auth_login', function () {
    return view('admin.auth_login');
});

Route::get('auth_register', function () {
    return view('admin.auth_register');
});

Route::get('auth_user_pass', function () {
    return view('admin.auth_user_pass');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
