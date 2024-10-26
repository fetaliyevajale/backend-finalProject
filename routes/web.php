<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\AuthController; // Giriş üçün controller əlavə edin

Route::get('admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login.form');
Route::post('admin/login', [AuthController::class, 'login'])->name('admin.login');
