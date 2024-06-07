<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\AppoitmentController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\RiskAssessmentController;
use App\Http\Controllers\DiagnosticCentersController;

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
        Route::get('add',[AppoitmentController::class,'create'])->name('app_create');
        Route::post('create',[AppoitmentController::class,'store'])->name('app_store');
        Route::get('/app_details/{id}',[AppoitmentController::class,'show'])->name('app_details');
        Route::get('/edit/{id}',[AppoitmentController::class,'edit'])->name('edit');
        Route::put('app_edit',[AppoitmentController::class,'update'])->name('app_edit');
        Route::get('/delete/{id}',[AppoitmentController::class,'destroy'])->name('delete');
        
    });

    Route::prefix('patients')->group(function () {
        Route::get('view',[PatientController::class,'index']);
        Route::get('add',[PatientController::class,'create'])->name('add');
        Route::post('patient_store',[PatientController::class,'store'])->name('patient_store');
        Route::get('/patient_details/{id}',[PatientController::class,'show'])->name('patient_details');
        Route::get('/edit/{id}',[PatientController::class,'edit'])->name('edit');
        Route::put('patient_edit',[PatientController::class,'update'])->name('patient_edit');
        Route::get('/delete/{id}',[PatientController::class,'destroy'])->name('delete');
    });

});
Route::prefix('centers')->group(function () {
    Route::get('view',[DiagnosticCentersController::class,'index']);
    Route::get('add',[DiagnosticCentersController::class,'create'])->name('add');
    Route::post('center_store',[DiagnosticCentersController::class,'store'])->name('center_store');
    Route::get('/edit/{id}',[DiagnosticCentersController::class,'edit'])->name('edit');
    Route::put('center_edit',[DiagnosticCentersController::class,'update'])->name('center_edit');
    Route::get('/delete/{id}',[DiagnosticCentersController::class,'destroy'])->name('delete');
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
