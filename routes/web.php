<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Middleware\AuthenticateMiddleware;
use App\Http\Middleware\LoginMiddleware;
use Illuminate\Support\Facades\Route;

/* BACKEND ROUTE */

/* DASHBOARD ROUTE */

Route::get("dasboard", [DashboardController::class, "index"])
    ->name("dashboard.index")
    ->middleware(AuthenticateMiddleware::class);

/* USER ROUTE */
Route::get("user", [UserController::class, "index"])
    ->name("user.index")
    ->middleware(AuthenticateMiddleware::class);

/* AUTH ROUTE */
Route::get("admin", [AuthController::class, "index"])
    ->name("auth.admin")
    ->middleware(LoginMiddleware::class);
Route::post("login", [AuthController::class, "login"])->name("auth.login");
Route::get("logout", [AuthController::class, "logout"])->name("auth.logout");
