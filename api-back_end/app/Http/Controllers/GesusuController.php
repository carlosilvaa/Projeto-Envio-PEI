<?php

namespace App\Http\Controllers;

use App\Models\Gesusu;
use Illuminate\Http\Request;

class GesusuController extends Controller
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
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'NOME_PROFIS' => 'required|max:100|unique:gesusus,NOME_PROFIS',
                'SENHA' => 'required|max:8|unique:gesusus,SENHA',
                'STATUS' => 'nullable|in:A,I',
                'EMAIL' => 'nullable|email|max:250',
            ]);

            $gesusu = Gesusu::create($validated);
            return response()->json($gesusu, 201);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'errors' => $e->errors(),
            ], 422);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Gesusu $gesusu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gesusu $gesusu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'NOME_PROFIS' => 'required|max:100|unique:gesusus,NOME,' . $id . ',ID_USUARIO',
            'SENHA' => 'required|max:8',
            'STATUS' => 'nullable|in:A,I',
            'EMAIL' => 'nullable|email|max:250',
        ]);

        $gesusu = Gesusu::findOrFail($id);

        $gesusu->update($validated);

        return response()->json($gesusu, 200);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $aluno = Gesusu::findOrFail($id);
        $aluno->delete();
        return response()->noContent();
    }
}
