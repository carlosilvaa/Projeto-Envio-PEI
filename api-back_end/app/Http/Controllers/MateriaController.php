<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
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
    public function create(Request $request){
        try {
            $validated = $request->validate([
                'DESCRICAO' => 'required|max:100|unique:materias,DESCRICAO',
                'CODPROF' => 'required|max:11|exists:professors,CODPROF',
                'STATUS' => 'nullable|in:A,I',
            ]);

            $materia = Materia::create($validated);
            return response()->json(['message' => 'Cadastro bem-sucedido!', "status"=> 200], 200);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'errors' => $e->errors(),
            ], 422);
        }
    }


    public function getMaterias() {
        try {
            $materias = Materia::where('STATUS', 'A')->get(['CODMAT', 'DESCRICAO']);
            return response()->json($materias);    
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erro ao obter as materias'], 500);
        }
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Materia $materia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Materia $materia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Materia $materia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Materia $materia)
    {
        //
    }
}
