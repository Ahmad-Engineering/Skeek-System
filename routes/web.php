<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\SheekController;
use App\Http\Livewire\Counter;
use App\Http\Livewire\EditSheek;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('auth')->middleware('guest:admin')->group(function () {
    Route::get('/{guard}/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('login', [AuthController::class, 'login']);
});

// Recourses
Route::prefix('check-system')->middleware('auth:admin')->group(function () {
    Route::resource('sheeks', SheekController::class);
    Route::resource('countries', CountryController::class);
});

Route::prefix('check-system')->middleware('auth:admin')->group(function () {

    // Admin Dashboard
    Route::view('/', 'back-end.index')->name('back-end.dashboard');
    Route::get('move-sheek/{sheek}', EditSheek::class);

    // Home
    Route::get('dashboard', [SheekController::class, 'statisics'])->name('admin.dashboard');

    // Paid & Recived Sheeks
    Route::get('recived-sheeks', [SheekController::class, 'recivedSheek'])->name('sheeks.recived');
    Route::get('paid-sheeks', [SheekController::class, 'paidSheeks'])->name('sheeks.paid');

    // Change password
    Route::get('change-password', [AuthController::class, 'showChangePassword'])->name('password.change');
    Route::post('change-password', [AuthController::class, 'changePassword']);

    // Logout
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::prefix('check-system')->group(function () {

    // Register
    Route::get('register', [AuthController::class, 'showRegister'])->name('register.view');
    Route::post('register', [AuthController::class, 'register']);
});

Route::fallback(function () {
    return view('error.page-not-found');
});