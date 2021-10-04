<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AccountController;

Route::get('/', [AccountController::class,'index']);
Route::get('/list', [AccountController::class,'list']);
Route::get('/create', [AccountController::class,'create']);
Route::post('/', [AccountController::class,'store']);
Route::get('/articles/{article}', [ArticlesController::class,'show']);
Route::get('list/{account}/edit', [AccountController::class,'edit']);
Route::put('/articles/{article}', [ArticlesController::class,'update']);
Route::delete('/list/{account}', [AccountController::class,'destroy']);
