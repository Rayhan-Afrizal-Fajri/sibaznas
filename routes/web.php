<?php

use App\Http\Controllers\PermohonanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return Auth::check() ? redirect()->route('home') : redirect()->route('login');
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/permohonan', function () {
    return view('permohonan.index');
})->name('permohonan');

Route::get('/program', function () {
    return view('program.index');
})->name('program');

Route::get('/dumb-reset-password', function () {
    return view('auth.login');
})->name('dumb-reset-password');

require __DIR__.'/auth.php';
