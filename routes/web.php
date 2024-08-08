<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/detail/{id}', [DashboardController::class, 'viewDetailDashboard'])->name('view-detail-dashboard');
Route::get('/login', [AuthController::class, 'loginView'])->name('loginView');
Route::get('/register', [AuthController::class, 'registerView'])->name('registerView');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::prefix('profile')
        ->namespace('profile')
        ->group(function () {
            Route::get('edit', [ProfileController::class, 'viewEdit'])->name('view-edit-profile');
            Route::patch('edit', [ProfileController::class, 'update'])->name('update-profile');
        });

    Route::get('/activity', [ActivityController::class, 'index'])->name('activity');
    Route::prefix('activity')
        ->namespace('activity')
        ->group(function () {
            Route::get('detail/{id}', [ActivityController::class, 'viewDetailActivity'])->name('view-detail-activity');
            Route::get('create', [ActivityController::class, 'createNewPostView'])->name('view-create-post-activity');
            Route::post('create', [ActivityController::class, 'createNewPost'])->name('create-post-activity');
            Route::delete('delete/{id}', [ActivityController::class, 'destroyPost'])->name('destroy-post-activity');
            Route::get('edit/{id}', [ActivityController::class, 'editPostView'])->name('view-edit-post-activity');
            Route::put('edit/{id}', [ActivityController::class, 'editPost'])->name('edit-post-activity');
        });

    Route::get('check-login', [DashboardController::class, 'checkLogin'])->name('check-login');
});






require __DIR__.'/auth.php';
