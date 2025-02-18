<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;
use App\Models\Jabatan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Validation\ValidationException;

class PengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $pengurus = Pengurus::all();
        return view('', compact('pengurus'));
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
    public function store(Request $request): RedirectResponse
    {
        $validated = $this->validatePengurus($request);

        try {
            Pengurus::create($validated);
        }catch (\Exception $e) {
            return back()->withErrors('Data gagal, error :' . $e->getMessage());
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
    public function update(Request $request, Pengurus $pengurus): RedirectResponse
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
    private function validatePengurus(Request $request, ?int $id = null): array
    {
        return $request->validate([
            'jabatan_id' => 'required|exists:jabatan,jabatan_id',
            'sk_nomor' => 'required|string|max:50|unique:pengurus,sk_nomor' . ($id ? ",$id" : ''),
            'sk_url' => 'nullable|url',
            'tgl_mulai' => 'required|date',
            'tgl_selesai' => 'nullable|date|after_or_equal:tgl_mulai',
            'status' => 'required|boolean',
        ]);
    }
}