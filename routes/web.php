<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\control\SignController;

/*
===============================
sign in dengan tidak group:
Route::get('signin',[SignController::class, 'index']);
Route::post('signin'[SignController::class, 'authProcess']);  
===============================
*/
Route::prefix('signin')->group(function(){
    Route::get('/',[SignController::class, 'index']);
    Route::post('/',[SignController::class, 'authProcess']);
});