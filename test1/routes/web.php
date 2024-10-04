<?php


use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', function () {
//    return view('index');
//});

Route::get('/', [MainController::class, 'index']);
Route::get('/categories', [MainController::class, 'categories']);
Route::get('/{category}', [MainController::class, 'category']);

Route::get('/mobiles/{product?}', [MainController::class, 'product'] );

//Route::get('/categories', function () {
//    return view('categories');
//});
//
//Route::get('/mobiles/iphone_13_mini_256', function () {
//    return view('product');
//});

