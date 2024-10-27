<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController; 
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

// login formu
Route::get('admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login.form');

// Admin login
Route::post('admin/login', [AuthController::class, 'login'])->name('admin.login');

// Admin logout
Route::post('admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

// Admin dashboard 
Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
