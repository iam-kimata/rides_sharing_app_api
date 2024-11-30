<?php

use App\Http\Controllers\AdminController;
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

// for displaying login page
Route::get('/', [AdminController::class, 'login'] )->name('login');

// for displaying dashboard page
Route::get('dashboard', [AdminController::class, 'dashboard'] )->name('dashboard');

// for displaying students page
Route::get('students', [AdminController::class, 'students'] )->name('students');

// for displaying drivers page
Route::get('drivers', [AdminController::class, 'drivers'] )->name('drivers');

// for displaying routes page
Route::get('trips', [AdminController::class, 'trips'] )->name('trips');

// for displaying edit routes page
Route::get('editTrip', [AdminController::class, 'editTrip'] )->name('editTrip');
