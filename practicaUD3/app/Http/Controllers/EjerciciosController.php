<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Ejercicio;
use App\Models\Ejercicio as ModelsEjercicio;
use Exception;
use Illuminate\Http\JsonResponse;

class EjerciciosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        return response()->json(ModelsEjercicio::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        try{
            $ejercicios = ModelsEjercicio::create($request->all());
            return response()->json($ejercicios, 201);
        }catch(\Exception $e){
            return response()->json(['message'=>'error al crear el ejercicio'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResponse
    {
        $ejercicios = ModelsEjercicio::find($id);

        if (!$ejercicios) {
            return response()->json(['message' => 'Ejercicio no encontrado'], 404);
        }
    
        return response()->json($ejercicios, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): JsonResponse
    {
        $ejercicios = ModelsEjercicio::find($id);
        if(!$ejercicios){
            return response()->json(['message' => 'Ejercicio no encontrado'], 404);
        }else{
            $ejercicios->update($request->only('nombre', 'musculo', 'descripcion'));
            return response()->json($ejercicios, 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): JsonResponse
    {
        $ejercicios = ModelsEjercicio::find($id);

    if (!$ejercicios) {
        return response()->json(['message' => 'Ejercicio no encontrado'], 404);
    }

    $ejercicios->delete();

    return response()->json(['message' => 'Ejercicio eliminado'], 200);
    }
}
