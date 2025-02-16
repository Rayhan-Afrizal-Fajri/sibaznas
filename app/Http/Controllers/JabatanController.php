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
        $validated = $this->validateJabatan($request);

        Jabatan::create($validated);

        return redirect()->route('jabatan.index')->with('success', 'Data jabatan berhasil ditambahkan.');
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
        $validated = $this->validateJabatan($request, $jabatan->id);

        $jabatan->update($validated);

        return redirect()->route('jabatan.index')->with('success', 'Data jabatan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jabatan $jabatan): RedirectResponse
    {
        $jabatan->delete();
        return redirect()->route('jabatan.index')->with('success', 'Data jabatan berhasil dihapus.');
    }

    /**
     * Validation rules for Jabatan.
     */
    private function validateJabatan(Request $request, ?int $id = null): array
    {
        return $request->validate([
            'divisi_id' => 'required|exists:divisi,id',
            'jabatan'   => 'required|string|unique:jabatan,jabatan' . ($id ? ",$id" : ''),
        ]);
    }
}
