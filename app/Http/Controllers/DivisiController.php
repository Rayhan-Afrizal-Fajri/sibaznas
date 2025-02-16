<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $divisi = Divisi::all();
        return view('divisi.index', compact('divisi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('divisi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $this->validateDivisi($request);

        Divisi::create($validated);

        return redirect()->route('divisi.index')->with('success', 'Data divisi berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Divisi $divisi)
    {
        return view('divisi.edit', compact('divisi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Divisi $divisi): RedirectResponse
    {
        $validated = $this->validateDivisi($request, $divisi->id);

        $divisi->update($validated);

        return redirect()->route('divisi.index')->with('success', 'Data divisi berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Divisi $divisi): RedirectResponse
    {
        $divisi->delete();

        return redirect()->route('divisi.index')->with('success', 'Data divisi berhasil dihapus.');
    }

    /**
     * Validation rules for Divisi.
     */
    private function validateDivisi(Request $request, ?int $id = null): array
    {
        return $request->validate([
            'divisi' => 'required|string|unique:divisi,divisi' . ($id ? ",$id" : ''),
        ]);
    }
}
