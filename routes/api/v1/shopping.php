<?php

use App\Http\Controllers\ShoppingController;
use Illuminate\Support\Facades\Route;

Route::post('/', [ShoppingController::class, 'store']);
Route::get('/', [ShoppingController::class, 'index']);
Route::get('/{id}', [ShoppingController::class, 'show']);
Route::get('/{id}/client', [ShoppingController::class, 'client']);
