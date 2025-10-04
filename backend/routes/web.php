<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ExamSessionController;

// Trang chủ
Route::get('/', function () {
    return view('welcome');
});

// ========== USERS ==========
Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('users.index');
    Route::get('/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/store', [UserController::class, 'store'])->name('users.store');
    Route::get('/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::post('/{id}/update', [UserController::class, 'update'])->name('users.update');
    Route::delete('/{id}', [UserController::class, 'destroy'])->name('users.destroy');
});

// ========== ROLES ==========
Route::resource('roles', RoleController::class);
Route::resource('permissions', PermissionController::class);

// ========== COURSES ==========
Route::resource('courses', CourseController::class);

// ========== EXAM SESSIONS ==========
Route::resource('exam-sessions', ExamSessionController::class);

