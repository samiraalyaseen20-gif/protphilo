<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminProjectController;
use App\Http\Controllers\ProjectController;
use App\Models\Project;

// ============================================================
// Public Routes
// ============================================================

Route::get('/', function () {
    $projects = Project::orderBy('id', 'desc')->get();
    return view('landing', compact('projects'));
});

// Project Details Page
Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');

// ============================================================
// Admin: Guest routes (login page)
// ============================================================
Route::middleware('guest')->group(function () {
    Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
    Route::post('/admin/login', [AdminAuthController::class, 'login']);
});

// ============================================================
// Admin: Authenticated routes
// ============================================================
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [AdminProjectController::class, 'index'])->name('admin.dashboard');

    // Projects CRUD
    Route::post('/projects', [AdminProjectController::class, 'store'])->name('admin.projects.store');
    Route::get('/projects/{project}/edit', [AdminProjectController::class, 'edit'])->name('admin.projects.edit');
    Route::post('/projects/{project}/update', [AdminProjectController::class, 'update'])->name('admin.projects.update');
    Route::delete('/projects/{project}', [AdminProjectController::class, 'destroy'])->name('admin.projects.destroy');

    // Project Images
    Route::post('/projects/{project}/images', [AdminProjectController::class, 'storeImage'])->name('admin.projects.images.store');
    Route::delete('/project-images/{projectImage}', [AdminProjectController::class, 'destroyImage'])->name('admin.projects.images.destroy');

    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
});
