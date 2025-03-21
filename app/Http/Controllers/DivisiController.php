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
    public function update(Request $request, Divisi $divisi)
    {
        $request->validate([
            'divisi' => 'required|string|max:255',
            'kode_divisi' => 'required|string|max:255',
        ]);
        
        // $program = Divisi::findOrFail($request->divisi_id);
        // dd($request->program_id, $program);
        try {
            $divisi->update([
                'divisi' => $request->divisi,
                'kode_divisi' => $request->kode_divisi,
            ]);
            return redirect()->route('divisi.index')->with('success', 'Divisi berhasil diperbarui!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memperbarui program!'.$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Divisi $divisi)
    {
        try {
            $divisi->delete();
            return redirect()->route('divisi.index')->with('success', 'Divi berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus program!'.$e->getMessage());
        }
    }

    /**
     * Validation rules for Divisi.
     */
    private function validateDivisi(Request $request, ?int $id = null): array
    {
        return $request->validate([
            'divisi' => 'required|string|unique:divisi,divisi' . ($id ? ",$id" : ''),
            'kode_divisi' => 'required|integer',
        ]);
    }
}
