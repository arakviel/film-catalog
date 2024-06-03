<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\RegisterController;
use App\Mail\OrderShipped;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    //$toEmail = auth()->user()->email;

    Mail::to("sashakotova598@gmail.com")->send(new OrderShipped("Електровелосипед 9000"));

    return 'Email has been sent to ' . "sashakotova598@gmail.com";
})->middleware('auth', 'verified');

Route::get('/email-verify', function () {
})->middleware('auth');

Route::resource('genres', GenreController::class);

Route::get('/login', [AuthController::class, 'create'])->name('login.create');
Route::post('/login', [AuthController::class, 'store'])->name('login');
Route::get('/logout', [AuthController::class, 'logoutShow'])->name('auth.logout.show');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');


Route::get('/register', [RegisterController::class, 'create'])->name('register.create');
Route::post('/register', [RegisterController::class, 'store'])->name('register');


Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function () {
    auth()->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
