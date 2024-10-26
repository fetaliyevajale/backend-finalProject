<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController; // Giriş üçün controller əlavə edin

Route::get('/', function () {
    return view('welcome');
});

// login formu
Route::get('admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login.form');

// Admin login 
Route::post('admin/login', [AuthController::class, 'login'])->name('admin.login');

Route::post('admin/logout', [AuthController::class, 'logout'])->name('admin.logout');
