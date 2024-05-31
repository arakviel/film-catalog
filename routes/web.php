<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('welcome');
})->middleware('auth');

Route::resource('genres', GenreController::class);

Route::get('/login', [AuthController::class, 'create'])->name('login.create');
Route::post('/login', [AuthController::class, 'store'])->name('login');
Route::get('/logout', [AuthController::class, 'logoutShow'])->name('auth.logout.show');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');


Route::get('/register', [RegisterController::class, 'create'])->name('register.create');
Route::post('/register', [RegisterController::class, 'store'])->name('register');
