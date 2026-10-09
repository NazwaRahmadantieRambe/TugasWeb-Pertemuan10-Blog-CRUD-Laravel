<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::post('/posts', function () {
    return 'Data post berhasil dikirim';
});
Route::get('/hello/{nama}', function ($nama) {
    return 'Halo ' . $nama;
});
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Halaman Dashboard Admin';
    });
});
Route::resource('/posts', PostController::class);