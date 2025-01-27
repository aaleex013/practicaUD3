<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EjercicioRutina;
use Illuminate\Http\JsonResponse;

class EjerciciosRutinasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        return response()->json(EjercicioRutina::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        try{
            $ejercicios_rutina = EjercicioRutina::create($request->all());
            return response()->json($ejercicios_rutina, 201);
        }catch(\Exception $e){
            return response()->json(['message'=>'error al crear la rutina de ejercicios'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResponse
    {
        $ejercicios_rutina = EjercicioRutina::find($id);

        if (!$ejercicios_rutina) {
            return response()->json(['message' => 'Rutina de ejercicios no encontrada'], 404);
        }
    
        return response()->json($ejercicios_rutina, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): JsonResponse
    {
        $ejercicios_rutina = EjercicioRutina::find($id);
        if(!$ejercicios_rutina){
            return response()->json(['message' => 'Rutina de ejercicios no encontrada'], 404);
        }else{
            $ejercicios_rutina->update($request->only('rutina_id','ejercicio_id','series'));
            return response()->json($ejercicios_rutina, 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): JsonResponse
    {
        $ejercicios_rutina = EjercicioRutina::find($id);

    if (!$ejercicios_rutina) {
        return response()->json(['message' => 'Rutina de ejercicios no encontrada'], 404);
    }

    $ejercicios_rutina->delete();

    return response()->json(['message' => 'Rutina de ejercicios eliminada'], 200);
    }
}
