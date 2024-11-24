<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ReportController;


Route::get('/users', [UserController::class, 'index']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/items', [ItemController::class, 'index']);
Route::get('/reports', [ReportController::class, 'index']);
