<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jabatan = Jabatan::with('divisi')->get();
        return view('jabatan.index', compact('jabatan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jabatan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'divisi_id' => 'required',
            'jabatan' => 'required',
        ]);

        try {
            Jabatan::create($validated);

            return redirect()->route('divisi.index')->with('success', 'Data jabatan berhasil ditambahkan.');
        } catch (\Exception $e) {
            return back()->with('error', 'Jabatan gagal ditambahkan' . $e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jabatan $jabatan)
    {
        return view('jabatan.edit', compact('jabatan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jabatan $jabatan): RedirectResponse
    {
        $validated = $request->validate([
            // 'divisi_id' => 'required',
            'jabatan' => 'required',
        ]);
        try {
            
        $jabatan->update($validated);

        return redirect()->route('divisi.index')->with('success', 'Data jabatan berhasil diperbarui.');
        } catch (\Exception $e) {
            return redirect()->route('divisi.index')->with('error', 'Jabatan gagal diperbarui'.$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jabatan $jabatan): RedirectResponse
    {
        try {
            $jabatan->delete();
            return redirect()->route('divisi.index')->with('success', 'Data jabatan berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('divisi.index')->with('error', 'Data jabatan gagal dihapus.'. $e->getMessage());
        }
    }

    /**
     * Validation rules for Jabatan.
     */
    private function validateJabatan(Request $request, ?int $id = null): array
    {
        return $request->validate([
            'divisi_id' => 'required',
            'jabatan'   => 'required|string|unique:jabatan,jabatan' . ($id ? ",$id" : ''),
        ]);
    }
}
