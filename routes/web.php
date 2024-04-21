<?php

use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\BlogCommentController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/blog/addCategory', [BlogCategoryController::class, 'addCategory']);
Route::get('/blog/updatePost', [BlogPostController::class, 'updatePost']);
Route::get('/blog/deleteComment', [BlogCommentController::class, 'deleteComment']);

Route::get('/blog/{categoryId}', [BlogCategoryController::class, 'getCategories']);
Route::get('/blog/{categoryId}/{postId}', [BlogPostController::class, 'getPosts']);
Route::get('/blog', [BlogController::class, 'getBlog']);
