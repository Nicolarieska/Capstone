<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeUserController;
use App\Http\Controllers\PoliController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AdminController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Dashboard -> User (Pasien)
Route::get('/user', [DashboardController::class, 'user'])->middleware('auth:admin');
Route::put('/medicalrecords/{id}', [UserController::class, 'medicalrecords'])->middleware('auth:admin');
Route::get('/userdetail/{id}', [DashboardController::class, 'userdetail'])->middleware('auth:admin');
Route::get('/deleteuser/{id}', [UserController::class, 'deleteuser'])->name('deleteuser')->middleware('auth:admin');
Route::post('/whatsapp/{id}', [NotificationController::class, 'store']);
Route::get('/verify', [UserController::class, 'verify'])->middleware('auth:admin');
Route::get('/block', [UserController::class, 'block'])->middleware('auth:admin');

// Dashboard -> Poli
Route::get('/polishow', [PoliController::class, 'poli'])->middleware('auth:admin');
Route::post('/polipost', [PoliController::class, 'store'])->name('polipost')->middleware('auth:admin');
Route::put('/poliupdate/{id}', [PoliController::class, 'update'])->middleware('auth:admin');
Route::get('/polidelete/{id}', [PoliController::class, 'delete'])->middleware('auth:admin');

// Landing Page User
Route::get('/homeuser', [HomeUserController::class, 'index'])->name('homeuser')->middleware('auth:web');
Route::get('/aboutuser', [HomeUserController::class, 'about'])->middleware('auth:web');
Route::get('/contactuser', [HomeUserController::class, 'contact'])->middleware('auth:web');
Route::get('/registerpoli', [HomeUserController::class, 'registerpoli'])->middleware('auth:web');
Route::get('/registerdoctors/{id}', [HomeUserController::class, 'registerdoctors'])->middleware('auth:web');
Route::get('/jadwal/{id}', [HomeUserController::class, 'jadwal'])->middleware('auth:web');
Route::get('/riwayat', [HomeUserController::class, 'riwayat'])->middleware('auth:web');

// Dashboard -> Dokter
Route::get('/doctorshow', [DoctorController::class, 'doctor'])->middleware('auth:admin');
Route::post('/doctorpost', [DoctorController::class, 'store'])->name('doctorpost')->middleware('auth:admin');
Route::put('/doctorupdate/{id}', [DoctorController::class, 'update'])->middleware('auth:admin');
Route::get('/doctordelete/{id}', [DoctorController::class, 'delete'])->middleware('auth:admin');

// Dashboard -> Admin
Route::get('/adminshow', [DashboardController::class, 'admin'])->middleware('auth:admin');
Route::post('/adminpost', [AdminController::class, 'store'])->name('adminpost')->middleware('auth:admin');
Route::put('/adminupdate/{id}', [AdminController::class, 'update'])->middleware('auth:admin');
Route::get('/admindelete/{id}', [AdminController::class, 'delete'])->middleware('auth:admin');

// Dashboard -> Admin
Route::get('/scheduleshow', [DashboardController::class, 'admin'])->middleware('auth:admin');
Route::post('/schedulepost', [AdminController::class, 'store'])->name('adminpost')->middleware('auth:admin');
Route::put('/scheduleupdate/{id}', [AdminController::class, 'update'])->middleware('auth:admin');
Route::get('/scheduledelete/{id}', [AdminController::class, 'delete'])->middleware('auth:admin');
