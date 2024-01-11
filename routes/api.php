<?php

use App\Http\Controllers\hospital\HospitalController;
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

Route::get('/hospital/categories/all', [HospitalController::class, 'index'])->name('hospital.category.view');
Route::get('/hospital/categories/{id}', [HospitalController::class, 'show'])->name('hospital.category.show');
Route::post('/hospital/categories/create', [HospitalController::class, 'create'])->name('hospital.category.new.store');
