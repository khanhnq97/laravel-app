<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Middleware\AuthenticateMiddleware;
use App\Http\Middleware\LoginMiddleware;
use Illuminate\Support\Facades\Route;

// BACKEND ROUTE
Route::get('dasboard', [DashboardController::class,'index'])->name('dashboard.index')->middleware(
    AuthenticateMiddleware::class
);

Route::get('admin', [AuthController::class,'index'])->name('auth.admin')->middleware(
    LoginMiddleware::class
);
Route::post('login', [AuthController::class,'login'])->name('auth.login');
Route::get('logout', [AuthController::class,'logout'])->name('auth.logout');
