<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FallbackController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::prefix( '/' )->group( function () {
    Route::get('/', [PageController::class, 'index'])->name('index');
    Route::get('/projects', [PageController::class, 'projects'])->name('projects');
});

Route::fallback( FallbackController::class );
