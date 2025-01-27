<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;

class PlanesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Plan::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $planes = Plan::create($request->all());
            return response()->json($planes, 201);
        }catch(\Exception $e){
            return response()->json(['message'=>'error al crear el plan'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $planes = Plan::find($id);

        if (!$planes) {
            return response()->json(['message' => 'Plan no encontrado'], 404);
        }
    
        return response()->json($planes, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $planes = Plan::find($id);
        if(!$planes){
            return response()->json(['message' => 'Plan no encontrado'], 404);
        }else{
            $planes->update($request->only('nombre','precio'));
            return response()->json($planes, 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $planes = Plan::find($id);

    if (!$planes) {
        return response()->json(['message' => 'Alumno no encontrado'], 404);
    }

    $planes->delete();

    return response()->json(['message' => 'Alumno eliminado'], 200);
    }
}
