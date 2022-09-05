<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', [PostController::class, 'index'])->name('posts-index');
Route::post('posts-save',[PostController::class, 'store'])->name('posts-store');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
