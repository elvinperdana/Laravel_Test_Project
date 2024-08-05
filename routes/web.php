<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/detail', [DetailController::class, 'index'])->name('detail');

Route::prefix('home')
    ->namespace('Home')
    ->group(function () {
        Route::get('activity', [HomeController::class, 'activityView'])->name('activityView');
    });


