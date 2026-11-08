<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/create-item', [\App\Http\Controllers\ItemController::class, 'create']);
Route::patch('/update-item', [\App\Http\Controllers\ItemController::class, 'update']);
Route::delete('/delete-item', [\App\Http\Controllers\ItemController::class, 'destroy']);
Route::get('/items', [\App\Http\Controllers\ItemController::class, 'all']);

Route::post('/create-categories', [\App\Http\Controllers\CategoriesController::class, 'create']);
Route::patch('/update-categories', [\App\Http\Controllers\CategoriesController::class, 'update']);
Route::delete('/delete-categories', [\App\Http\Controllers\CategoriesController::class, 'destroy']);
Route::get('/categories', [\App\Http\Controllers\CategoriesController::class, 'all']);

Route::post('/create-customers', [\App\Http\Controllers\CustomerController::class, 'create']);
Route::patch('/update-customers', [\App\Http\Controllers\CustomerController::class, 'update']);
Route::delete('/delete-customers', [\App\Http\Controllers\CustomerController::class, 'destroy']);
Route::get('/customers', [\App\Http\Controllers\CustomerController::class, 'all']);

Route::post('/create-employees', [\App\Http\Controllers\EmployeeController::class, 'create']);
Route::patch('/update-employees', [\App\Http\Controllers\EmployeeController::class, 'update']);
Route::delete('/delete-employees', [\App\Http\Controllers\EmployeeController::class, 'destroy']);
Route::get('/employees', [\App\Http\Controllers\EmployeeController::class, 'all']);