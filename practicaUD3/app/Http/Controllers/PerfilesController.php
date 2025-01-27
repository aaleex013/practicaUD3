<?php

namespace App\Http\Controllers;

use App\Models\Perfil;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class PerfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        return response()->json(Perfil::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        try{
            $perfiles = Perfil::create($request->all());
            return response()->json($perfiles, 201);
        }catch(\Exception $e){
            return response()->json(['message'=>'error al crear el perfil'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResponse
    {
        $perfiles = Perfil::find($id);

        if (!$perfiles) {
            return response()->json(['message' => 'Perfil no encontrado'], 404);
        }
    
        return response()->json($perfiles, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): JsonResponse
    {
        $perfiles = Perfil::find($id);
        if(!$perfiles){
            return response()->json(['message' => 'Perfil no encontrado'], 404);
        }else{
            $perfiles->update($request->only('usuario_id','edad','estado_fisico'));
            return response()->json($perfiles, 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): JsonResponse
    {
        $perfiles = Perfil::find($id);

    if (!$perfiles) {
        return response()->json(['message' => 'Perfil no encontrado'], 404);
    }

    $perfiles->delete();

    return response()->json(['message' => 'Perfil eliminado'], 200);
    }
}
