<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{PostController,ProfileController, UserController};

Route::get('/', function () {
    return view('welcome');
});

Route::get('posts/{id}', [PostController::class, 'show'])
    ->name('posts.show');

Route::get('users/{id}', [UserController::class, 'show'])
    ->name('users.show');

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');