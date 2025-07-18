<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;

Route::get('/menu', [MenuController::class, 'getMenus']);

Route::get('/order', [OrderController::class, 'getOrders'])
    ->middleware('auth:sanctum');

Route::get('/order/{id}', [OrderController::class, 'getAnOrder'])
    ->middleware('auth:sanctum');
    
Route::post('/order', [OrderController::class, 'createOrder'])
    ->middleware('auth:sanctum');

Route::put('/order/{id}', [OrderController::class, 'updateOrder'])
    ->middleware('auth:sanctum');

Route::delete('/order/{id}', [OrderController::class, 'deleteOrder'])
    ->middleware('auth:sanctum');