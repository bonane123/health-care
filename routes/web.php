<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Frontend;
use App\Http\Controllers\hospital\HospitalController;
use App\Http\Controllers\patient;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
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
    Route::get('/e-learning/patient', 'ElearningPatient')->name('e-learning.patient');
    Route::get('/e-learning/healthcare', 'ElearningHealthCare')->name('e-learning.healthcare');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'AdminDashboard'])->name('dashboard');
    Route::get('/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::get('/more/information', [AdminController::class, 'AdminProfile'])->name('more.information');
    Route::post('/more/information/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/users/all', [AdminController::class, 'AllUsers'])->name('all.users');
    Route::get('/user/add', [AdminController::class, 'AddUser'])->name('dashboard.pages.user.add_user');
    Route::post('/user/store', [AdminController::class, 'StoreUser'])->name('dashboard.pages.user.store');
    Route::get('/user/edit/{id}', [AdminController::class, 'EditUser'])->name('dashboard.pages.user.edit');
    Route::post('/dashboard/pages/user/update', [AdminController::class, 'UpdateUser'])->name('dashboard.pages.user.update');
    Route::get('/user/undelete/{id}', [AdminController::class, 'UnDeleteUser'])->name('dashboard.pages.user.delete');
    Route::get('/user/delete/{id}', [AdminController::class, 'DeleteUser'])->name('dashboard.pages.user.undelete');
    

    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'edit')->name('profile.edit');
        Route::patch('/profile', 'update')->name('profile.update');
        Route::delete('/profile', 'destroy')->name('profile.destroy');

    });

    Route::controller(HospitalController::class)->group(function () {
        Route::get('/hospital/categories', 'HospitalCategory')->name('hospital.category');
        Route::post('/hospital/categories/store', 'HospitalCategoryStore')->name('hospital.category.store');
        Route::get('/hospital/category/{id}', 'HospitalCategoryEdit')->name('hospital.category.edit');
        Route::get('/hospital/category/delete/{id}', 'HospitalCategoryDelete')->name('hospital.category.delete');
        Route::put('/hospital/category/edit/store', 'HospitalCategoryEditStore')->name('hospital.category.edit.store');
        Route::get('/hospital/all', 'AllHospitals')->name('all.hospitals');
        Route::get('/hospital/add', 'AddHospital')->name('add.hospital');
        Route::post('/hospital/add/store', 'AddNewHospital')->name('hospital.add.new');
        Route::get('/hospital/edit/{id}', 'HospitalEdit')->name('hospital.edit');
        Route::put('/hospital/update', 'HospitalEditStore')->name('hospital.edit.store');
        Route::get('/hospital/delete/{id}', 'HospitalDelete')->name('hospital.delete');
        
        Route::get('/district/ajax/{province_id}', 'GetDistrict');
        Route::get('/sector/ajax/{district_id}', 'GetSector');
        Route::get('/cell/ajax/{sector_id}', 'GetCell');
        
    });

    Route::controller(PatientController::class)->group(function (){
        Route::get('/patient', 'AddPatient')->name('patient.add');
    });

    Route::controller(RoleController::class)->group(function (){
        Route::get('/dashboard/pages/permission',  'AllPermissions')->name('dashboard.pages.permission.all');
        Route::post('/dashboard/pages/permission/add',  'AddPermissions')->name('dashboard.pages.permission.add');
        Route::get('/dashboard/pages/role',  'AllRoles')->name('dashboard.pages.role.all');
        Route::post('/dashboard/pages/role/add',  'AddRole')->name('dashboard.pages.role.add');
        Route::get('/dashboard/pages/role/permission/add',  'AddRolePermission')->name('dashboard.pages.role.permission.add');
        Route::get('/dashboard/pages/role/permission',  'AllRolePermission')->name('dashboard.pages.role.permission.all');
        Route::post('/dashboard/pages/role/permission/store',   'StoreRolePermission')->name('dashboard.pages.role.permission.store');
        Route::get('/dashboard/pages/role/permission/edit/{id}',  'EditRolePermission')->name('dashboard.pages.role.permission.edit');
        Route::post('/dashboard/pages/role/permission/update/{id}',  'UpdateRolePermissions')->name('dashboard.pages.role.permission.update');
        Route::get('/dashboard/pages/permission/edit/{id}',  'EditPermission')->name('dashboard.pages.permission.edit');
        Route::put('/dashboard/pages/permission/update',  'UpdatePermission')->name('dashboard.pages.permission.update');
    });
});

require __DIR__.'/auth.php';
