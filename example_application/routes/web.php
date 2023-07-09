<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;

Route::resource('users',UserController::class);

Route::post('/login',[AuthController::class,'login'])->name('users.login');
Route::get('/logout',[AuthController::class,'logout'])->name('users.logout');
Route::get('/register',[AuthController::class,'create'])->name('users.create');

Route::view('/','index')->name('index');
Route::view('/login','forms.login')->name('forms.login');
Route::view('/register','forms.register')->name('forms.register');

Route::get('/admin/dashboard',[DashboardController::class,'index'])->name('admin.dashboard')->middleware('auth');





