<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class,'index']);
Route::get('/gmail',[HomeController::class,'gmail']);
Route::get('/test',[HomeController::class,'test']);
Route::get('/greeting/{num1}/{num2}',[HomeController::class,'greeting']);
