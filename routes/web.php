<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserPlanController;


// Public Routes
Route::get('/', function () {
    return view('welcome');
});
Route::get('/subscription', function () {
    return view('subscription');
});

Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [UserController::class, 'register']);

// Protected Routes (Require Authentication)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    Route::get('/user-plan-history', [UserPlanController::class, 'fetchHistory'])->name('user.plan.history');

    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::post('/update-profile', [UserController::class, 'updateProfile'])->name('update-profile');

    Route::post('/select-services', [UserController::class, 'selectServices'])->name('select-services');
    Route::post('/subscribe-plan', [UserController::class, 'subscribeToPlan'])->name('subscription');
    Route::get('/subscribe-plan', [UserController::class, 'subscribeToPlan'])->name('subscription');
    Route::get('/subscribe-plan', [UserController::class, 'subscribeToPlan'])->name('gym');
    Route::post('/subscribe-plan', [UserController::class, 'subscribeToPlan'])->name('hospital');
    Route::get('/user-plan', [UserController::class, 'getUserPlan'])->name('user-plan');

    Route::post('/add-beneficiary', [UserController::class, 'addBeneficiary'])->name('add-beneficiary');
    Route::get('/beneficiaries', [UserController::class, 'getBeneficiaries'])->name('beneficiaries');
});
