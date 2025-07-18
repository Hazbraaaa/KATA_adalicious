<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;

Route::get('/menu', [MenuController::class, 'getMenus']);

Route::get('/order', [OrderController::class, 'getOrders']);

Route::get('/order/{id}', [OrderController::class, 'getAnOrder']);
    
Route::post('/order', [OrderController::class, 'createOrder']);

Route::put('/order/{id}', [OrderController::class, 'updateOrder']);

Route::delete('/order/{id}', [OrderController::class, 'deleteOrder']);