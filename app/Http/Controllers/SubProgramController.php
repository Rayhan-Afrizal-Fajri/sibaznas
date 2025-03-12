<?php

namespace App\Http\Controllers;

use App\Models\SubProgram;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Program;

class SubProgramController extends Controller
{
    public function getSubProgram($program_id)
    {
        // if (!$program_id) {
        //     return response()->json(['error' => 'Program ID tidak valid'], 400);
        // }
    
        $sub_programs = SubProgram::where('program_id', $program_id)->get();
        dd($sub_programs);
    
        if ($sub_programs->isEmpty()) {
            return response()->json([]);
        }
    
        return response()->json($sub_programs);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $this->validateSubProgram($request);

        try {
            SubProgram::create($validated);
            return redirect()->route('program.index')->with('success', 'Data sub program berhasil ditambahkan.');
        } catch (\Exception $e) {
            return response()->json(['error' => 'Program gagal ditambah']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(SubProgram $subProgram)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubProgram $subProgram)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'sub_program' => 'required|string|max:255',
        ]);
        $sub_program = SubProgram::findOrFail($request->sub_program_id);

        try {
            $sub_program->update([
                'sub_program' => $request->sub_program,
            ]);
            // SubProgram::update($validated);
            return redirect()->route('program.index')->with('success', 'Data sub program berhasil diperbarui.');
        } catch (\Exception $e) {
            return redirect()->route('program.index')->with('error', 'Terjadi kesalahan saat memperbarui sub program!'.$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubProgram $subProgram)
    {
        try {
            $subProgram->delete();
            return redirect()->route('program.index')->with('success', 'Sub Program berhasil dihapus!');
        } catch (\Exception $e) {
            return back()->withErrors('data sub program gagal dihapus : ' . $e->getMessage());
        }
    }


    private function validateSubProgram(Request $request, ?int $id = null): array {
        return $request->validate([
            'program_id' => 'required',
            'sub_program' => 'required|unique:sub_program,sub_program' . ($id? ", $id" : ''),
        ]);
    }
}
