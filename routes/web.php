<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\TopPerformanceController;
use App\Http\Controllers\AnggotaDashboardController;
use App\Http\Controllers\PemilikDashboardController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'role:pemilik'])->group(function () {
    Route::resource('admins', AdminController::class);
    Route::get('/orders/report', [OrderController::class, 'report'])->name('orders.report');
    Route::get('/orders/today', [OrderController::class, 'index'])->name('orders.today');
    Route::get('/kelolapenjualan', [OrderController::class, 'index'])->name('kelolapenjualan');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('products', ProductController::class);
    Route::resource('orders', OrderController::class)->only(['index', 'create', 'store']);
    Route::resource('reports', ReportController::class);
    Route::resource('users', UserController::class);
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');




    Route::post('approve-member/{id}', [UserController::class, 'approveMember'])->name('approve-member');

    // Rute untuk dashboard anggota
    Route::get('/dashboard/anggota', [AnggotaDashboardController::class, 'index'])->name('dashboard.anggota');

    // Rute untuk dashboard pemilik
    Route::get('/dashboard/pemilik', [PemilikDashboardController::class, 'index'])->name('dashboard.pemilik');

    // Rute untuk dashboard admin
    Route::get('/dashboard/admin', [AdminDashboardController::class, 'index'])->name('dashboard.admin');

    Route::get('topperformance', [TopPerformanceController::class, 'index'])->name('topperformance');
    Route::get('/reports', [ReportController::class, 'index'])->middleware('auth');
    Route::get('/reports/{type}', [ReportController::class, 'show'])->middleware('auth');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
