<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentAuthController;


Route::get('/register', [StudentAuthController::class, 'showRegisterForm'])->name('register.form');


Route::post('/register', [StudentAuthController::class, 'register'])->name('register.student');


Route::get('/login', [StudentAuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [StudentAuthController::class, 'login'])->name('login.process');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');
