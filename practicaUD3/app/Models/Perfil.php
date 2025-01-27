<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table = 'perfiles';

    protected $fillable = ['usuario_id','edad','estado_fisico'];

    public function usuarios()
    {
        return $this->hasOne(Usuario::class, 'perfil_id');
    }
}
