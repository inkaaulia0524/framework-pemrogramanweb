<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UtsController;
use Illuminate\Support\Facades\Auth;

Route::resource('product', ProductController::class);

Route::get('product/export/excel', [ProductController::class, 'exportExcel'])->name('product.export.excel');

Route::get('/', function () {
    return view('auth.login');
});

Route::prefix('uts')->group(function () {
    Route::get('/', [UtsController::class, 'index'])->name('uts.index');
    Route::get('/pemrograman-web', [UtsController::class, 'pemrogramanWeb'])->name('uts.pemrograman');
    Route::get('/database', [UtsController::class, 'database'])->name('uts.database');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/produk/{angka}', [ProductController::class, 'cekAngka']);

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

Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');

require __DIR__.'/auth.php';