<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

// Dashboard tunggal, cek role di dalamnya
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


// Group untuk admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('products', ProductController::class);
});

// Group untuk user
Route::middleware(['auth', 'role:user'])->group(function () {
    // profile bisa diakses semua user login
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';