<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Dashboard
Route::get('/dashboard', [RegisteredUserController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // User CRUD
    Route::get('/users', [RegisteredUserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [RegisteredUserController::class, 'create'])->name('users.create');
    Route::post('/users', [RegisteredUserController::class, 'store'])->name('users.store');
    Route::get('/users/{id}/edit', [RegisteredUserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{id}', [RegisteredUserController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}', [RegisteredUserController::class, 'destroy'])->name('users.destroy');
});Route::get('/users/{id}', [RegisteredUserController::class, 'show'])->name('users.show');


require __DIR__.'/auth.php';
