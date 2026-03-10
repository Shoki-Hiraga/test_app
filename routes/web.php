<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\ReviewController;

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/results', [ResultController::class, 'index'])->name('results');
Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews');