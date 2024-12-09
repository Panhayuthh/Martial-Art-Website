<?php
use App\Http\Controllers\EventController;
use App\Http\Controllers\MemberController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

//Route::get('/register', [AdminController::class, 'showRegisterForm'])->name('register');
//Route::post('/register', [AdminController::class, 'register']);
Route::get('login', [AdminController::class, 'showLoginForm'])->name('login');
Route::post('login', [AdminController::class, 'login'])->name('login.submit');
Route::post('logout', [AdminController::class, 'logout'])->name('logout');

// User Routes
Route::get('/', function () {
    return view('user.userDashboard');
});

// Event Routes
Route::get('/registration', function () {
    return view('user.registration');
});
Route::get('/member', function () {
    return view('user.member');
});

//admin Routes 
Route::get('/adminDashboard', [EventController::class, 'index'])->name('event.index');
Route::get('/adminDashboard/addEvent', [EventController::class, 'create'])->name('event.create');
Route::post('/adminDashboard', [EventController::class, 'store'])->name('event.store');
Route::get('/adminDashboard/{event}/edit', [EventController::class, 'edit'])->name('event.edit');
Route::put('/adminDashboard/{event}/update', [EventController::class, 'update'])->name('event.update');
Route::delete('/adminDashboard/{event}/delete', [EventController::class, 'delete'])->name('event.delete');

//member management
Route::get('/memberManagement', [MemberController::class, 'index'])->name('member.index');
Route::get('/memberManagement/create', [MemberController::class, 'create'])->name('member.create');
Route::post('/memberManagement', [MemberController::class, 'store'])->name('member.store');
Route::get('/memberManagement/{member}/edit', [MemberController::class, 'edit'])->name('member.edit');
Route::put('/memberManagement/{member}/update', [MemberController::class, 'update'])->name('member.update');
Route::delete('/memberManagement/{member}/delete', [MemberController::class, 'delete'])->name('member.delete');
Route::get('/memberManagement/search', [MemberController::class, 'memberManagement'])->name('member.management');

return view('user.member');


