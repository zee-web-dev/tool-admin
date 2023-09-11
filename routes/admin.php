<?php

use App\Http\Controllers\Admin\AppSettingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\ProjectCategoryController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
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

    /* -------------------------------- Project Categories ------------------------------- */
    Route::controller(ProjectCategoryController::class)->prefix('project-category')->as('project-category.')->group(function () {
        Route::get('/',                          'index')->name('index');
        Route::post('store',                     'store')->name('store');
        Route::get('{projectCategory}/edit',     'edit')->name('edit');
        Route::patch('{projectCategory}/status', 'status')->name('status');
        Route::delete('{projectCategory}',                'destroy')->name('destroy');
    });

    /* -------------------------------- Projects ------------------------------- */
    Route::controller(ProjectController::class)->prefix('projects')->as('projects.')->group(function () {
        Route::get('/',                  'index')->name('index');
        Route::get('create',             'create')->name('create');
        Route::post('store',             'store')->name('store');
        Route::get('{project}/edit',     'edit')->name('edit');
        Route::patch('{project}/update', 'update')->name('update');
        Route::delete('{project}',       'destroy')->name('destroy');
    });

    /* -------------------------------- Education ------------------------------- */
    Route::controller(EducationController::class)->prefix('resume/education')->as('resume.education.')->group(function () {
        Route::get('/',         'index')->name('index');
        Route::get('create',    'create')->name('create');
        Route::post('store',    'store')->name('store');
        Route::get('{education}/edit', 'edit')->name('edit');
        Route::patch('{education}/update', 'update')->name('update');
        Route::delete('{education}',   'destroy')->name('destroy');
    });

    /* -------------------------------- Experiences ------------------------------- */
    Route::controller(ExperienceController::class)->prefix('resume/experiences')->as('resume.experiences.')->group(function () {
        Route::get('/',         'index')->name('index');
        Route::get('create',    'create')->name('create');
        Route::post('store',    'store')->name('store');
        Route::get('{experience}/edit', 'edit')->name('edit');
        Route::patch('{experience}/update', 'update')->name('update');
        Route::delete('{experience}',   'destroy')->name('destroy');
    });

    /* -------------------------------- Skills ------------------------------- */
    Route::controller(SkillController::class)->prefix('resume/skills')->as('resume.skills.')->group(function () {
        Route::get('/',         'index')->name('index');
        Route::post('store',    'store')->name('store');
        Route::get('{skill}/edit', 'edit')->name('edit');
        Route::patch('{projectCategory}/status', 'status')->name('status');
        Route::delete('{skill}',   'destroy')->name('destroy');
    });

    /* -------------------------------- Settings ------------------------------- */
    Route::controller(SettingController::class)->prefix('settings')->as('settings.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/store', 'store')->name('store');
        Route::get('seo', 'index')->name('seo');
        Route::get('contact', 'index')->name('contact');
        Route::get('general', 'index')->name('general');
        Route::get('about', 'index')->name('about');
        Route::get('analytics', 'index')->name('analytics');
        Route::get('calendly', 'index')->name('calendly');
    });

    /* -------------------------------- Sections ------------------------------- */
    Route::controller(SectionController::class)->prefix('sections')->as('sections.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/store', 'store')->name('store');
        Route::get('about', 'index')->name('about');
        Route::get('services', 'index')->name('services');
    });



    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('/admin')->group(__DIR__ . '/auth.php');
