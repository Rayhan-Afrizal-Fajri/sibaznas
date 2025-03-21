<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\SubProgram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programs = Program::all();
        // $subProgram = SubProgram::all();
        return view('program.index', compact('programs'));
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
        $validated = $this->validateProgram($request);
        try {
            Program::create($validated);
            return redirect()->route('program.index')->with('success', 'Program berhasil ditambahkan.');
        } catch (\Exception $e) {
            return back()->withErrors('data program gagal ditambahkan : ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Program $program)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Program $program)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'program' => 'required|string|max:255',
        ]);
        
        $program = Program::findOrFail($request->program_id);
        // dd($request->program_id, $program);
        try {
            $program->update([
                'program' => $request->program,
            ]);
            return redirect()->route('program.index')->with('success', 'Program berhasil diperbarui!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memperbarui program!'.$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Program $program)
    {
        try {
            $program->delete();
            return redirect()->route('program.index')->with('success', 'Program berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus program!'.$e->getMessage());
        }
    }


        private function validateProgram(Request $request, ?string $id = null): array {
            return $request->validate([
                'program' => 'required|string|max:255|unique:program,program' . ($id ? ",$id" : ''),
            ]);
        }

    public function getSubProgram($program_id)
    {
        $program = Program::find($program_id);
        $subPrograms = SubProgram::where('program_id', $program_id)->get();
        return response()->json([
            'program' => $program,
            'subPrograms' => $subPrograms
        ]);
    }

    public function getSubPrograms(Request $request)
    {
        $sub_programs = DB::table('sub_program')
            ->where('program_id', $request->program_id)
            ->get();

        return response()->json($sub_programs);
    }
}
