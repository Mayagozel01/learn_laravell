<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyPlaceController;
use App\Http\Controllers\Post\IndexController;
use App\Http\Controllers\Post\CreateController;
use App\Http\Controllers\Post\ShowController;
use App\Http\Controllers\Post\StoreController;
use App\Http\Controllers\Post\EditController;
use App\Http\Controllers\Post\UpdateController;
use App\Http\Controllers\Post\DestroyController;

use App\Http\Controllers\MainController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/my-place',[MyPlaceController::class,"index"]);

Route::namespace('App\Http\Controllers\Post')->group(function () {
Route::get('/posts',[IndexController::class,"__invoke"])->name('post.index');
Route::get('/posts/create',[CreateController::class,"__invoke"])->name('post.create');
Route::get('/posts/{post}',[ShowController::class,"__invoke"])->name('post.show');
// {post}---shunna nm yazsan Controllerde parametr edip shony almaly (Post $post)
Route::post('/posts',[StoreController::class,"__invoke"])->name('post.store');
Route::get('/posts/{post}/edit',[EditController::class,"__invoke"])->name('post.edit');
Route::patch('/posts/{post}/update',[UpdateController::class,"__invoke"])->name('post.update');
Route::delete('/posts/{post}',[DestroyController::class,"__invoke"])->name('post.delete');
});

Route::get('/main',[MainController::class,"index"])->name('main.index');
Route::get('/about',[AboutController::class,"index"])->name('about.index');
Route::get('/contact',[ContactController::class,"index"])->name('contact.index');
