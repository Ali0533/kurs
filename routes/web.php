<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'main'])->name('main');

Route::get('/main', [UserController::class, 'main'])->name('main');

Route::get('/payAndShip', [UserController::class, 'payAndShip'])->name('payAndShip');

Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'registerPost']);

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'loginPost']);

Route::middleware('auth')->group(function() {
    Route::middleware('role:user,admin')->group(function() {
        Route::middleware('role:admin')->group(function() {
            Route::prefix('/admin')->group(function () {
                Route::resource('/product', ProductController::class);
            });
        });
    });
    Route::get('/adminAccount', [UserController::class, 'adminAccount'])->name('adminAccount');
    Route::post('/adminAccount', [UserController::class, 'adminAccountPost']);
    Route::get('/create', [ProductController::class, 'create'])->name('create');
    Route::post('/create', [ProductController::class, 'createPost']);
    Route::get('/account', [UserController::class, 'account'])->name('account');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});
