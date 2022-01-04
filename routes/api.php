<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;

/*
 * ----------------
 * Public Api's
 * ----------------
 */


/** Slider Controller **/

Route::get('/sliders', [SliderController::class, 'index']);
Route::get('/sliders/{slug}', [SliderController::class, 'show']);

/** Products Controller */

Route::get('/products', [ProductController::class, 'index']);
Route::get('/product/{slug}', [ProductController::class, 'show']);

/** Category Controller */

Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/{slug}', [CategoryController::class, 'show']);

/** Auth Controller */

Route::post('/login', [AuthController::class, 'login']);

/*
 * ----------------
 * Private Api's
 * ----------------
 */

Route::group(["middleware" => "auth:sanctum"], function () {
    /** AUTH SLIDER API */
    Route::post('/sliders', [SliderController::class, 'store']);
    Route::delete('/sliders/{id}', [SliderController::class, 'delete']);
    Route::patch('/sliders/{id}', [SliderController::class, 'update']);

    /** Auth Product Controller */
    Route::post('/products', [ProductController::class, 'store']);
    Route::delete('/product/{id}', [ProductController::class, 'destroy']);
    Route::patch('/product/{id}', [ProductController::class, 'update']);

    /** Auth Category Controller */

    Route::post('/category', [CategoryController::class, 'store']);
    Route::delete('/category/{id}', [CategoryController::class, 'destroy']);
    Route::patch('/category/{id}', [CategoryController::class, 'update']);

    Route::post('/logout', [AuthController::class, 'logout']);

});
