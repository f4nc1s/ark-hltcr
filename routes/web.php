<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserPlanController;
use App\Http\Controllers\PaymentController;


// Public Routes
Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [UserController::class, 'register']);

// Protected Routes (Require Authentication) //do not modify anything here instead add your own route in another category under mine.
Route::middleware('auth')->group(function () {
    Route::get('/', [UserController::class, 'dashboard'])->name('dashboard');
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
    //Hospital
    Route::get('/hospital', [UserController::class, 'hospitals'])->name('hospital');
    Route::post('/select-hospital', [UserController::class, 'selectHospital'])->name('select.hospital');
    //Gym
    Route::get('/gym', [UserController::class, 'gyms'])->name('gym');
    Route::post('/select-gym', [UserController::class, 'selectGym'])->name('select.gym');

    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::post('/update-profile', [UserController::class, 'updateProfile'])->name('update-profile');
    Route::post('/select-services', [UserController::class, 'selectServices'])->name('select-services');
    Route::post('/subscribe-plan', [UserController::class, 'subscribeToPlan'])->name('subscription');
    Route::get('/subscribe-plan', [UserController::class, 'subscribeToPlan'])->name('subscription');
    // Route::get('/subscribe-plan', [UserController::class, 'gym'])->name('gym');
    Route::get('/subscription', [UserController::class, 'getUserPlan'])->name('subscription'); //user-plan
    Route::post('/add-beneficiary', [UserController::class, 'addBeneficiary'])->name('add-beneficiary');
    Route::get('/beneficiaries', [UserController::class, 'getBeneficiaries'])->name('beneficiaries');
    //handling paystack payment gateway endpoints
    Route::post('/pay', [PaymentController::class, 'redirectToPaystack'])->name('pay');
    Route::get('/pay/callback', [PaymentController::class, 'handlePaystackCallback']);
    Route::post('/webhook', [PaymentController::class, 'handleWebhook']);
});

Route::middleware('auth')->group(function () {

// Route::get('/gym', function () {return view('gym');})->name('gym');
// Route::get('/hospital', function () {return view('hospital');})->name('hospital');
Route::get('/user-plan-history', [UserPlanController::class, 'fetchHistory'])->name('user.plan.history');
});