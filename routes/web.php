<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

//Route::get('/register', [AdminController::class, 'showRegisterForm'])->name('register');
//Route::post('/register', [AdminController::class, 'register']);
Route::get('login', [AdminController::class, 'showLoginForm'])->name('login');
Route::post('login', [AdminController::class, 'login'])->name('login.submit');
Route::post('logout', [AdminController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('user.userDashboard');
});
Route::get('/welcome', function () {
    return view('user.welcome');
});
Route::get('/event', function () {
    return view('event');
});Route::get('/registration', function () {
    return view('registration');
});
Route::get('/member', function () {
    return view('member');
});

