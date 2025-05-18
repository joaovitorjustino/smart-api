<?php

use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\BrandController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('clients', ClientController::class)->except([
    'create', 'show', 'edit'
]);

Route::apiResource('brands', BrandController::class)->except([
    'create', 'show', 'edit'
]);

Route::apiResource('products', ProductController::class)->except([
    'create', 'show', 'edit'
]);