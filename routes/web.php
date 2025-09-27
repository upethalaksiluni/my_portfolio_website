<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Home Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');

// Project Routes
Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::get('/projects/{project:id}', [ProjectController::class, 'show'])->name('projects.show');

// Skills Routes
Route::get('/skills', [SkillController::class, 'index'])->name('skills');

// Contact Routes
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Redirect old URLs
Route::redirect('/home', '/');
Route::redirect('/portfolio', '/projects');
