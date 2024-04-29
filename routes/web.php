<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Services\Newsletter;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;



Route::get('/', [PostsController::class,'index'])->name('home');

Route::get("/posts/{post:slug}", [PostsController::class,'show']);
Route::post("/posts/{post:slug}/comments", [CommentController::class,'store']);

Route::post('newsletter',NewsletterController::class);

Route::get('/register',[RegisterController::class, 'create'])->middleware('guest');
Route::post('/register',[RegisterController::class, 'store'])->middleware('guest');

Route::get('/login',[SessionsController::class, 'create'])->middleware('guest');
Route::post('/sessions',[SessionsController::class, 'store'])->middleware('guest');

Route::post('/logout',[SessionsController::class, 'destroy'])->middleware('auth');

//admin
Route::get('/admin/posts/create',[AdminController::class,'create'])->middleware('admin');
Route::post('/admin/posts',[AdminController::class,'store'])->middleware('admin');
Route::get('/admin/dashboard',[AdminController::class,'show'])->middleware('admin');
Route::get('/admin/{post:id}/edit' , [AdminController::class, 'edit'])->middleware('admin');
Route::patch('/admin/{post:id}' , [AdminController::class, 'update'])->middleware('admin');
Route::delete('/admin/{post:id}/delete' , [AdminController::class, 'delete'])->middleware('admin');
