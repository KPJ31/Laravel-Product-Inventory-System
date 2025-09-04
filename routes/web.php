<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/products', ProductController::class);
Route::resource('/details', DetailController::class);
Route::resource('/reviews', ReviewController::class);
