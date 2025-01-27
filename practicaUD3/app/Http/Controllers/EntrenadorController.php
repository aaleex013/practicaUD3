<?php

namespace App\Http\Controllers;

use App\Models\Entrenador;
use Illuminate\Http\Request;

class EntrenadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Entrenador::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $entrenador = Entrenador::create($request->all());
            return response()->json($entrenador, 201);
        }catch(\Exception $e){
            return response()->json(['message'=>'error al crear al entrenador'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $entrenador = Entrenador::find($id);

        if (!$entrenador) {
            return response()->json(['message' => 'Entrenador no encontrado'], 404);
        }
    
        return response()->json($entrenador, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $entrenador = Entrenador::find($id);
        if(!$entrenador){
            return response()->json(['message' => 'Entrenador no encontrado'], 404);
        }else{
            $entrenador->update($request->only('nombre', 'especializacion'));
            return response()->json($entrenador, 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $entrenador = Entrenador::find($id);

    if (!$entrenador) {
        return response()->json(['message' => 'Entrenador no encontrado'], 404);
    }

    $entrenador->delete();

    return response()->json(['message' => 'Entrenador eliminado'], 200);
    }
}
