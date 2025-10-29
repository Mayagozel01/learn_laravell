<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyPlaceController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/my-place',[MyPlaceController::class,"index"]);
Route::get('/posts',[PostController::class,"index"])->name('post.index');
Route::get('/posts/create',[PostController::class,"create"])->name('post.create');
Route::get('/posts/{post}',[PostController::class,"show"])->name('post.show');
// {post}---shunna nm yazsan Controllerde parametr edip shony almaly (Post $post)
Route::post('/posts',[PostController::class,"store"])->name('post.store');
Route::get('/posts/{post}/edit',[PostController::class,"edit"])->name('post.edit');
Route::patch('/posts/{post}/update',[PostController::class,"update"])->name('post.update');
Route::delete('/posts/{post}',[PostController::class,"destroy"])->name('post.delete');

Route::get('/main',[MainController::class,"index"])->name('main.index');
Route::get('/about',[AboutController::class,"index"])->name('about.index');
Route::get('/contact',[ContactController::class,"index"])->name('contact.index');
