<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\AdminDashboardController;

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
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin_dashboard');
    });
});
