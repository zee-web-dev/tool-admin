<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\WebSettingController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->prefix('admin')->group(function () {



    /* -------------------------------- Dashboard ------------------------------- */
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    /* -------------------------------- Web Settings ------------------------------- */
    Route::controller(WebSettingController::class)->prefix('web-settings')->as('web-settings.')->group(function () {
        Route::get('/', 'index')->name('index');
    });



    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('/admin')->group(__DIR__ . '/auth.php');
