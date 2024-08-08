<?php

use App\Http\Controllers\productController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register',[UserController::class,'create']);

Route::post('/register',[UserController::class,'store']);

Route::get('/main',[productController::class,'main']);

Route::post('/addproduct',[productController::class,'store']);

Route::get('/editproduct/{product}',[productController::class,'editproduct']);

Route::put('/edit/{product}',[productController::class,'edit']);

Route::delete('/delete/{id}',[productController::class,'delete']);



