<?php

use App\Http\Controllers\PermohonanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\SubProgramController;     
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PengurusController; 
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Models\SubProgram;
use Illuminate\Http\Request;

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
    Route::get('/detail-permohonan/{permohonan_id}', [PermohonanController::class, 'show'])->name('permohonan.detail');
    // Route::get('/detail_permohonan/1', [PermohonanController::class, 'show'])->name('permohonan.detail');

    Route::resource('/program', ProgramController::class)->names('program');
    Route::resource('/sub_program', SubProgramController::class)->names('sub_program');
    // Route::get('/get-sub-program/{program_id}', [ProgramController::class, 'getSubProgram']);

    Route::resource('/divisi', DivisiController::class)->names('divisi');
    Route::resource('/pengurus', PengurusController::class)->names('pengurus');


    Route::get('/get-sub-program/{program_id}', function ($program_id) {
        $subPrograms = SubProgram::where('program_id', $program_id)->get();
        return response()->json($subPrograms);
    });

});

// Route::resource('permohonan', PermohonanController::class);

// Route::get('/program', function () {
//     return view('program.index');
// })->name('program');



require __DIR__.'/auth.php';
