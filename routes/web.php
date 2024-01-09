<?php

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route untuk Super Admin
    Route::group(['middleware' => 'role:super-admin'], function () {
        // Definisi route Super Admin di sini
    });

    // Route untuk Purchasing
    Route::group(['middleware' => 'role:purchasing'], function () {
        // Definisi route Purchasing di sini
    });

    // Route untuk Project Manager
    Route::group(['middleware' => 'role:project-manager'], function () {
        // Definisi route Project Manager di sini
    });

    // Route untuk Inventory Management
    Route::group(['middleware' => 'role:inventory-management'], function () {
        // Definisi route Inventory Management di sini
    });

    // Route untuk Finance
    Route::group(['middleware' => 'role:finance'], function () {
        // Definisi route Finance di sini
    });
});

require __DIR__.'/auth.php';
