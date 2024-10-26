<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\OurTeamController;

// API yönləndirmələr
Route::middleware('api')->group(function () {
    Route::apiResource('products', ProductController::class);
    Route::apiResource('blogs', BlogController::class);
    Route::apiResource('our-team', OurTeamController::class);
});
