<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ShopItemController;
use Illuminate\Support\Facades\Route;

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
});
