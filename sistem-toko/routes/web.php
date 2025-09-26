<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;

Route::get('/produk', function () {
    return view('produk');
});


Route::middleware(['auth', 'role:admin,owner'])->group(function () {
    Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
});

Route::get('/home', function () {
    $user = Auth::user();
    return view('home', compact('user'));
})->middleware('auth')->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/login');
})->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('barang', function () {
    return view('barang');
});



require __DIR__.'/auth.php';