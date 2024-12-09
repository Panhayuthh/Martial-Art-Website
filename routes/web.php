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

Route::prefix('shop')->group(function () {
    Route::get('/', [ShopItemController::class, 'index'])->name('shop.index');
    Route::get('/{shopItem}', [ShopItemController::class, 'show'])->name('shop.show');
});
Route::get('/dashboard', function(){
    return view('admin.layout');
});
Route::prefix('admin')->group(function () { //To-do: require authentication
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/create', 'AdminController@create')->name('admin.create');
    Route::post('/create', 'AdminController@store')->name('admin.store');
    Route::get('/{shopItem}/edit', 'AdminController@edit')->name('admin.edit');
    Route::put('/{shopItem}/edit', 'AdminController@update')->name('admin.update');
    Route::delete('/{shopItem}', 'AdminController@destroy')->name('admin.destroy');