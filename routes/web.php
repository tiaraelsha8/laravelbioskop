<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');

    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.post');
});

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    });

    Route::get('/admin/bioskop', function () {
        return view('admin.bioskop');
    })->name('admin.dashboard');

    Route::get('/admin/film', function () {
        return view('admin.daftarfilm');
    })->name('admin.film');

    Route::get('/admin/jadwal', function () {
        return view('admin.jadwaltayang');
    })->name('admin.jadwal');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Route::get('/admin/user', function () {
//         return view('admin.listuser');
//     })->name('admin.listuser');

Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users');