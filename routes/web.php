<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});
Route::get('blank', function () {
    return view('blank');
});

Route::get('subscription', function () {
    return view('subscription');
})->name('subscription');

Route::get('hospital-mgmt', function () {
    return view('hospital');
})->name('hospital');

Route::get('my-gym', function () {
    return view('gym');
})->name('gym');

Route::get('reports', function () {
    return view('report');
})->name('reports');

Route::get('auth/login', function () {
    return view('auth.login');
})->name('auth/login');

Route::get('auth/register', function () {
    return view('auth.signup.register');
})->name('auth/register');
