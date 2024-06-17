<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PemilikDashboardController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AnggotaDashboardController;
use App\Http\Controllers\AdminController; 

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'role:pemilik'])->group(function () {
    Route::resource('admins', AdminController::class);
});

Route::middleware(['auth'])->group(function () {
    Route::resource('products', ProductController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('reports', ReportController::class);
    Route::resource('users', UserController::class);

    Route::post('approve-member/{id}', [UserController::class, 'approveMember'])->name('approve-member');

    // Rute untuk dashboard anggota
    Route::get('/dashboard/anggota', [AnggotaDashboardController::class, 'index'])->name('dashboard.anggota');

    // Rute untuk dashboard pemilik
    Route::get('/dashboard/pemilik', [PemilikDashboardController::class, 'index'])->name('dashboard.pemilik');

    // Rute untuk dashboard admin
    Route::get('/dashboard/admin', [AdminDashboardController::class, 'index'])->name('dashboard.admin');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
