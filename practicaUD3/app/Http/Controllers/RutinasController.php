<?php

namespace App\Http\Controllers;

use App\Models\Rutina;
use Illuminate\Http\Request;

class RutinasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Rutina::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $rutinas = Rutina::create($request->all());
            return response()->json($rutinas, 201);
        }catch(\Exception $e){
            return response()->json(['message'=>'error al crear la rutina'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $rutinas = Rutina::find($id);

        if (!$rutinas) {
            return response()->json(['message' => 'Rutina no encontrada'], 404);
        }
    
        return response()->json($rutinas, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rutinas = Rutina::find($id);
        if(!$rutinas){
            return response()->json(['message' => 'Rutina no encontrada'], 404);
        }else{
            $rutinas->update($request->only('usuario_id','nombre','objetivo'));
            return response()->json($rutinas, 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rutinas = Rutina::find($id);

    if (!$rutinas) {
        return response()->json(['message' => 'Rutina no encontrada'], 404);
    }

    $rutinas->delete();

    return response()->json(['message' => 'Rutina eliminada'], 200);
    }
}
