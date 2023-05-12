<?php

use App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\Route;
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
    return view('frontend.index');
});

Route::controller(Frontend::class)->group(function () {
    Route::get('/about', 'About')->name('about');
    Route::get('/services', 'Services')->name('services');
    Route::get('/contact', 'Contact')->name('contact');
    Route::get('/appointment', 'Appointment')->name('appointment');
});
