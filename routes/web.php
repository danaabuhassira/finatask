<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

// Route::get('/',[TaskController::class, 'index']);
// Route::post('/store',[TaskController::class,'store']);
// Route::post('delete/{id}',[TaskController::class,'delete']);
// // Route::put('edit/{id}',[TaskController::class,'edit']);
// // Route::patch('update/{id}',[TaskController::class,'update']);
// Route::post('/edit/{id}',[TaskController::class,'edit']);

Route::get('/', [TaskController::class,'index']);
Route::post('/store', [TaskController::class,'store']);
Route::post('delete/{id}', [TaskController::class,'delete']);
Route::post('update/{id}', [TaskController::class,'update']);
