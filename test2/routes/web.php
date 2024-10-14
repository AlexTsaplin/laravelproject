<?php

use App\Http\Controllers\MainController;
use App\Livewire\ShowPosts;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class,'home']);

Route::get('/categories', [MainController::class,'categories']);

Route::get('/about', [MainController::class,'about']);

//Route::get('/mobile', [MainController::class,'mobile'])->name('product');

Route::get('/review', [MainController::class,'review'])->name('review');
Route::post('/review/check', [MainController::class,'review_check']);

Route::get('/questions', [MainController::class,'questions']);

Route::get('/show-posts',ShowPosts::class)->name('show-posts');

Route::get('/apple', [MainController::class,'apple']);

//Route::get('/user/{id}/{name}', function ($id, $name) {
//    return 'ID: '. $id. '. Name: '. $name;
//});
