<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::middleware('throttle:60,1')->group(function () {
    // Projects API
    Route::get('/projects', [ProjectController::class, 'apiIndex']);
    
    // Skills API
    Route::get('/skills', [SkillController::class, 'apiIndex']);
    
    // Contact API
    Route::post('/contact', [ContactController::class, 'apiStore']);
});

// User info for authenticated requests
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
