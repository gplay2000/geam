<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;

Route::get('/admin', [HomeController::class, 'index'])->name('admin');

Route::resource('users', App\Http\Controllers\Admin\UserController::class)->names('admin.users');