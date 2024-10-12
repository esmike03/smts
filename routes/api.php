<?php

use App\Http\Controllers\Api\TeacherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::name('api.')->group(function () {
    Route::middleware('auth:sanctum')->group(function () {
        Route::apiResource('teachers', TeacherController::class);
    });
});
