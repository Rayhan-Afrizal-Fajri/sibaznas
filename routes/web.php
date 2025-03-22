<?php

use App\Http\Controllers\DetailPermohonanController;
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
use App\Models\Jabatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    Route::get('/index', [PermohonanController::class, 'index'])->name('permohonan.index');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/permohonan/post', [PermohonanController::class, 'store'])->name('permohonan.store');
    Route::post('/permohonan-mustahik/{id}', [DetailPermohonanController::class, 'tambah_mustahik'])->name('permohonan.tambah-mustahik');
    Route::post('/permohonan/lampiran', [DetailPermohonanController::class, 'tambah_lampiran'])->name('permohonan.tambah-lampiran');
    Route::post('/permohonan/{id}/lampiran/survey', [DetailPermohonanController::class, 'tambah_lampiran_survey'])->name('permohonan.tambah-lampiran-survey');
    Route::post('/permohonan/{id}/lampiran/pencairan', [DetailPermohonanController::class, 'tambah_lampiran_pencairan'])->name('permohonan.tambah-lampiran-pencairan');
    Route::post('/permohonan_post', [PermohonanController::class, 'permohonan_post'])->name('permohonan.filter');
    Route::put('/permohonan/{id}', [DetailPermohonanController::class, 'update'])->name('permohonan.update');
    Route::delete('/permohonan/{id}', [DetailPermohonanController::class, 'destroy']);
    Route::get('/detail-permohonan/{permohonan_id}', [DetailPermohonanController::class, 'index'])->name('permohonan.detail');
    Route::put('/permohonan-mustahik/{id}', [DetailPermohonanController::class, 'update_mustahik'])->name('permohonan.update-mustahik');
    Route::put('/permohonan-lampiran/{id}', [DetailPermohonanController::class, 'update_lampiran'])->name('permohonan.update-lampiran');
    Route::put('/permohonan-lampiran-survey/{id}', [DetailPermohonanController::class, 'update_lampiran_survey'])->name('permohonan.update-lampiran-survey');
    Route::put('/permohonan-lampiran-pencairan/{id}', [DetailPermohonanController::class, 'update_lampiran_pencairan'])->name('permohonan.update-lampiran-pencairan');
    Route::post('/permohonan-acc', [DetailPermohonanController::class, 'acc'])->name('permohonan.acc');
    Route::post('/permohonan-pencairan', [DetailPermohonanController::class, 'pencairan'])->name('permohonan.pencairan');
    Route::post('/permohonan-tolak-pencairan', [DetailPermohonanController::class, 'tolak_pencairan'])->name('permohonan.tolak-pencairan');
    Route::post('/permohonan-survey', [DetailPermohonanController::class, 'survey'])->name('permohonan.survey');
    Route::post('/permohonan-tolak', [DetailPermohonanController::class, 'tolak'])->name('permohonan.tolak');
    Route::delete('/mustahik/{id}', [DetailPermohonanController::class, 'destroy_mustahik']);
    Route::delete('/lampiran/{id}', [DetailPermohonanController::class, 'destroy_lampiran']);
    Route::delete('/lampiran-survey/{id}', [DetailPermohonanController::class, 'destroy_lampiran_survey']);
    Route::delete('/lampiran-pencairan/{id}', [DetailPermohonanController::class, 'destroy_lampiran_pencairan']);
    Route::get('/permohonan/selesai/{id}', [DetailPermohonanController::class, 'permohonanSelesai'])->name('permohonan.selesai');
    Route::get('/permohonan/batal/{id}', [DetailPermohonanController::class, 'permohonanBatal'])->name('permohonan.batal');;
    Route::get('/get-sub-programs', [ProgramController::class, 'getSubPrograms'])->name('get.sub_programs');
    Route::get('/get-subprograms/{programId}', [PermohonanController::class, 'getSubPrograms']);
    Route::get('/get-permohonan-nomor', [PermohonanController::class, 'getNomorPermohonan']);
    
    Route::get('/show-1', function() {
    return view('permohonan.show_1');
    });

    Route::resource('/program', ProgramController::class)->names('program');
    Route::resource('/sub_program', SubProgramController::class)->names('sub_program');
    Route::get('/get-subprograms', function (Request $request) {
        $subPrograms = DB::table('sub_program')->where('program_id', $request->program_id)->get();
        return response()->json($subPrograms);
    });
    // Route::get('/get-sub-program/{program_id}', [ProgramController::class, 'getSubProgram']);

    

    Route::resource('/divisi', DivisiController::class)->names('divisi');
    Route::resource('/jabatan', JabatanController::class)->names('jabatan');
    Route::resource('/pengurus', PengurusController::class)->names('pengurus');


    Route::get('/get-jabatan/{divisi_id}', function ($divisi_id) {
        $jabatans = Jabatan::where('divisi_id', $divisi_id)->get();
        return response()->json($jabatans);
    });

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
