<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EjercicioRutina extends Model
{
    protected $table = 'ejercicios_rutina';

    protected $fillable = ['rutina_id','ejercicio_id','series'];
}
