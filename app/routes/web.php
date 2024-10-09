<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{PostController,ProfileController};

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('tasks/create', [TaskController::class, 'create'])->name('tasks.create');
});

Route::get('posts/{id}', [PostController::class, 'show'])
    ->name('posts.show');

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

