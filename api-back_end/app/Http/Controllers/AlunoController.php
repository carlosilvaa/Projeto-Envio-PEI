<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response()->json(Aluno::all(), 200);
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
        $validated = $request->validate([
            'NOME' => 'required|max:100|unique:alunos,NOME',
            'RA' => 'nullable|max:7|unique:alunos,RA',
            'STATUS' => 'nullable|in:A,I',
            'EMAIL' => 'nullable|email|max:250',
        ]);

        $aluno = Aluno::create($validated);

        return response()->json($aluno, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $aluno = Aluno::findOrFail($id);
        return response()->json($aluno, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Aluno $aluno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $aluno = Aluno::findOrFail($id);
        $validated = $request->validate([
            'NOME' => 'required|max:100|unique:alunos,NOME,' . $id . ',CODALU',
            'RA' => 'nullable|max:7|unique:alunos,RA,' . $id . ',CODALU',
            'STATUS' => 'nullable|in:A,I',
            'EMAIL' => 'nullable|email|max:250',
        ]);

        $aluno->update($validated);
        return response()->json($aluno, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->delete();
        return response()->noContent();
    }
}
