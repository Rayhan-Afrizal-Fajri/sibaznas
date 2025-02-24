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
    Route::get('/permohonan', [PermohonanController::class, 'index'])->name('permohonan.index');
    Route::post('/permohonan_post', [PermohonanController::class, 'permohonan_post']);
    Route::get('/filter_permohonan/{c_filter_daterange}/{c_filters_fo}/{c_filters_atasan}/{c_filters_survey}/{c_filters_pencairan}/{c_filters_lpj}', [PermohonanController::class, 'filter_permohonan'])->name('permohonan.filter');
    // Route::get('/detail_permohonan/{permohonan_id}', [PermohonanController::class, 'show'])->name('permohonan.detail');
    Route::get('/detail_permohonan/1', [PermohonanController::class, 'show'])->name('permohonan.detail');
});

// Route::resource('permohonan', PermohonanController::class);

Route::get('/program', function () {
    return view('program.index');
})->name('program');



require __DIR__.'/auth.php';
