<?php

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

Route::get(uri: '/about', action: function (): string {
    return 'Ini Halaman About';
})->name(name: 'about');

Route::get(uri: '/contact', action: function (): string {
    return ('Ini adalah halaman kontak');
})->name(name: 'contact');

Route::get(uri: '/users/{id}', action: function ($id) {
    return "Nilai ID users adalah " . $id;
});

Route::prefix('manage')->group(callback: function () : void {
    Route::get(uri: '/edit', action: function () : string {
        return "ini adalah halmaan manager/edit";
    });
    Route::get(uri: '/barang', action: function () : string {
        return "ini adalah halaman manager/barang";
    });
});