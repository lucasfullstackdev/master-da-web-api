<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// dd(__DIR__ . '/api/v1/auth.php');

Route::prefix('/auth')->group(realpath(__DIR__ . '/api/auth.php'));


// Route::prefix('/v1')->middleware('auth:api')->group(function () {
Route::prefix('/v1')->group(function () {
    Route::prefix('/products')->group(realpath(__DIR__ . '/api/v1/products.php'));
    Route::prefix('/shopping')->group(realpath(__DIR__ . '/api/v1/shopping.php'));
    Route::prefix('/clients')->group(realpath(__DIR__ . '/api/v1/clients.php'));
});
