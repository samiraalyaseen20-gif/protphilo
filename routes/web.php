<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminProjectController;
use App\Models\Project;

Route::get('/', function () {
    $projects = Project::orderBy('id', 'desc')->get();
    return view('landing', compact('projects'));
});

// Admin guest routes
Route::middleware('guest')->group(function () {
    Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
    Route::post('/admin/login', [AdminAuthController::class, 'login']);
});

// Admin authenticated routes
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [AdminProjectController::class, 'index'])->name('admin.dashboard');
    Route::post('/projects', [AdminProjectController::class, 'store'])->name('admin.projects.store');
    Route::post('/projects/{project}/update', [AdminProjectController::class, 'update'])->name('admin.projects.update'); // Using POST for file uploads under multipart/form-data
    Route::delete('/projects/{project}', [AdminProjectController::class, 'destroy'])->name('admin.projects.destroy');
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
});
