<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\SearchController;

Route::get('/laravel', function () {
    return ['Laravel' => app()->version()];
});

Route::get('/', function () {
    return view('homepagetrial');
});

require __DIR__.'/auth.php';

Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('signup');
Route::post('/signup', [AuthController::class, 'processSignup'])->name('signup.submit');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'processLogin'])->name('login.submit');
Route::get('/get-user-position', [AuthController::class, 'getUserPosition']);
Route::get('forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('forgot-password');
Route::post('forgot-password', [AuthController::class, 'processForgotPassword'])->name('forgot-password.submit');
Route::get('reset-password/{email}', [AuthController::class, 'showResetPasswordForm'])->name('reset-password');
Route::post('reset-password', [AuthController::class, 'processResetPassword'])->name('reset-password.submit');

Route::get('/homepage', [HomeController::class, 'index'])->name('homepage')->middleware('auth');
Route::post('/change-status/{id}', [UserController::class, 'changeStatus'])->name('change-status');
Route::post('/logout', [HomeController::class, 'logout'])->name('logout');

Route::get('/activity', [PageController::class, 'activity'])->name('activity.activity');
Route::get('/attendance', [PageController::class, 'attendance'])->name('attendance.attendance');
Route::get('/document', [PageController::class, 'document'])->name('document.document');
Route::get('/tracker', [PageController::class, 'tracker'])->name('tracker');

Route::middleware(['auth'])->group(function () {
    Route::get('/activity', [ActivityController::class, 'index'])->name('activity.index');
Route::post('/logout', [ActivityController::class, 'logout'])->name('logout');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/attendance', [AttendanceController::class, 'index'])->name('attendance.index');
    Route::post('/logout', [AttendanceController::class, 'logout'])->name('logout');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/document', [DocumentController::class, 'index'])->name('document.index');
    Route::post('/logout', [DocumentController::class, 'logout'])->name('logout');
});

