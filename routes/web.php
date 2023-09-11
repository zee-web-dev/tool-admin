<?php

use App\Http\Controllers\Website\MainController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [MainController::class, 'index']);
Route::post('/contact', [MainController::class, 'contact'])->name('home.contact');

// Route::get('/dashboard', function () {
//     return view('admin.content.dashboard.index');
// })->name('dashboard');


// Route::middleware('auth')->prefix('admin')->group(function () {
// // dashboard
//     Route::get('/dashboard', function () {
//         return view('admin.content.dashboard.index');
//     })->name('dashboard');

// //    settings
//     Route::resource('settings',\App\Http\Controllers\SettingsController::class);


// });

// require __DIR__.'/auth.php';
