<?php
use App\Http\Controllers\EventController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UserController;


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

Route::get('/event' , [EventController::class, 'index'])->name('event.index');

Route::get('/member' , [MemberController::class, 'index'])->name('member.index');


Route::group(['prefix' => 'registration'], function () {
    Route::get('/', [MemberController::class, 'create'])->name('registration.index');
    Route::post('/', [MemberController::class, 'store'])->name('register.store');
});

// Event Routes
Route::get('/userdashboard', [EventController::class, 'userDashboard'])->name('member.dashboard');  // User's event view

// Member Registration Routes
Route::get('/userdashboard/registerMember', [MemberController::class, 'userregisterMember'])->name('member.registerMember');  // Show registration form
Route::post('/userdashboard/registerMember', [MemberController::class, 'store'])->name('user.store');  // Submit registration

Route::group(['prefix' => 'admin'], function () {
    Route::get('/member', [AdminController::class, 'memberCreate'])->name('admin.create.member');
});


//admin manage event Routes 
// Route::get('/adminDashboard', [EventController::class, 'index'])->name('event.index');
Route::get('/adminDashboard', [EventController::class, 'adminDashboard'])->name('admin.dashboard');
Route::get('/adminDashboard/addEvent', [EventController::class, 'create'])->name('event.create');
Route::post('/adminDashboard', [EventController::class, 'store'])->name('event.store');
Route::get('/adminDashboard/{event}/edit', [EventController::class, 'edit'])->name('event.edit');
Route::put('/adminDashboard/{event}/update', [EventController::class, 'update'])->name('event.update');
Route::delete('/adminDashboard/{event}/delete', [EventController::class, 'delete'])->name('event.delete');

//admin manage member 
Route::get('/memberManagement', [AdminController::class, 'member'])->name('admin.member');
Route::get('/memberManagement/addMember', [MemberController::class, 'create'])->name('member.create');
Route::post('/memberManagement', [MemberController::class, 'store'])->name('member.store'); 
Route::get('/memberManagement/{member}/edit', [MemberController::class, 'edit'])->name('member.edit');
Route::put('/memberManagement/{member}/update', [MemberController::class, 'update'])->name('member.update');
Route::delete('/memberManagement/{member}/delete', [MemberController::class, 'delete'])->name('member.delete');
Route::get('/memberManagement/search', [MemberController::class, 'memberManagement'])->name('member.management');





