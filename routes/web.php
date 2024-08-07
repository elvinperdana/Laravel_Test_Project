<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/detail', [DetailController::class, 'index'])->name('detail');
Route::get('/auth', [AuthController::class, 'loginView'])->name('loginView');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::prefix('profile')
    ->namespace('profile')
    ->group(function () {
        Route::get('edit', [ProfileController::class, 'viewEdit'])->name('view-edit-profile');
    });

Route::get('/activity', [ActivityController::class, 'index'])->name('activity');
Route::prefix('activity')
    ->namespace('activity')
    ->group(function () {
        Route::get('create-post', [ActivityController::class, 'createNewPostView'])->name('view-create-post-activity');
    });
