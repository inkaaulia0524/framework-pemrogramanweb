<?php
use Illuminate\Support\Facades\Route;

// Menampilkan view utama
Route::get('/', function () {
    return view('welcome');
});

// a. Route dasar
Route::get('/hello', function () {
    return 'Hello, World!';
})->name('hello');

// b. Route dengan parameter
Route::get('/user/{id}', function ($id) {
    return "User ID: " . $id;
})->name('user');

// c. Route dengan parameter opsional
Route::get('/guest/{name?}', function ($name = 'Guest') {
    return "Hello, " . $name;
})->name('guest');

// d. Named route
Route::get('/profile', function () {
    return 'Ini halaman profil.';
})->name('profile');

// e. Redirect ke named route
Route::get('/redirect', function () {
    return redirect()->route('profile');
})->name('redirect');

// f. Route group dengan prefix
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });

    Route::get('/profile', function () {
        return 'Admin Profile';
    });
});