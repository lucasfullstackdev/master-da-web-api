<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::post('/', [ProductController::class, 'store']);
Route::get('/', [ProductController::class, 'index']);
Route::get('/{id}', [ProductController::class, 'show']);
Route::put('/{id}', [ProductController::class, 'update']);
Route::delete('/{id}', [ProductController::class, 'destroy']);
