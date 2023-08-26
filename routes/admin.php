<?php

use App\Http\Controllers\Admin\AppSettingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\WebSettingController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->prefix('admin')->group(function () {



    /* -------------------------------- Dashboard ------------------------------- */
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    /* -------------------------------- Services ------------------------------- */
    Route::controller(ServiceController::class)->prefix('services')->as('services.')->group(function () {
        Route::get('/',                  'index')->name('index');
        Route::get('create',             'create')->name('create');
        Route::post('store',             'store')->name('store');
        Route::get('{service}/edit',     'edit')->name('edit');
        Route::patch('{service}/update', 'update')->name('update');
        Route::delete('{service}',       'destroy')->name('destroy');
    });

    /* -------------------------------- Education ------------------------------- */
    Route::controller(EducationController::class)->prefix('resume/education')->as('education.')->group(function () {
        Route::get('/',         'index')->name('index');
        Route::get('create',    'create')->name('create');
        Route::post('store',    'store')->name('store');
        Route::get('{education}/edit', 'edit')->name('edit');
        Route::delete('{education}',   'destroy')->name('destroy');
    });

    /* -------------------------------- Experiences ------------------------------- */
    Route::controller(ExperienceController::class)->prefix('resume/experiences')->as('experiences.')->group(function () {
        Route::get('/',         'index')->name('index');
        Route::get('create',    'create')->name('create');
        Route::post('store',    'store')->name('store');
        Route::get('{experience}/edit', 'edit')->name('edit');
        Route::delete('{experience}',   'destroy')->name('destroy');
    });

    /* -------------------------------- Skills ------------------------------- */
    Route::controller(SkillController::class)->prefix('resume/skills')->as('skills.')->group(function () {
        Route::get('/',         'index')->name('index');
        Route::get('create',    'create')->name('create');
        Route::post('store',    'store')->name('store');
        Route::get('{skill}/edit', 'edit')->name('edit');
        Route::delete('{skill}',   'destroy')->name('destroy');
    });

    /* -------------------------------- Projects ------------------------------- */
    Route::controller(ProjectController::class)->prefix('projects')->as('projects.')->group(function () {
        Route::get('/',         'index')->name('index');
        Route::get('create',    'create')->name('create');
        Route::post('store',    'store')->name('store');
        Route::get('{project}/edit', 'edit')->name('edit');
        Route::delete('{project}',   'destroy')->name('destroy');
    });


    /* -------------------------------- Web Settings ------------------------------- */
    Route::controller(WebSettingController::class)->prefix('web-settings')->as('web-settings.')->group(function () {
        Route::get('/', 'index')->name('index');
    });

    /* -------------------------------- Web Settings ------------------------------- */
    Route::controller(AppSettingController::class)->prefix('app-settings')->as('app-settings.')->group(function () {
        Route::get('/', 'index')->name('index');
    });



    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('/admin')->group(__DIR__ . '/auth.php');
