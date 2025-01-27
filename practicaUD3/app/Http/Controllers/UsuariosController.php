<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Usuario::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $usuarios = Usuario::create($request->all());
            return response()->json($usuarios, 201);
        }catch(\Exception $e){
            return response()->json(['message'=>'error al crear al usuario'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $usuarios = Usuario::find($id);

        if (!$usuarios) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }
    
        return response()->json($usuarios, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $usuarios = Usuario::find($id);
        if(!$usuarios){
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }else{
            $usuarios->update($request->only('nombre','correo','perfil_id','plan_id'));
            return response()->json($usuarios, 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $usuarios = Usuario::find($id);

    if (!$usuarios) {
        return response()->json(['message' => 'Usuario no encontrado'], 404);
    }

    $usuarios->delete();

    return response()->json(['message' => 'Usuario eliminado'], 200);
    }
}
