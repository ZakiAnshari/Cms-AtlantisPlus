<?php

use App\Models\Teacher;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\Admin\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

Route::get('/',[HomeController::class, 'index']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware(['auth', 'verified']);
Route::get('/guru', [DashboardController::class, 'frontend']);
Route::get('/pencapaian', [DashboardController::class, 'pencapaian']);
Route::get('/foto', [DashboardController::class, 'foto']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/about', [AboutController::class, 'index']);

    Route::get('/prestasi', [PrestasiController::class, 'index']);
    Route::get('/prestasi-add', [PrestasiController::class, 'add']);
    Route::post('/prestasi-add', [PrestasiController::class, 'store']);
    Route::get('/prestasi-edit/{slug}', [PrestasiController::class, 'edit']);
    Route::put('/prestasi-edit/{slug}', [PrestasiController::class, 'update']);
    Route::get('/prestasi-delete/{slug}', [PrestasiController::class, 'delete']);
    Route::get('/prestasi-destroy/{slug}', [PrestasiController::class, 'destroy']);

    Route::get('/teacher', [TeacherController::class, 'index']);
    Route::get('/teacher-add', [TeacherController::class, 'add']);
    Route::post('/teacher-add', [TeacherController::class, 'store']);
    Route::get('/teacher-edit/{slug}', [TeacherController::class, 'edit']);
    Route::post('/teacher-edit/{slug}', [TeacherController::class, 'update']);
    Route::get('/teacher-delete/{slug}', [TeacherController::class, 'delete']);
    Route::get('/teacher-destroy/{slug}', [TeacherController::class, 'destroy']);

    Route::get('/gallery', [GalleryController::class, 'index']);
    
});

require __DIR__.'/auth.php';
