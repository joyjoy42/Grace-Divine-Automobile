<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\FormationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/formations', [FormationController::class, 'index'])->name('formations.index');

Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');
