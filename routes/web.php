<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

//Route::get('/register', [AdminController::class, 'showRegisterForm'])->name('register');
//Route::post('/register', [AdminController::class, 'register']);
Route::get('login', [AdminController::class, 'showLoginForm'])->name('login');
Route::post('login', [AdminController::class, 'login'])->name('login.submit');
Route::post('logout', [AdminController::class, 'logout'])->name('logout');

