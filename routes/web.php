<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class,'index']);

Route::get('/create',[HomeController::class,'create']);

Route::post('/store',[HomeController::class,'stroe']);
