<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;
use App\Models\Pengguna;
use App\Models\Jabatan;
use App\Models\Wilayah;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class PengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $pengurus = Pengurus::all();
        $jabatan = Jabatan::all();
        $wilayah = Wilayah::all();
        return view('pengurus.index', compact('pengurus','jabatan', 'wilayah'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $jabatan = Jabatan::all();
        return view('', compact('jabatan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        //$validated = $this->validatePengurus($request);

        DB::beginTransaction();

        try {
            // Proses foto profil jika ada
            if (isset($request['foto_url'])) {
                $fotoPath = $request['foto_url']->store('foto', 'public');
            } else {
                $fotoPath = null;
            }

            // Proses foto profil jika ada
            if (isset($request['ttd_url'])) {
                $ttdPath = $request['ttd_url']->store('ttd', 'public');
            } else {
                $ttdPath = null;
            }

            // Proses foto profil jika ada
            if (isset($request['sk_url'])) {
                $skPath = $request['sk_url']->store('sk', 'public');
            } else {
                $skPath = null;
            }

            // Konversi format tanggal ke 'YYYY-MM-DD'
            $tglMulai = Carbon::createFromFormat('m/d/Y', $request->tgl_mulai)->format('Y-m-d');
            $tglSelesai = Carbon::createFromFormat('m/d/Y', $request->tgl_selesai)->format('Y-m-d');

            // Simpan data pengurus
            $pengurus = Pengurus::create([
                'jabatan_id' => $request->jabatan_id,
                'sk_nomor' => $request->sk_nomor,
                'sk_url' => $skPath,
                'tgl_mulai' => $tglMulai,
                'tgl_selesai' => $tglSelesai,
            ]);

            // Simpan data pengguna
            Pengguna::create([
                'nama' => $request['nama'],
                'email' => $request['email'],
                'nohp' => $request['nohp'],
                'foto_url' => $fotoPath,
                'ttd_url' => $ttdPath,
                'pengurus_id' => $pengurus->pengurus_id,
                'nik' => $request['nik'],
                'tempat_lahir' => $request['tempat_lahir'],
                'tgl_lahir' => Carbon::createFromFormat('m/d/Y', $request['tgl_lahir'])->format('Y-m-d'),
                'jenis_kelamin' => $request['jenis_kelamin'],
                'alamat' => $request['alamat'],
                'rt' => $request['rt'],
                'rw' => $request['rw'],
                'wilayah_id' => $request['wilayah_id'],
                'password' => Hash::make($request['nohp']), // Set password default
                //'status' => 'aktif',
            ]);

            DB::commit();

            return redirect()->route('pengurus.index')->with('success', 'Data Pengurus berhasil dibuat');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('pengurus.index')->with('error', 'Data Pengurus gagal dibuat'. $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengurus $pengurus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengurus $pengurus): View
    {
        $jabatan = Jabatan::all();
        return view('', compact('pengurus', 'jabatan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengurus $pengurus)
    {
        $validated = $this->validatePengurus($request, $pengurus->pengurus_id);
        
        try {
            $pengurus->update($validated);
        } catch (\Exception $e) {
            return back()->withErrors('Gagal memperbarui data: '. $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengurus $pengurus): RedirectResponse
    {
        try {
            $pengurus->delete();
            return redirect()->route('')->with('success', 'Data pengurus berhasil dihapus.');
        } catch (\Exception $e) {
            return back()->withErrors('Gagal menghapus data: ' . $e->getMessage());
        }
    }

    /**
     * Validasi data pengurus.
     */
    // private function validatePengurus(Request $request, ?int $id = null): array
    // {
    //     return $request->validate([
    //         'jabatan_id' => 'required|exists:jabatan,jabatan_id',
    //         'sk_nomor' => 'required|max:50|unique:pengurus,sk_nomor' . ($id ? ",$id" : ''),
    //         'sk_url' => 'nullable|url',
    //         'tgl_mulai' => 'required|date',
    //         'tgl_selesai' => 'nullable|date|after_or_equal:tgl_mulai',
    //         'status' => 'required|boolean',
    //     ]);
    // }

    private function validatePengurus(Request $request, ?string $id = null): array {
        return $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'nik' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'nohp' => 'required',
            'alamat' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'wilayah_id' => 'required',
            'jabatan_id' => 'required',
            'tgl_mulai' => 'required',
            'tgl_selesai' => 'required',
            'sk_nomor' => 'required',
        ]);
    }
}