<?php

namespace App\Http\Controllers;

use App\Models\SubProgram;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SubProgramController extends Controller
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
        $validated = $this->validateSubProgram($request);

        try {
            SubProgram::create($validated);
            return redirect();
        } catch (\Exception $e) {
            return back()->withErrors('data sub program gagal ditambah : ' . $e->getMessage());
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
    public function update(Request $request, SubProgram $subProgram): RedirectResponse
    {
        $validated = $this->validateSubProgram($request, $subProgram->sub_program_id);

        try {
            $subProgram->update($validated);

            return redirect()->back();
        } catch (\Exception $e) {
            return back()->withErrors('data sub program gagal diubah : ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubProgram $subProgram)
    {
        try {
            $subProgram->delete();
            return redirect()->back();
        } catch (\Exception $e) {
            return back()->withErrors('data sub program gagal dihapus : ' . $e->getMessage());
        }
    }


    private function validateSubProgram(Request $request, ?int $id = null): array {
        return $request->validate([
            'program_id' => 'required',
            'sub_program' => 'required|unique:jabatan, sub_program' . ($id? ", $id" : ''),
        ]);
    }
}
