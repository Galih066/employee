<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Employee\ProfileEmployeeController;
use App\Http\Controllers\Employee\FormPersonalDataController;
use App\Http\Controllers\Employee\EmployeeDashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'index'])->name('login_page');
Route::post('/sendcredential', [AuthController::class, 'authenticate'])->name('send_credentials');

Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::prefix('admin')->middleware('adminAuthorization')->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin_dashboard');
    });

    Route::prefix('employee')->group(function () {
        Route::get('/dashboard', [EmployeeDashboardController::class, 'index'])->name('employee_dashboard');
        Route::get('/profile', [ProfileEmployeeController::class, 'index'])->name('employee_profile');
        Route::get('/provinces', [FormPersonalDataController::class, 'provinces']);
        Route::get('/cities', [FormPersonalDataController::class, 'cities'])->name('cities');
        Route::get('/districts', [FormPersonalDataController::class, 'districts'])->name('districts');
        Route::get('/villages', [FormPersonalDataController::class, 'villages'])->name('villages');

        Route::post('/sendpersonaldata', [ProfileEmployeeController::class, 'updatePersonalData'])->name('updatePersonalData');
        Route::post('/sendparentdata', [ProfileEmployeeController::class, 'updateParentData'])->name('updateParentData');
        Route::post('/sendedudata', [ProfileEmployeeController::class, 'updateEduData'])->name('updateEduData');
    });
});
