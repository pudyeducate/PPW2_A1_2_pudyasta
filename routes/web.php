<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

//route resource
// Route::resource('/', \App\Http\Controllers\PostController::class)->name('get','posts.index');
Route::get('/', [PostController::class,'index'])->name('posts.index');
Route::post('/post', [PostController::class,'store'])->name('posts.store');
Route::get('/post', [PostController::class,'create'])->name('posts.create');
Route::get('/post/show/{id}', [PostController::class,'show'])->name('posts.show');
Route::get('/post/edit/{id}', [PostController::class,'edit'])->name('posts.edit');
Route::put('/post/update/{id}', [PostController::class,'update'])->name('posts.update');
Route::delete('/destroy/{id}', [PostController::class,'destroy'])->name('posts.destroy');