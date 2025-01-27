<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rutina extends Model
{
    protected $table = 'rutinas';

    protected $fillable = ['usuario_id','nombre','objetivo'];

    

    public function ejercicios()
    {
        return $this->belongsToMany(Ejercicio::class, 'ejercicios_rutina', 'rutina_id', 'ejercicio_id');
    }
}
