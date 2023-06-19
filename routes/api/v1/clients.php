<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::post('/', [ClientController::class, 'store']);
Route::get('/', [ClientController::class, 'index']);
Route::get('/{id}', [ClientController::class, 'show']);
Route::put('/{id}', [ClientController::class, 'update']);
Route::delete('/{id}', [ClientController::class, 'destroy']);
Route::get('/{id}/shopping', [ClientController::class, 'shopping']);
