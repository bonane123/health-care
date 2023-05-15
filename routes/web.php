<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Frontend;
use App\Http\Controllers\ProfileController;
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

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'AdminDashboard'])->name('dashboard');
    Route::get('/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::get('/more/information', [AdminController::class, 'AdminProfile'])->name('more.information');
    Route::post('/more/information/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');

    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'edit')->name('profile.edit');
        Route::patch('/profile', 'update')->name('profile.update');
        Route::delete('/profile', 'destroy')->name('profile.destroy');
    });
});

require __DIR__.'/auth.php';
