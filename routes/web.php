<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Landing Page
Route::get('/home', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/doctors', [HomeController::class, 'doctors']);
Route::get('/contact', [HomeController::class, 'contact']);

// Notification
Route::get('/notif', [NotificationController::class, 'notif']);

// Register
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register/submit', [RegisterController::class, 'store'])->name('register.submit');

// Login
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login/submit', [LoginController::class, 'authenticate'])->name('login.submit');
Route::get('/logout', [LoginController::class, 'logout']);

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth:admin');

// Dashboard -> User
Route::get('/user', [DashboardController::class, 'user'])->middleware('auth:admin');
Route::get('/userdetail/{id}', [DashboardController::class, 'userdetail'])->middleware('auth:admin');
Route::get('/deleteuser/{id}', [UserController::class, 'deleteuser'])->name('deleteuser')->middleware('auth:admin');
Route::get('/verify', [UserController::class, 'verify'])->middleware('auth:admin');
Route::get('/block', [UserController::class, 'block'])->middleware('auth:admin');

// User
Route::get('/dokter', [UserController::class, 'dokter']);
Route::get('/poli', [UserController::class, 'poli']);
