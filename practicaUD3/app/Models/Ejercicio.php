<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ejercicio extends Model
{
    protected $table = 'ejercicios';

    protected $fillable = ['nombre','musculo','descripcion'];
    
    public $timestamps = true;

    public function rutinas()
    {
        return $this->belongsToMany(Rutina::class, 'ejercicios_rutina', 'ejercicio_id', 'rutina_id');
    }
}
