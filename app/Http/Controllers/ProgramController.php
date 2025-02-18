<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
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
    public function store(Request $request): RedirectResponse
    {
        $validated = $this->validateProgram($request);
        try {
            Program::create($validated);
            return redirect();
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
    public function update(Request $request, Program $program): RedirectResponse
    {
        $validated = $this->validateProgram($request, $program->program_id);

        try {
            $program->update($validated);
            return redirect();
        } catch (\Exception $e) {
            return back()->withErrors('data program gagal diubah : '.$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Program $program): RedirectResponse
    {
        try {
            $program->delete();
            return redirect();
        } catch (\Exception $e) {
            return back()->withErrors('data program gagal dihapus : '.$e->getMessage());
        }
    }


    private function validateProgram(Request $request, ?int $id = null): array {
        return $request->validate([
            'program'. ($id ? ", $id" : ''),
        ]);
    }
}
