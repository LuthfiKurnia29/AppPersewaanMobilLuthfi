<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PeminjamanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AuthController::class, 'index']);

// Authentication
Route::post('/login',[AuthController::class, 'authenticate']);
Route::post('/logout',[AuthController::class, 'logout'])->middleware(['admin']);
Route::post('/logout-user',[AuthController::class, 'user'])->middleware(['user']);

// Admin
Route::get('/dashboard', [AdminController::class, 'index']);

// User
Route::get('/user', [DashboardController::class, 'index']);

// Mobil
Route::get('/mobil', [MobilController::class, 'index'])->middleware(['admin']);
Route::post('/add-mobil', [MobilController::class, 'store']);

// Pemesanan
Route::get('/peminjaman', [PeminjamanController::class, 'index'])->middleware(['user']);
Route::get('/create-peminjaman', [PeminjamanController::class, 'create'])->middleware(['user']);
Route::post('/create-peminjaman', [PeminjamanController::class, 'store'])->middleware(['user']);

// Pengembalian